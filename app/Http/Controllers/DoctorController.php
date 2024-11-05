<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Auth\Events\Registered;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use App\Models\User;

use App\Models\NewsPost;
use App\Models\AppoinmentDate;

class DoctorController extends Controller

{


    public function DoctorLoginForm( $var = null)
 {
    return view('doctor.auth.login');
 }




   public function DoctorRegister( $var = null)
   {
    return view('doctor.auth.register');
   }

    public function DoctorDashboard($var = null)
    {
     return view('doctor.layout.doctor_dashboard');

    }//method end  designation phone



    public function doctorstore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],

            'phone' => ['required'],
        ]);

        $user = User::insert([
            'name' => $request->name,
            //dd( $request->name),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone'=>$request->phone,

            'role'=>'doctor',
            'status'=>'inactive',
        ]);

        $notification = array(
            'message' => 'Doctor register Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('doctor.login')->with($notification);
    }






    public function DoctorDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
          'message' => 'Doctor Logout Successfully',
          'alert-type' => 'success'
      );

        return redirect('/doctor/login')->with($notification);

    }//method end




public function DoctorProfile($var = null)
{
    return view('doctor.body.doctor_profile');
}//method end



public function DoctorProfileEdit($var = null)
{
    $id = Auth::user()->id;
    $doctor_profile =User::find($id);
    return view('doctor.body.doctor_profile_edit',compact('doctor_profile'));
}//method end





public function DoctorProfileStore(Request $request)
{
    $id = Auth::user()->id;

    $Data = User::find($id);

    $Data->username=$request->username;
    $Data->phone=$request->phone;
    $Data->address=$request->address;
    $Data->designation=$request->designation;

if($request->file('photo')) {
      $file = $request->file('photo');
      @unlink(public_path('upload/admin_images/'.$Data->photo));
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload/admin_images'),$filename);
      $Data['photo'] = $filename;
  }

//dd($data);

$Data->save();

$notification = array(
    'message' => 'Doctor Profile Updated Successfully',
    'alert-type' => 'success'
);

return redirect()->back()->with($notification);
}

// doctor login star


public function becomeDoctorLogin(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'username' => ['required', 'string', 'max:255'],

        'phone' => ['required'],

        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'designation'=>$request->designation,

        'role' => 'doctor',
        'status' => 'inactive',
        'password' => Hash::make($request->password),
    ]);

    event(new Registered($user));

    Auth::login($user);


    $notification = array(
        'message' => 'doctor Register Successfully',
        'alert-type' => 'success'
    );


    return redirect()->route('login')->with($notification);
}



function AppoinmentRequest() {
    $AppoinmentRequest = AppoinmentDate::get();

    return  view('doctor.appointment.request',compact('AppoinmentRequest'));




}

// new post satrt






public function CreateNews_post( $var = null)
{
   return view('doctor.NewsPost.Create_NewsPost');
}

public function StoreNews_post( Request $request)
{
   $newspost= new NewsPost();
   $newspost->heading= $request->heading;
   $newspost->description= $request->description;



   if($request->file('photo')) {
    $file = $request->file('photo');
    @unlink(public_path('upload/admin_images/'.$newspost->photo));
    $filename = date('YmdHi').$file->getClientOriginalName();
    $file->move(public_path('upload/news_post'),$filename);
    $newspost['photo'] = $filename;
}

   $newspost->save();

    $notification = array(
    'message' => 'News Post Successfully',
    'alert-type' => 'success'
   );

  return redirect()->back()->with($notification);


}


public function AllNews_post( $var = null)
{
    $NewsPosts = NewsPost::get();
    return view('doctor.NewsPost.All_NewsPost',compact('NewsPosts'));
}



public function EditNews_post( $id = null)
{

    $NewsPosts = NewsPost::find($id);
    return view('doctor.NewsPost.Edit_NewsPost',compact('NewsPosts'));
}



public function UpdateNews_post( Request $request,$id)
{
//     $newspost=  NewsPost::find($id);
//     $newspost->heading= $request->heading;
//     $newspost->description= $request->description;



//     if($request->file('photo')) {
//      $file = $request->file('photo');
//      @unlink(public_path('upload/news_post/'.$newspost->photo));
//      $filename = date('YmdHi').$file->getClientOriginalName();
//      $file->move(public_path('upload/news_post'),$filename);
//      $newspost['photo'] = $filename;
//  }

//     $newspost->save();



    $image = $request->file('photo');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(350,350)->save('upload/news_post/'.$name_gen);
    $save_url = 'upload/news_post/'.$name_gen;

    NewsPost::insert([
        'heading' => $request->heading,
        'description' => $request->description,

        'brand_image' => $save_url,
    ]);





     $notification = array(
     'message' => 'News Post update  Successfully',
     'alert-type' => 'success'
    );

   return redirect()->route('all.news_post')->with($notification);

}




public function DeleteNews_post( $id = null)
{
   $DeleteNews = NewsPost::find($id);
   $DeleteNews->delete();

   $notification = array(
    'message' => 'News Post Delete  Successfully',
    'alert-type' => 'warning'
   );
   return redirect()->route('all.news_post')->with($notification);
}










}
