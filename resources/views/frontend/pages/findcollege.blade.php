@extends('frontend.layout.master')
@section('title' ,'Home')

@section('main-content')

    <div class="main-contents">
        <div class="bucketbox">
            <div class="bucketrow linear-bg">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" id="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> College </li>
                        <li class="breadcrumb-item active" aria-current="page"> RR Institution </li>
                        <li class="breadcrumb-item active" aria-current="page"> B.TECH </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="">
            <div class="bucketbox linear-bg">
                <div class="bucketrow" style="border-bottom: solid 2px #fafafa; box-shadow: 0 0 10px 0 rgb(0 0 0 / 5%);">
                    <div class="col-md-12 col-sm-12">
                        <div class="cou-item">
                            <div class="cou-icon">
                                <img src="{{ asset($courses->image) }}" alt="">
                            </div>
                            <h4 class="cou-title">
                                <a href="">{{ $courses->name }}</a>
                                <p class="m-0">{{ $courses->totalyear }} </p>
                                <span style="font-size: 12px;"> {{ $courses->description }}  </span>
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="bucketrow">
                    <div class="col-md-8 col-12" style="box-shadow: 0 0 10px 0 rgb(0 0 0 / 5%);">
                        @isset($courses->colleges)
                        @foreach ($courses->colleges as $collegelist)
                            <div class="bucketrow course-item">
                                <div class="col-md-6 p-0 shadow-sm">
                                    <div class="course-img p-2">
                                        <img src="{{ asset($collegelist->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 p-2">
                                    <div class="course-header">
                                        <a href="{{ route('college', $collegelist->slag) }}">
                                        <span class="course-category">
                                            {{ $collegelist->name }}
                                        </span>
                                        </a>
                                        <p class="course-title">
                                            <a>{{ $collegelist->export }}</a>
                                        <p>
                                        <p class="course-title">
                                            <a>{{ $collegelist->city }}</a>
                                        <p>
                                        <div class="course-value">
                                            Courses offer: <span> B Pharm/b Tech/bba/bba Hospital </span>
                                        </div>
                                    </div>
                                    <div class="course-body">
                                        <div class="course-button">
                                            <a href="{{ url('/message?college='.$collegelist->slag.'&cource='.$courses->slag) }}">Apply now</a>
                                        </div>
                                    </div>
                                    <div class="course-body">
                                        <div class="course-button">
                                            <a href="{{ route('college', $collegelist->slag) }}">See Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endisset


                    </div>
                    <div class="col-md-4 col-12">
                        <div class="bucketbox">
                            <div class="cou-title">
                              <h1> Similar Courses </h1>
                            </div>
                            <div class="bucketrow">
                              <div class="course-network clearfix">
                                <ul>
                                    @isset($relatedcourses)
                                    @foreach ($relatedcourses as $coursessim)
                                    <li>
                                    <a href="">
                                        {{ $coursessim->name }}
                                    </a>
                                    </li>
                                    @endforeach
                                    @endisset
                                </ul>
                              </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
