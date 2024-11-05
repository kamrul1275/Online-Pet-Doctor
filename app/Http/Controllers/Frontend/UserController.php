<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AppoinmentDate;
use App\Models\Discussion;
use App\Models\NewsPost;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

  public function Index($var = null)
  {
    $posts = NewsPost::get();
    $discussions =Discussion::get();

   $doctors = User::where('status','active')->where('role','doctor')->latest()->get();
    return view('Frontend.layout.dashboard',compact('discussions','posts','doctors'));
  }//   end method




public function Dashboard($var = null)
{

    $discussions =Discussion::get();

    return view('Frontend.layout.master',compact('discussions'));
}




//   end method




public function Services($var = null)
{
    $NewsPosts = NewsPost::get();
    return view('Frontend.body.services_page',compact('NewsPosts'));

}
//   end method





public function About($var = null)
{

    $doctors =  user::where('status','active')->where('role','doctor')->latest()->get();
    return view('Frontend.body.about_page',compact('doctors',));

}//   end method


public function Contact( $var = null)
{

    $discussions =Discussion::get();
    return view('Frontend.body.contact_page',compact('discussions'));
}//   end method


 public function StoreAppoinment(Request $request)
 {
    $appointment = new AppoinmentDate();

    $appointment->full_name = $request->full_name;
    $appointment->email = $request->email;
    $appointment->phone = $request->phone;

    //dd($request->id);
    $appointment->discussion_id = $request->id;


    //dd($request->discussion_name);
    $appointment->discussion = $request->discussion_name;
    $appointment->message = $request->message;
    $appointment->save();

    $notification = array(
        'message' => 'Appoinment Successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);

 }










}

