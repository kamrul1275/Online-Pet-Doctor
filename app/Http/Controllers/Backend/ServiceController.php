<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{



   public function CreateService($var = null)
   {
    return view('admin.service.create_service');
   }


   public function AllService($var = null)
   {
    return view('admin.service.all_service');
   }



}
