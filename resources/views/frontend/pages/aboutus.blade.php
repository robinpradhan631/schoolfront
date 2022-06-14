@extends('frontend.layout.master')
@section('title' ,'Home')

@section('main-content')


<div class="main-contents">
    <div class="bucketbox linear-bg">
        <div class="bucketrow">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> About Us </li>

                </ol>
            </nav>
        </div>
    </div>
    <div class="">
        <div class="bucketbox linear-bg">
            <div class="bucketrow">
                <div class="col-md-6 col-12">
                    <div class="overview_img_inner imz">
                        @isset($setting)
                        <a href="{{ url('/') }}">
                            <img src="{{asset($setting->aboutuspageimage)}}" alt="{{asset($setting->logo)}}">
                        </a>
                    @endisset
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="wellcome-left-colmun">
                        <div class="content-text">

                            @isset($setting)
                            <div class="text">
                                {!! $setting->aboutpagedescription !!}
                            </div>
                            @endisset

                        </div>
                    </div>
                </div>
            </div>
            <div class="section_title align-center mb-4">
                <h1> Our Services </h1>
            </div>
            <div class="bucketrow ws-bucket">

                <div class="ws-item col-12 col-md-4 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: none;">
                    <div class="item shadow-lg">
                        <a class="link" href="" title="">
                            <span class="ws-icon">
                                <i class="far fa-graduation-cap"></i>
                            </span>
                            <span class="ws-title"> Career Counselling </span>

                        </a>
                    </div>
                </div>
                <div class="ws-item col-12 col-md-4 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: none;">
                    <div class="item shadow-lg">
                        <a class="link" href="" title="">
                            <span class="ws-icon">
                                <i class="far fa-file-alt"></i>
                            </span>
                            <span class="ws-title"> Documentation </span>

                        </a>
                    </div>
                </div>
                <div class="ws-item col-12 col-md-4 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: none;">
                    <div class="item shadow-lg">
                        <a class="link" href="" title="">
                            <span class="ws-icon">
                                <i class="fad fa-books"></i>
                            </span>
                            <span class="ws-title"> Hassle Free Education </span>

                        </a>
                    </div>
                </div>
                <div class="ws-item col-12 col-md-4 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: none;">
                    <div class="item shadow-lg">
                        <a class="link" href="" title="">
                            <span class="ws-icon">
                                <i class="fal fa-book-open"></i>
                            </span>
                            <span class="ws-title"> 100% Scholarship </span>

                        </a>
                    </div>
                </div>
                <div class="ws-item col-12 col-md-4 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: none;">
                    <div class="item shadow-lg">
                        <a class="link" href="" title="">
                            <span class="ws-icon">
                                <i class="far fa-handshake"></i>
                            </span>
                            <span class="ws-title"> Education Loan </span>

                        </a>
                    </div>
                </div>
                <div class="ws-item col-12 col-md-4 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: none;">
                    <div class="item shadow-lg">
                        <a class="link" href="" title="">
                            <span class="ws-icon">
                                <i class="far fa-phone-alt"></i>
                            </span>
                            <span class="ws-title"> 24/7 Full Supportive </span>

                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
