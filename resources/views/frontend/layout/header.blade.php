<?php
    $courses = App\Models\Courses::where('status', 'active')->latest()->get()
?>
<?php
$college = App\Models\College::where('status', 'active')->latest()->get()
?>
<?php
$setting = App\Models\Setting::where('status', 'active')->latest()->first()
?>

<div class="box-package">
    <div class="main-head">
      <div class="bucketbox">
        @isset($setting)
        <div class="bucketrow">
          <div class="col-md-6">
            <div class="head-left">
              <i class="fal fa-map-marker-alt poz-icon"></i>
              <span> {{ $setting->address }} </span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="head-right">
              <ul>
                <li class="contactus">
                  <a href="">
                    <i class="fal fa-phone-office poz-icon"></i>
                    <span> {{ $setting->contact }}</span>
                  </a>
                </li>
                <li class="contactus">
                  <a href="">
                    <i class="fal fa-envelope poz-icon"></i>
                    <span> {{ $setting->email }} </span>
                  </a>
                </li>
                <li class="contactus pl-3 pr-3 ml-2 mr-2" style="background: #fff;">
                  <a href="{{ url('/login') }}">
                    <span style=" color: #1f72ae; font-size: 12px; text-transform: uppercase;"> Login </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        @endisset
      </div>
    </div>
    <section class="nav-menu stickly">
      <div class="bucketbox">
        <div class="bucketrow">
          <div class="col-md-3 col-8">
            <div class="header-logo">

                @isset($setting)
                    <a href="{{ url('/') }}">
                        <img src="{{asset($setting->logo)}}" alt="{{asset($setting->logo)}}">
                    </a>
                @endisset

            </div>
          </div>
          <div class="col-md-9 col-4">
            <div class="menu-style clearfix">
              <nav class="main-menu">
                <div class="clearfix" id="navbarSupportedContent">
                  <ul class="navigation clearfix">
                    <li class="active">
                      <a href="{{ url('/') }}">
                        Home
                      </a>
                    </li>
                    <li class="">
                        <a href="{{ url('') }}"> Our Team </a>
                      </li>
                      <li class="">
                        <a href="{{ url('') }}"> Events </a>
                      </li>
                    {{-- <li class="">
                      <a href="{{ url('/aboutus') }}">About Us</a>
                    </li> --}}
                    <li class="">
                        <a href="{{ url('') }}"> Notice </a>
                      </li>
                    <li class="hover-me1">
                      <a href="{{ url('') }}">
                        Download
                      </a>
                      <ul class="drip-sub" id="show-me1">
                        @isset($college)
                        @foreach ($college as $collegeli)
                        <li>
                          <a href="{{ route('college', $collegeli->slag) }}">
                            {{ $collegeli->export }}
                          </a>
                        </li>
                        @endforeach
                        @endisset
                      </ul>
                    </li>
                    <li class="hover-me2">
                      <a href="{{ url('/courses') }}">
                        Courses
                      </a>
                        <ul class="drip-sub" id="show-me2">
                                @isset($courses)
                                @foreach ($courses as $coursesall)
                                <li>
                                <a href="{{ route('findcollege', $coursesall->slag) }}">
                                    {{ $coursesall->name }}
                                </a>
                                </li>
                                @endforeach
                                @endisset
                        </ul>
                    </li>
                    <li>
                      <a href="{{ url('/gallery') }}">
                        Gallery
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('/contatus') }}">
                        Inquiry Us
                      </a>
                    </li>
                  </ul>

                </div>
              </nav>
            </div>
            <div class="mobinav menu" onclick="openNav()"> <i class="far fa-bars"></i> </div>
            <div id="mymagicnav" class="magicnav">
              <div class="griha-contain" style="padding-top: 15px;">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <nav class="nav-bar" rolse="navigation">
                  <ul id="holdown" class="holdown">
                    <li style="border-top: 1px solid #CCC;">
                      <a href="{{ url('/') }}" class="link">
                        Home
                      </a>
                    </li>
                    <li class="">
                        <a class="link" href="{{ url('') }}"> Our Team </a>
                      </li>
                      <li class="">
                        <a class="link" href="{{ url('') }}"> Events </a>
                      </li>
                    {{-- <li class="">
                      <a href="{{ url('/aboutus') }}">About Us</a>
                    </li> --}}
                    <li class="">
                        <a class="link" href="{{ url('') }}"> Notice </a>
                      </li>

                    <li>
                      <a class="link"> Download <i class="fa fa-chevron-down right-angle"></i>
                      </a>
                      <ul class="childmenu">
                            @isset($college)
                            @foreach ($college as $collegeli)
                            <li>
                                <a href="{{ route('college', $collegeli->slag) }}">
                                    {{ $collegeli->export }}
                                </a>
                            </li>
                            @endforeach
                            @endisset
                      </ul>
                    </li>
                    <li>
                      <a class="link"> Courses <i class="fa fa-chevron-down right-angle"></i>
                      </a>
                      <ul class="childmenu">
                        @isset($courses)
                        @foreach ($courses as $coursesall)
                        <li>
                          <a href="{{ url('/courses') }}">
                            {{ $coursesall->name }}
                          </a>
                        </li>
                        @endforeach
                        @endisset
                      </ul>
                    </li>
                    <li>
                      <a class="link" href="{{ url('/gallery') }}"> Gallery </a>
                    </li>
                    <li>
                      <a class="link" href="{{ url('/contatus') }}"> Inquiry Us </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
