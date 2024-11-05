<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Auth\Events\Registered;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use App\Models\User;


class DoctorContoller extends Controller
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

    }//method end





    public function DoctorRegisterStore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=>'doctor',
            'status'=>'inactive',
        ]);

        $notification = array(
            'message' => 'Doctor register Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('doctor.login.form')->with($notification);
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




}
