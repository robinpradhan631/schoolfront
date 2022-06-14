<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ route('admin')}}"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
                          <i class="far fa-clone"></i></i>Banner
                        </a>
                        <div id="submenu-1" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/carousel') }}"> Banners </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/carousel-add') }}"> Add Banner </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">
                            <i class="far fa-newspaper"></i>Courses
                        </a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/courses') }}"> Courses </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/courses-add') }}">Add Courses</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">
                            <i class="far fa-flag"></i>College
                        </a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/college') }}">  College </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/college-add') }}"> Add College</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
                            <i class="far fa-calendar-alt"></i>Gallery
                        </a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/gallery') }}"> All Gallery </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/gallery-add') }}"> Add Image </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9">
                            <i class="far fa-calendar-alt"></i>Video
                        </a>
                        <div id="submenu-9" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/video') }}"> All Video </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/video-add') }}"> Add Video </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5">
                            <i class="fas fa-users"></i>Social Links</a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/links') }}"> All Links </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/links-add') }}"> Add Links </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8">
                            <i class="far fa-newspaper"></i>Messages</a>
                        <div id="submenu-8" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/message') }}"> All Messages </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/message-add') }}"> Add Messages </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-20" aria-controls="submenu-20">
                            <i class="far fa-newspaper"></i>Feedbacks</a>
                        <div id="submenu-20" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/feedback') }}"> All feedbacks </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/feedback-add') }}"> Add feedbacks </a>
                                </li> --}}
                            </ul>
                        </div>
                    </li>
                    <li class="nav-divider">
                        Users
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7">
                            <i class="fas fa-user"></i> Manage Users </a>
                        <div id="submenu-7" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/users') }}"> Users </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">
                            <i class="fas fa-cogs"></i> Setting </a>
                        <div id="submenu-11" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/setting') }}"> Manage Site.all info. </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
