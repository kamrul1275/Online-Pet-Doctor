<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\AppoinmentDate;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function AdminLoginForm($var = null)
    {
        return view('admin.body.admin_login');

    }//method end


  public function AdminDashboard($var = null)
  {

     $notification = array(
         'message' => 'Admin Login Successfully',
         'alert-type' => 'success'
     );

   return view('admin.layouts.admin_dashboard')->with($notification);

  }//method end


  public function AdminDestroy(Request $request): RedirectResponse
  {
      Auth::guard('web')->logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      $notification = array(
        'message' => 'Admin Logout Successfully',
        'alert-type' => 'success'
    );

      return redirect('/admin/login')->with($notification);

  }//method end


    public function AdminProfile( $var = null)
    {

        return view('admin.body.admin_profile');
    }
    // end method


    public function AdminProfileEdit( $var = null)
    {
        $id= Auth::user()->id;
        $adminProfile =User::find($id);

        return view('admin.body.admin_profile_edit',compact('adminProfile'));
    }
    //end method

    public function AdminProfileStore( Request $request)
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

    // $notification = array(
    //     'message' => 'Admin Profile Updated Successfully',
    //     'alert-type' => 'success'
    // );

    return redirect()->back();

    }//end method


    public function DoctorInActive($var = null)
    {

        $Inactivedoctor = user::where('status','inactive')->where('role','doctor')->latest()->get();
       //dd($Inactivedoctor);
        return view('admin.doctor.doctor_inactive',compact('Inactivedoctor'));

    }//end method



    public function DoctorInActiveDetails($id=null)
    {
         $doctorInactiveDetails = User::find($id);

         return view('admin.doctor.doctor_inactive_details',compact('doctorInactiveDetails'));

    }//end  DoctorInActiveDetails  method





  public function DoctorInActiveApprove(Request $request)
  {

     $Inactivedoctor_id =$request->id;
   //dd($Inactivedoctor);

   $Inactivedoctor = User::find($Inactivedoctor_id)->update([

          'status'=> 'active',
   ]);
//dd( $Inactivedoctor);

   $notification = array(
    'message' => 'Doctor Active Approve Successfully',
    'alert-type' => 'success'
);

   return redirect()->route('doctor.active')->with($notification);

  }//end  DoctorInActiveApprove  method





    public function DoctorActive($var = null)
    {
        $Activedoctor = user::where('status','active')->where('role','doctor')->latest()->get();
        return view('admin.doctor.doctor_active',compact('Activedoctor'));

    }//end method



    public function DoctorActiveDetails($id = null)
    {
        $doctoractiveDetails = User::find($id);

        return view('admin.doctor.doctor_active_details',compact('doctoractiveDetails'));

    }//end method


public function DoctorActiveApprove( Request $request)
{

    $Activedoctor_id =$request->id;

    //dd($request->id);

    $Activedoctor = User::find($Activedoctor_id)->update([

           'status'=> 'inactive',
    ]);
 //dd( $Activedoctor);

    $notification = array(
     'message' => 'Doctor Inactive Approve Successfully',
     'alert-type' => 'success'
 );
 return redirect()->route('doctor.inactive')->with($notification);


}


// APPOINMENT


function AppoinmentRequest() {
    $AppoinmentRequest = AppoinmentDate::get();

    return  view('admin.appointment.request',compact('AppoinmentRequest'));





}



}
