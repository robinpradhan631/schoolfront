@extends('frontend.layout.master')
@section('title' ,'Home')

@section('main-content')


<div class="main-contents">


    <div class="bucketbox">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" id="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Inquiry</li>
            </ol>
        </nav>
    </div>


    <div class="">
        <div class="bucketbox linear-bg">
            <div class="section_title align-center">
                <h1> Inquiry Us </h1>
            </div>
            <div class="bucketrow address-section">
                <div class="col-md-4">
                    <div class="address-info">
                        <i class="fa fa-map-marker"></i>
                        <h4>Address</h4>
                        <p><b> Professor Para (Near Sishu Udyan Park), Arambagh, Dist -  Hoogly, Pin - 712601 </b></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="address-info">
                        <i class="fa fa-phone"></i>
                        <h4>Contact Number</h4>
                        <p><b>Phone Number :</b>  +91 7478019619 / +91 9647270156 </p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="address-info">
                        <i class="fa fa-envelope"></i>
                        <h4>Email Address</h4>
                        <p> info@bengaleducation.co.in</p>
                        <br>
                    </div>
                </div>
            </div>

            @error('name')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $feedback }}</strong>
            </div>
            @enderror
            @error('email')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $feedback }}</strong>
                </div>
            @enderror
            @error('phone')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $feedback }}</strong>
                </div>
            @enderror
            @error('password')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $feedback }}</strong>
            </div>
            @enderror
            @error('role')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $feedback }}</strong>
            </div>
            @enderror
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
            <form action="{{ route('feedback.store') }}" id="" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="inquiry-section">
                <div class="section_title align-center">
                    <h1> FeedBack Us </h1>
                </div>
                <div class="bucketrow">
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input id="fname1" name="name" class="form-control forminput" type="text">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>Email*</label>
                            <input id="email1"  name="email"  class="form-control forminput" type="text">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>Contact Number*</label>
                            <input id="contact1" name="contact" class="form-control forminput" type="text">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>Education*</label>
                            <input id="contact1" name="education" class="form-control forminput" type="text">
                        </div>
                    </div>
                </div>
                <div class="bucketrow">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Feedback *</label>
                            <textarea cols="40" rows="10" id="message1"  name="feedback"  class="textarea form-control forminput"></textarea>
                        </div>
                    </div>
                </div>
                <div class="bucketrow">
                    <div class="col-md-12 text-center">
                        <div class="form-group">
                            <input class="btn btn-primary btn-custome" id="btnSend1" type="submit" value="Submit Now"
                                style="margin-left:15px;margin-top:0px;">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
    @endsection
