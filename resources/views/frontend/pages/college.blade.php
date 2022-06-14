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
                        <li class="breadcrumb-item active" aria-current="page"> College </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="">
            <div class="bucketbox linear-bg">
                <div class="bucketrow">
                    <div class="col-lg-12 col-md-12 Desc" style="padding-top: 30px;">
                        <div class="bucketrow">
                            <div class="col-md-8">
                                <ul class="meta-bucket">
                                    <li class="meta d-flex">
                                        <div class="image">
                                            <img src="{{ asset($collegedetails->image) }}">
                                        </div>
                                        <div class="college-name">
                                            <p style="color:black"> {{ $collegedetails->name }} </p>
                                            <p style="color:black">  {{ $collegedetails->city }}  </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bucketrow">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="course-des-tabs">
                                    <div class="tab-btm">
                                        <!-- Nav tabs -->
                                        <div class="tabs-wrapper">
                                            <ul class="nav classic-tabs tabs-cyan" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link waves-light active show" data-toggle="tab"
                                                        href="#overview" role="tab" aria-selected="true">
                                                        Overview
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#courses"
                                                        role="tab" aria-selected="false">Courses</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#location"
                                                        role="tab" aria-selected="false">Location</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link waves-light" data-toggle="tab"
                                                        href="#UniversityFeatures" role="tab"
                                                        aria-selected="false">Feature</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Tab panels -->
                                    <div class="tab-content card">
                                        <!--Panel 1-->
                                        <div class="tab-pane fade in active show" id="overview" role="tabpanel">
                                            <h4 class="desc-title">College Overview</h4>

                                            <img src="./img/imag1.jpg" class="img-fluid" alt="">
                                            <p style="text-align:justify; padding-top: 10px;">{{ $collegedetails->description }}</p>
                                        </div>
                                        <!--/.Panel 1-->
                                        <div class="tab-pane fade" id="courses" role="tabpanel">
                                            <div class="course-syllabus">
                                                <h4 class="desc-title">Courses</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Available Courses</th>
                                                                <th> Select </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @isset($collegedetails->courses)
                                                            @foreach ($collegedetails->courses as $coursesav)
                                                            <tr>
                                                                <td> {{ $coursesav->name }} </td>
                                                                <td>
                                                                   <a href="{{ route('findcollege', $coursesav->slag) }}"><input class="btn btn-primary btn-custome m-0" id="btnSend1" type="submit" value="Proceed"></a>
                                                                </td>
                                                            </tr>

                                                            @endforeach
                                                            @endisset
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        <!--Panel 2-->
                                        <div class="tab-pane fade" id="location" role="tabpanel">
                                            <div class="course-syllabus">
                                                <h4 class="desc-title">Location</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Location</th>
                                                                <th>State</th>
                                                                <th>City</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $collegedetails->address }}</td>
                                                                <td>{{ $collegedetails->state }}</td>
                                                                <td>{{ $collegedetails->city }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        <!--/.Panel 2-->

                                        <!--Panel 3-->
                                        <div class="tab-pane fade" id="UniversityFeatures" role="tabpanel">
                                            <h4 class="desc-title">College Feature</h4>
                                            <p>{!! $collegedetails->collegefeatures !!} </p>

                                        </div>

                                        <div class="tab-pane fade" id="courses" role="tabpanel">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection
