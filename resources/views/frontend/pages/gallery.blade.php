@extends('frontend.layout.master')
@section('title' ,'Home')

@section('main-content')

    <div class="main-contents">
        <div class="">
            <div class="bucketbox linear-bg">
                <div class="section_title align-center">
                    <h1> Gallery </h1>
                  </div>
                <div class="demo-gallery sec-spacer">
                    <ul id="lightgallery" class="list-unstyled bucketrow">

                        @isset($gallery)
                        @foreach ($gallery as $gallerys)
                            <li class="col-md-3 col-6">
                                <a data-fancybox="gallery" href="{{ asset($gallerys->image) }}" class="fancy-boxs">
                                    <img src="{{ asset($gallerys->image) }}">
                                    <div class="image_details">
                                        <i class="fal fa-eye"></i>
                                    </div>
                                    <div class="partner-body p-2">
                                        <p class="Utitle"> {{ $gallerys->name }} </p>
                                    </div>
                                </a>
                            </li>

                        @endforeach
                        @endisset

                    </ul>

                    @isset($gallery)
                    {{ $gallery->links() }}
                    @endisset
                </div>
            </div>
        </div>
    </div>

@endsection
