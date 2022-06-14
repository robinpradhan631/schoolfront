@extends('frontend.layout.master')
@section('title' ,'Home')

@section('main-content')


<div class="main-contents">


    <div class="bucketbox">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" id="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Message</li>
            </ol>
        </nav>
    </div>


    <div class="sec-spacer">
        <div class="bucketbox">
            <div class="section_title align-center">
                <h1> Apply-Now </h1>
                @error('name')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
                @error('phone')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
                @error('password')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
                @error('role')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif
            </div>
            <form class="inquiry-section" action="{{ route('student.store') }}" id="" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="course_id" value="{{ $course->id }}">
                <input type="hidden" name="college_id" value="{{ $college->id }}">
                <div class="bucketrow">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input id="fname1" name="name" class="form-control forminput" type="text">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input id="email1" name="email"  class="form-control forminput" type="text">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label>Contact Number*</label>
                            <input id="contact1" name="contact"  class="form-control forminput" type="text">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label>Qualifications</label>
                            <input id="contact1" name="education"  class="form-control forminput" type="text">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label> Courses Intrested</label>
                            <input id="contact1" value="{{ $course->name }}" required  class="form-control forminput" type="text" disabled>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label> Collage Intrested</label>
                            <input id="contact1" value="{{ $college->name }}" required class="form-control forminput" type="text" disabled>
                        </div>
                    </div>
                </div>
                <div class="bucketrow">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Message </label>
                            <textarea cols="40" name="message"  rows="10" id="message1" name="message" class="textarea form-control forminput"></textarea>
                        </div>
                    </div>
                </div>
                <div class="bucketrow">
                    <div class="col-md-12 text-center">
                        <div class="form-group mb-0">
                            <input class="btn btn-primary btn-custome" id="btnSend1" type="submit" value="Submit Now"
                                style="margin-left:15px;margin-top:0px;">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>


</div>

    @endsection
