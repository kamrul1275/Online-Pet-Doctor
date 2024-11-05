<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Discussion;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{



   public function CreateDiscussion( $var = null)
   {
    return view('admin.discussion.Create_discussion');
   }




   public function StoreDiscussion(Request $request)
   {
         $discussion = new Discussion();
         //dd($request->discussion_name);
         $discussion->discussion_name = $request->discussion_name;
         $discussion->discussion_day = $request->discussion_day;
         $discussion->save();


         $notification = array(
            'message' => 'Discussion Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);



   }


   public function allDiscussion( $var = null)
   {


    $discusions = Discussion::get();

    return view('admin.discussion.All_discussion',compact('discusions'));
   }



}
