<?php
    $links = App\Models\Links::where('status', 'active')->latest()->get()
?>
<?php
$setting = App\Models\Setting::where('status', 'active')->latest()->first()
?>
<footer class="main-footer bg-four sp-footer">
    <div class="bucketbox">
        <div class="bucketrow">
            <div class="col-xl-4 col-lg-6 col-sm-12 footer-colmun">
                <div class="footer-clomun footer-about-widget">
                    <div class="footer-logo">
                        <figure>
                            <a href="">
                                <img src="./img/logo.png" alt=""></a>
                        </figure>
                    </div>
                    <p class="fnt-size14">
                        {{ $setting->descriptionfooter }}
                    </p>
                    <ul class="social-icons-ql">
                        @isset($links)
                        @foreach ($links as $linkse)
                                <li><a href="{{ $linkse->facebook }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="{{ $linkse->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $linkse->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="{{ $linkse->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="{{ $linkse->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        @endforeach
                        @endisset
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-sm-12 footer-colmun">
                <div class="footer-clomun footer-menu-link">
                    <div class="sec-title-one pb-one">
                        <h6>Quick Links</h6>
                    </div>
                    <ul>
                        <li>
                            <a href="">
                                <i class="fa fa-arrow-circle-right pr-2" aria-hidden="true"></i>
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-arrow-circle-right pr-2" aria-hidden="true"></i>
                                Colleges
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-arrow-circle-right pr-2" aria-hidden="true"></i>
                                Courses
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-arrow-circle-right pr-2" aria-hidden="true"></i>
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-arrow-circle-right pr-2" aria-hidden="true"></i>
                                Inquiry Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-12 footer-colmun">
                <div class="footer-clomun footer-blog">
                    <div class="sec-title-one pb-one">
                        <h6>Contact us</h6>
                    </div>
                    <div class="item">
                        <div class="icon-box">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="icon-text">
                            <p><span style="color: #fff; font-size: 15px; font-weight: 500">
                                {{ $setting->address }} </p>

                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-box">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="icon-text">
                            <p>
                                <a href="tel:+91 7478019619">{{ $setting->contact }}</a>
                            </p>

                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-box">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="icon-text">
                            <p>
                                <a href="mailto:info@bengaleducation.co.in">{{ $setting->email }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-12 footer-colmun">
                <div class="footer-clomun footer-gallery-widget">
                    <div class="sec-title-one pb-one">
                        <h6> About Us</h6>
                    </div>
                    <div class="innar-box">
                        {!! $setting->facebookpagefooter !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer_area_bottom">
    <div class="bucketbox">
        <div class="bucketrow">
            <div class="col-md-6 mx-auto">
                <div class="copyright-right text-center">
                    <p>COPYRIGHT © 2021, BENGAL EDUCATION. ALL RIGHT RESERVED.</p>
                </div>
            </div>
        </div>
    </div>
</div>
