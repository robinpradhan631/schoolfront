@extends('frontend.layout.master')
@section('title' ,'Home')

@section('main-content')

  <section class="slider-wrapper">
    <div class="carousel slide" id="caro2">
      <div class="carousel-inner">

        @isset($carousel)
        @foreach ($carousel as $carouselitem)

        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset($carouselitem->image) }}">
          <figcaption class="caption">
            <div class="caption-inner">
              <a href="#" class="btn btn-transparent btn-caption"> Apply Now </a>
            </div>
          </figcaption>
        </div>

        @endforeach
        @endisset

        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('assets/img/imag1.jpg') }}" />
            <figcaption class="caption">
              <div class="caption-inner">
                <!-- <h2 class="caption-title w-100 animate__animated animate__backInLeft animate__fast"> Bengal Education
                </h2>
                <h3 class="caption-subtitle w-100"> Your Faith Our Responsibility </h3> -->
                {{-- <a href="#" class="btn btn-transparent btn-caption"> Contact Us </a> --}}
              </div>
            </figcaption>
          </div>
            <a class="carousel-control-prev dir" href="#caro2" data-slide="prev">
                <span class="carousel-control-prev-icon">
                <i class="far fa-angle-left"></i>
                </span>
            </a>
            <a class="carousel-control-next ns" href="#caro2" data-slide="next">
                <span class="carousel-control-next-icon">
                <i class="far fa-angle-right"></i>
                </span>
            </a>
    </div>
  </section>
  {{-- <div class="wb-services" style="margin-top: -70px;">
    <div class="bucketbox">

        <form class="bucketrow search-form services-item" method="post" action="#">
          <div class="col-md-3">
            <div class="categories">
              <select name="course_id" class="mystyles">
                <option value="">Select Course</option>
                <option value="34">mbbs</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="level">
              <select name="state_id" class="mystyles">
                <option value="">Select state</option>
                <option value="1">west bengal</option>
                <option value="2">uttar pradesh</option>
                <option value="3">tamilnadu</option>
                <option value="4">karnataka</option>
                <option value="5">delhi</option>
                <option value="6">maharastra</option>
                <option value="7">madhyapradesh</option>
                <option value="8">bihar</option>
                <option value="9">assam</option>
                <option value="10">andhrapradesh</option>
                <option value="11">chhattisgarh</option>
                <option value="12">tripura</option>
                <option value="13">jambu and kashmir</option>
                <option value="14">punjab</option>
                <option value="15">hariyana</option>
                <option value="16">meghalaya</option>
                <option value="17">arunachal pradesh</option>
                <option value="18">goa</option>
                <option value="19">gujrat</option>
                <option value="20">manipur</option>
                <option value="21">mizoram</option>
                <option value="22">nagaland</option>
                <option value="23">rajasthan</option>
                <option value="24">uttarakhand</option>
                <option value="25">talengana</option>
                <option value="26">orissa</option>
                <option value="27">kerala</option>
                <option value="28">sikkim</option>
                <option value="29">jharkhand</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="keyword">
              <input type="text" placeholder="Course Keyword...">
            </div>
          </div>
          <div class="col-md-3">
            <div class="search-btn">
              <button type="submit" class="btn-custome"> Search </button>
            </div>
          </div>
        </form>
    </div>
  </div> --}}
  <div class="Leadbox">
    <div class="bucketbox">
      <div class="bucketrow no-gutters Leadshadow">
        <div class="col-md-6">
          <div class="overview_img_inner">
            <div class="emb-respon">
                @isset($video)
                @foreach ($video as $videos)
                 {!! $videos->video !!}
                @endforeach
                @endisset
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="overview_text_inner">
            <div class="section_title align-center">
              <h1> Welcome To Bengal Education </h1>
            </div>
            <div class="section_body p-25">
              <span>
                Bengal Education is catering the needs of student.
                Bengal Education is an Educational Consultancy for All-over
                India and Abroad. Bengal Education is the platform, which will
                enable you to cater the vast but unspecified opportunity lying
                ahead of you in the field of getting higher education in
                Engineering, Management, Medical, Commerce, Science, Arts.
              </span>
            </div>
            <div class="section_foot">
              <a href="{{ url('/contatus') }}" class="btn btn-transparent btn-caption"> Contact Us </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="Leadbox">
    <div class="bucketbox Leadshadow linear-bg">
      <div class="section_title align-center">
        <h1> All Courses </h1>
      </div>
      <div class="bucketrow p-25">
        <div class="course-network clearfix">
          <ul>

        @isset($courses)
        @foreach ($courses as $allcourses)
            <li>
                <a href="{{ route('findcollege', $allcourses->slag) }}">{{ $allcourses->name }}</a>
            </li>
        @endforeach
        @endisset

          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="Leadbox">
    <div class="bucketbox heroSlider-fixed linear-bg">
      <div class="section_title align-center">
        <h1> Popular Colleges </h1>
      </div>
      <div class="bucketrow p-25 bengaledu slider colleze">
        @isset($college)
        @foreach ($college as $pcollege)
            <div class="col-md-3 col-12 imz_sz">
            <div class="bengaledu-item blue-color">
                <div class="cource-img">
                    <a href="{{ route('college', $pcollege->slag) }}">
                        <img src="{{ asset($pcollege->image) }}" alt="">
                    </a>
                </div>
                <div class="course-body">

                <h4 class="course-title">
                    <a href="{{ route('college', $pcollege->slag) }}">{{ $pcollege->name }}</a>
                </h4>
                <a href="" class="course-category"> {{ $pcollege->city }}</a>
                {{-- <div class="course-desc">
                    <a href="{{ route('college', $pcollege->slag) }}" style="color: black !important;">{{ Str::limit($pcollege->description,130) }}</a>
                </div> --}}
                </div>
                <div class="course-footer">
                <div class="course-student">
                    <a href="{{ route('college', $pcollege->slag) }}" class="label">Click For Details</a>
                </div>
                </div>
            </div>
            </div>
        @endforeach
        @endisset
      </div>
      <div class="arrow-wrap">
        <button type="button" class="prev-cl slick-arrow">
          <i class="fa fa-angle-left"></i>
        </button>
        <button type="button" class="next-cl slick-arrow">
          <i class="fa fa-angle-right"></i>
        </button>
      </div>
    </div>
  </div>

  <div class="Leadbox">
    <div class="bucketbox heroSlider-fixed linear-bg">
      <div class="section_title align-center">
        <h1> Popular Courses </h1>
      </div>
      <div class="bucketrow p-25 slider courze">
        @isset($courses)
        @foreach ($courses as $pcourses)
         <div class="col-md-2 col-6 imz_sz">
            <div class="partner-item">
              <div class="partner-img">
                <a href="{{ route('findcollege', $pcourses->slag) }}">
                  <img src="{{ asset($pcourses->image) }}" alt="">
                </a>
                <div class="social-icon">
                  <a href="#">

                    <i class="fa fa-link icon-size" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
              <div class="partner-body">
                <a href="{{ route('findcollege', $pcourses->slag) }}">
                  <p class="Utitle"> {{ $pcourses->name }} </p>
                </a>
                <span class="Udesignation">  {{ $pcourses->totalyear }}   </span>
              </div>
            </div>
          </div>
        @endforeach
        @endisset
      </div>
      <div class="arrow-wrap">
        <button type="button" class="prev-cz slick-arrow">
          <i class="fa fa-angle-left"></i>
        </button>
        <button type="button" class="next-cz slick-arrow">
          <i class="fa fa-angle-right"></i>
        </button>
      </div>
    </div>
  </div>

  <div class="Leadbox">
    <div class="bucketbox heroSlider-fixed linear-bg">
      <div class="section_title align-center">
        <h1> Students Feedback </h1>
      </div>
      <div class="bucketrow p-25 slider testimonial">

          @isset($feedback)
          @foreach ($feedback as $feedbacks)
            <div class="col-md-6 col-12 imz_sz">
                <div class="testimonial-item">
                <div class="testi-img">
                    {{-- <img src="{{ asset('assets/img/imag1.jpg') }}" alt="Jhon Smith"> --}}
                </div>
                <div class="testi-desc justify-align">
                    <h4 class="testi-name">{{ $feedbacks->name }}</h4>
                    <p style="font-weight: bold;"> {{ $feedbacks->education }} </p>
                    <br>
                    <p class="textalignment"> {{ $feedbacks->message }}</p>
                </div>
                </div>
            </div>
          @endforeach
          @endisset

      </div>
      <div class="arrow-wrap">
        <button type="button" class="prev-tz slick-arrow">
          <i class="fa fa-angle-left"></i>
        </button>
        <button type="button" class="next-tz slick-arrow">
          <i class="fa fa-angle-right"></i>
        </button>
      </div>
    </div>
  </div>

@endsection
