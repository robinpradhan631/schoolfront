<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\carousel;
use App\Models\courses;
use App\Models\video;
use App\Models\links;
use App\Models\gallery;
use App\Models\college;
use App\Models\Feedback;
use App\Models\Setting;

class FrontendController extends Controller
{
    public function homepage(){
        $carousel = carousel::where('status', 'active')->latest()->get();
        $courses = courses::where('status', 'active')->latest()->get();
        $college = college::where('status', 'active')->latest()->get();
        $video = video::where('status', 'active')->latest()->get();
        $feedback = Feedback::where('status', 'active')->latest()->get();
        return view('frontend.index',compact('carousel','courses','video','college','feedback',));
    }
    public function aboutus(){
        $setting = Setting::where('status', 'active')->latest()->first();
        return view('frontend.pages.aboutus',compact('setting'));
    }
    public function contatus(){
        return view('frontend.pages.contactus');
    }
    public function message(){
        $college = college::where('slag',$_GET['college'])->first();
        if($college == null){
            return back();
        }
        $course = courses::where('slag',$_GET['cource'])->first();
        if($course  == null){
            return back();
        }
        return view('frontend.pages.message',compact('college','course'));
    }
    public function gallery(){
        Paginator::useBootstrap();
        $gallery = gallery::where('status','active')->paginate(12);
        return view('frontend.pages.gallery',compact('gallery'));
    }
    public function college($slag){
        $collegedetails = college::where('slag', $slag)->first();
        $college = college::where('status', 'active')->latest()->get();
        $courses = courses::where('status', 'active')->latest()->get();
        return view('frontend.pages.college',compact('college','courses','collegedetails'));
    }
    public function findcollege($slag){
        $courses = courses::where('slag', $slag)->first();
        $relatedcourses = courses::where('status', 'active')->latest()->get();
        $college = college::where('status', 'active')->latest()->get();
        return view('frontend.pages.findcollege',compact('college','courses','relatedcourses'));
    }
}
