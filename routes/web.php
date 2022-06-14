<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\SettingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// FRONTEND SECTION

Route::get('/', [FrontendController::class, 'homepage']) ->name('homepage');
Route::get('/aboutus', [FrontendController::class, 'aboutus']) ->name('aboutus');
Route::get('/contatus', [FrontendController::class, 'contatus']) ->name('contatus');
Route::get('/message', [FrontendController::class, 'message']) ->name('message');
Route::get('/gallery', [FrontendController::class, 'gallery']) ->name('gallery');
Route::get('/college/{slag}', [FrontendController::class, 'college']) ->name('college');
Route::get('/findcollege/{slag}', [FrontendController::class, 'findcollege']) ->name('findcollege');


    //message
    // Route::get('/admin/message', [MessageController::class,'index']);
    Route::get('/student/message-add', [MessageController::class,'create']);
    Route::post('/student/message-store', [MessageController::class,'store'])->name('student.store');
    // Route::get('/admin/message-delet/{id}', [MessageController::class,'deletemessage'])->name('message.delet');
    // Route::get('/admin/message-edit/{id}', [MessageController::class,'showmessage'])->name('message.edit');
    // Route::post('/admin/message-update/{id}', [MessageController::class,'update'])->name('message.update');
    // Route::get('/admin/message/status/{id}', [MessageController::class,'messagestatus'])->name('message.status');

// BACKEND SECTION

Route::middleware(['auth','Admin'])->group(function () {

    // Route::get('admin', [App\Http\Controllers\BackendController::class, 'index']) -> name('admin');


    Route::get('/admin', [HomeController::class, 'index'])->name('admin');
    // User
    Route::get('/admin/users', [UserController::class,'index']) -> name('admin.user.index');
    Route::get('/admin/add-users', [UserController::class,'create']) -> name('admin.user.create');
    Route::post('/admin/store-users', [UserController::class,'store'])->name('admin.user.store');
    Route::get('/admin/delete-users/{id}', [UserController::class,'delete'])->name('admin.user.delete');
    Route::get('/admin/edit-users/{id}', [UserController::class,'show'])->name('admin.user.edit');
    Route::post('/admin/update-users/{id}', [UserController::class,'update'])->name('admin.user.update');
    Route::get('/admin/users/status/{id}', [UserController::class,'userstatus'])->name('users.status');
    Route::get('/admin/users/role/{id}', [UserController::class,'userrole'])->name('users.role');
    // Profile
    Route::get('/profile', [App\Http\Controllers\BackendController::class, 'profile'])->name('admin.profile.index');
    Route::post('/profile/{id}', [App\Http\Controllers\BackendController::class, 'profileUpdate'])->name('admin.profile.update');

    //Carousel
    Route::get('/admin/carousel', [CarouselController::class,'index']);
    Route::get('/admin/carousel-add', [CarouselController::class,'create']);
    Route::post('/admin/carousel-store', [CarouselController::class,'store'])->name('carousel.store');
    Route::get('/admin/carousel-delet/{id}', [CarouselController::class,'deleteCarousel'])->name('carousel.delet');
    Route::get('/admin/carousel-edit/{id}', [CarouselController::class,'showCarousel'])->name('carousel.edit');
    Route::post('/admin/carousel-update/{id}', [CarouselController::class,'update'])->name('carousel.update');
    Route::get('/admin/carousel/status/{id}', [CarouselController::class,'carouselstatus'])->name('carousel.status');

    //courses
    Route::get('/admin/courses', [CoursesController::class,'index']);
    Route::get('/admin/courses-add', [CoursesController::class,'create']);
    Route::post('/admin/courses-store', [CoursesController::class,'store'])->name('courses.store');
    Route::get('/admin/courses-delet/{id}', [CoursesController::class,'deletecourses'])->name('courses.delet');
    Route::get('/admin/courses-edit/{id}', [CoursesController::class,'showcourses'])->name('courses.edit');
    Route::post('/admin/courses-update/{id}', [CoursesController::class,'update'])->name('courses.update');
    Route::get('/admin/courses/status/{id}', [CoursesController::class,'coursesstatus'])->name('courses.status');

    //Setting
    Route::get('/admin/setting', [SettingController::class,'index']);
    Route::get('/admin/setting-add', [SettingController::class,'create']);
    Route::post('/admin/setting-store', [SettingController::class,'store'])->name('setting.store');
    Route::get('/admin/setting-delet/{id}', [SettingController::class,'deletesetting'])->name('setting.delet');
    Route::get('/admin/setting-edit/{id}', [SettingController::class,'showsetting'])->name('setting.edit');
    Route::post('/admin/setting-update/{id}', [SettingController::class,'update'])->name('setting.update');
    Route::get('/admin/setting/status/{id}', [SettingController::class,'settingstatus'])->name('setting.status');

    //college
    Route::get('/admin/college', [CollegeController::class,'index']);
    Route::get('/admin/college-add', [CollegeController::class,'create']);
    Route::post('/admin/college-store', [CollegeController::class,'store'])->name('college.store');
    Route::get('/admin/college-delet/{id}', [CollegeController::class,'deletecollege'])->name('college.delet');
    Route::get('/admin/college-edit/{id}', [CollegeController::class,'showcollege'])->name('college.edit');
    Route::post('/admin/college-update/{id}', [CollegeController::class,'update'])->name('college.update');
    Route::get('/admin/college/status/{id}', [CollegeController::class,'collegestatus'])->name('college.status');

    //gallery
    Route::get('/admin/gallery', [GalleryController::class,'index']);
    Route::get('/admin/gallery-add', [GalleryController::class,'create']);
    Route::post('/admin/gallery-store', [GalleryController::class,'store'])->name('gallery.store');
    Route::get('/admin/gallery-delet/{id}', [GalleryController::class,'deletegallery'])->name('gallery.delet');
    Route::get('/admin/gallery-edit/{id}', [GalleryController::class,'showgallery'])->name('gallery.edit');
    Route::post('/admin/gallery-update/{id}', [GalleryController::class,'update'])->name('gallery.update');
    Route::get('/admin/gallery/status/{id}', [GalleryController::class,'gallerystatus'])->name('gallery.status');

    //links
    Route::get('/admin/links', [LinksController::class,'index']);
    Route::get('/admin/links-add', [LinksController::class,'create']);
    Route::post('/admin/links-store', [LinksController::class,'store'])->name('links.store');
    Route::get('/admin/links-delet/{id}', [LinksController::class,'deletelinks'])->name('links.delet');
    Route::get('/admin/links-edit/{id}', [LinksController::class,'showlinks'])->name('links.edit');
    Route::post('/admin/links-update/{id}', [LinksController::class,'update'])->name('links.update');
    Route::get('/admin/links/status/{id}', [LinksController::class,'linksstatus'])->name('links.status');

    //video
    Route::get('/admin/video', [VideoController::class,'index']);
    Route::get('/admin/video-add', [VideoController::class,'create']);
    Route::post('/admin/video-store', [VideoController::class,'store'])->name('video.store');
    Route::get('/admin/video-delet/{id}', [VideoController::class,'deletevideo'])->name('video.delet');
    Route::get('/admin/video-edit/{id}', [VideoController::class,'showvideo'])->name('video.edit');
    Route::post('/admin/video-update/{id}', [VideoController::class,'update'])->name('video.update');
    Route::get('/admin/video/status/{id}', [VideoController::class,'videostatus'])->name('video.status');

    //message
    Route::get('/admin/message', [MessageController::class,'index']);
    Route::get('/admin/message-add', [MessageController::class,'create']);
    Route::post('/admin/message-store', [MessageController::class,'store'])->name('message.store');
    Route::get('/admin/message-delet/{id}', [MessageController::class,'deletemessage'])->name('message.delet');
    Route::get('/admin/message-edit/{id}', [MessageController::class,'showmessage'])->name('message.edit');
    Route::post('/admin/message-update/{id}', [MessageController::class,'update'])->name('message.update');
    Route::get('/admin/message/status/{id}', [MessageController::class,'messagestatus'])->name('message.status');

    //feedback
    Route::get('/admin/feedback', [FeedbackController::class,'index']);
    Route::get('/admin/feedback-add', [FeedbackController::class,'create']);
    Route::post('/admin/feedback-store', [FeedbackController::class,'store'])->name('feedback.store');
    Route::get('/admin/feedback-delet/{id}', [FeedbackController::class,'deletefeedback'])->name('feedback.delet');
    Route::get('/admin/feedback-edit/{id}', [FeedbackController::class,'showfeedback'])->name('feedback.edit');
    Route::post('/admin/feedback-update/{id}', [FeedbackController::class,'update'])->name('feedback.update');
    Route::get('/admin/feedback/status/{id}', [FeedbackController::class,'feedbackstatus'])->name('feedback.status');

});

Auth::routes();
Route::get('/users/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
