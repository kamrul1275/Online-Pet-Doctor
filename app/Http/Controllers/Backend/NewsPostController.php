<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use Illuminate\Http\Request;
use Image;
class NewsPostController extends Controller
{
    public function CreateNews_post( $var = null)
    {
       return view('admin.NewsPost.Create_NewsPost');
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
        return view('admin.NewsPost.All_NewsPost',compact('NewsPosts'));
    }



    public function EditNews_post( $id = null)
    {

        $NewsPosts = NewsPost::find($id);
        return view('admin.NewsPost.Edit_NewsPost',compact('NewsPosts'));
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
