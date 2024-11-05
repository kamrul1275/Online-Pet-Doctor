<?php

use App\Http\Controllers\Backend\AdminController;

use App\Http\Controllers\Backend\DiscussionController;
use App\Http\Controllers\Backend\NewsPostController;

use App\Http\Controllers\Backend\ServiceController;

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;



Route::get('/', [UserController::class, 'Index']);


Route::get('/dashboard', [UserController::class, 'Dashboard'])->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/Services', [UserController::class, 'Services'])->name('user.Services');
Route::get('/About', [UserController::class, 'About'])->name('user.About');
Route::get('/Contact', [UserController::class, 'Contact'])->name('user.Contact');


Route::post('/appoinment/store', [UserController::class, 'StoreAppoinment'])->middleware(['auth'])->name('user.appoinment.store');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// Admin part start...............................


Route::get('/admin/login',[AdminController::class, 'AdminLoginForm'])->name('admin.login.form');


 Route::middleware(['auth','role:admin'])->group(function() {

    Route::get('/admin/dashboard',[AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/logout',[AdminController::class, 'AdminDestroy'])->name('admin.logout');

    Route::get('/admin/profile',[AdminController::class, 'AdminProfile'])->name('admin.profile');

    Route::get('/admin/profile/edit',[AdminController::class, 'AdminProfileEdit'])->name('admin.profile.Edit');


    Route::post('/admin/profile/store',[AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');


    // docotor manage




    Route::get('/doctor/inactive', [AdminController::class, 'DoctorInActive'])->name('doctor.inactive');

    Route::get('/doctor/inactive/details/{id}', [AdminController::class, 'DoctorInActiveDetails'])->name('doctor.inactive.details');


    Route::post('/doctor/inactive/approve', [AdminController::class, 'DoctorInActiveApprove'])->name('doctor.inactive.approve');






    Route::get('/doctor/active', [AdminController::class, 'DoctorActive'])->name('doctor.active');

    Route::get('/doctor/active/details/{id}', [AdminController::class, 'DoctorActiveDetails'])->name('doctor.active.details');

    Route::post('/doctor/active/approve', [AdminController::class, 'DoctorActiveApprove'])->name('doctor.active.approve');




    // News_post part................


    Route::get('/admin/create/news_post', [NewsPostController::class, 'CreateNews_post'])->name('create.news_post');

    Route::post('/admin/create/news_post', [NewsPostController::class, 'StoreNews_post'])->name('store.news.post');


    Route::get('/admin/all/news_post', [NewsPostController::class, 'AllNews_post'])->name('all.news_post');


    Route::get('/admin/edit/news_post/{id}', [NewsPostController::class, 'EditNews_post'])->name('edit.news_post');


    Route::post('/admin/update/news_post/{id}', [NewsPostController::class, 'UpdateNews_post'])->name('update.news_post');


    Route::get('/admin/delete/news_post/{id}', [NewsPostController::class, 'DeleteNews_post'])->name('delete.news_post');




    // ************* Discassion Part



    Route::get('/admin/create/discussion', [DiscussionController::class, 'CreateDiscussion'])->name('create.discussion');


    Route::post('/admin/store/discussion', [DiscussionController::class, 'StoreDiscussion'])->name('store.discussion');



    Route::get('/admin/all/discussion', [DiscussionController::class, 'allDiscussion'])->name('all.discussion');


    Route::get('/admin/create/service', [ServiceController::class, 'CreateService'])->name('create.service');

    Route::get('/admin/all/service', [ServiceController::class, 'allService'])->name('all.service');




// ************* Appoinment  Part

Route::get('/appoinment/request', [AdminController::class, 'AppoinmentRequest'])->name('admin.appoinment.request');


});










//Doctor part start......................





Route::get('/doctor/login',[DoctorController::class, 'DoctorLoginForm'])->name('doctor.login');

Route::get('/doctor/register', [DoctorController::class, 'DoctorRegister'])->name('doctor.register');

Route::post('/doctor/store', [DoctorController::class, 'doctorstore'])->name('doctor.store');





Route::middleware(['auth','role:doctor'])->group(function() {

    Route::get('/doctor/dashboard',[DoctorController::class, 'DoctorDashboard'])->name('doctor.dashboard');

    Route::get('/doctor/logout',[DoctorController::class, 'DoctorDestroy'])->name('doctor.logout');


    Route::get('/doctor/profile',[DoctorController::class, 'DoctorProfile'])->name('doctor.profile');

    Route::get('/doctor/profile/edit',[DoctorController::class, 'DoctorProfileEdit'])->name('doctor.profile.Edit');


    Route::post('/doctor/profile/store',[DoctorController::class, 'DoctorProfileStore'])->name('doctor.profile.store');





// ************* Appoinment  Part

Route::get('/doctor/appoinment/request', [DoctorController::class, 'AppoinmentRequest'])->name('doctor.appoinment.request');




});

//Doctor part End......................


// doctor new post start..........##############
// doctor new post start..........##############




    // News_post part................


    Route::get('/doctor/create/news_post', [DoctorController::class, 'CreateNews_post'])->name('doctor.create.news_post');

    Route::post('/doctor/create/news_post', [DoctorController::class, 'StoreNews_post'])->name('doctor.store.news.post');


    Route::get('/doctor/all/news_post', [DoctorController::class, 'AllNews_post'])->name('doctor.all.news_post');


    Route::get('/doctor/edit/news_post/{id}', [DoctorController::class, 'EditNews_post'])->name('doctor.edit.news_post');


    Route::post('/doctor/update/news_post/{id}', [DoctorController::class, 'UpdateNews_post'])->name('doctor.update.news_post');


    Route::get('/doctor/delete/news_post/{id}', [DoctorController::class, 'DeleteNews_post'])->name('doctor.delete.news_post');


