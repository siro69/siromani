<header class="main-navbar">
    <nav class="navbar navbar-expand-md">
        <div class="kumari-logo">
            <a href="https://www.kumarijob.com/">
                <img src="{{ asset('assets/images/frontend/layout/kumarilogo.png') }}" class="responsive">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse text-left" id="navbarContent">
            <ul class="navbar-nav ml-auto mr-auto" onclick="myFunction('event')">
                <li class="nav-item home active">
                    <a class="nav-link" href="{{ route('frontend.home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item postajob">
                    <a class="nav-link" href="{{ route('frontend.postjob') }}">
                        Post A Job
                    </a>
                </li>
                <li class="nav-item contact">
                    <a class="nav-link" href="{{ route('frontend.contactus') }}">
                        Contact Us
                    </a>
                </li>
                <li class="nav-item blog">
                    <a class="nav-link" href="{{ route('frontend.blog') }}">
                        Blog
                    </a>
                </li>
                <li class="nav-item training">
                    <a class="nav-link" href="{{ route('frontend.training') }}">
                        Training
                    </a>
                </li>
                @auth
                    <li class="nav-item training">
                        <a class="nav-link" href="{{  route('employer.dashboard') }} ">
                            Employer dashboard
                        </a>
                    </li>
                @else
                    <li class="nav-item training">
                        <a class="nav-link" href="{{ route('frontend.employer') }}">
                            Employer
                        </a>
                    </li>
                @endauth
                @auth
                    <li class="nav-item training">
                        <a class="nav-link" href="{{  route('jobseeker.dashboard') }} ">
                            Jobseeker dashboard
                        </a>
                    </li>
                @else
                    <li class="nav-item training">
                        <a class="nav-link" href="{{  route('frontend.jobseeker') }} ">
                            Jobseeker
                        </a>
                    </li>
                @endauth
                @auth
                    <li class="nav-item training">
                        <a class="nav-link" href="{{  route('dashboard.index') }} ">
                            Admin Dashboard
                        </a>
                    </li>
                @endauth


            </ul>

            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" id="drop-link" href="#">
                            <i class="far fa-user"></i> Register
                        </a>
                        <div class="dropdown-content">
                            <div class="dropdown-first">
                                <ul class="mb-2 pt-2">
                                    <li id="seeker">Jobseeker</li>
                                    <li id="employer">Employer</li>
                                </ul>
                            </div>
                            <div class="jobseeker-register mt-3">
                                <i class="fas fa-user-tie fa-3x"></i>
                                <a class="register-btn mt-3"
                                   href="{{ route('frontend.jobseekerregister') }}">Register</a>
                                <div class="dropdown-footer mt-2 py-2">Create a free account to apply for jobs</div>
                            </div>
                            <div class="employer-register mt-3">
                                <i class="fas fa-building fa-3x"></i>
                                <a class="register-btn mt-3"
                                   href="{{ route('frontend.employerregister') }}">Register</a>
                                <div class="dropdown-footer mt-2 py-2">Create free account to post vacancy</div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="drop-link2" href="#">
                            <i class="fas fa-unlock"></i> Login
                        </a>
                        <div class="dropdown-content2">
                            <div class="dropdown-first">
                                <ul class="mb-2 pt-2">
                                    <li id="seeker2">Jobseeker</li>
                                    <li id="employer2">Employer</li>
                                </ul>
                            </div>
                            <div class="jobseeker-login mt-3">
                                <form class="card auth_form" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="login-title pb-2">Login with your registered Email & Password.</div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <input class="log-input" type="text" name="email" value="{{ old('email') }}"
                                           placeholder="E-mail address"><br>
                                    <input class="log-input mt-3" type="password" name="password"
                                           value="{{ old('password') }}" placeholder="Password"
                                           autocomplete="new-password">

                                    <div class="row remember mt-3">
                                        <div class="col-md-6">
                                            <input type="checkbox">
                                            <span>Remember Me</span>
                                        </div>
                                        <div class="col-md-6 rem-content">
                                            <a href="">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="login-btn mt-3">
                                        <button type="submit" class="register-btn">Log in</button>
                                    </div>

                                    <div class="remember log-footer mt-3">
                                        <div>
                                            Don't have an account?
                                        </div>
                                        <div class="ml-1">
                                            <a class="register-now" href=""> Register Now</a>
                                        </div>
                                    </div>
                                    <div class="login-btn mt-2">
                                        <span>Or</span>
                                    </div>
                                    <div class="login-btn mt-2 mb-3">
                                <span>Log in with:
                                    <a href=""><i class="fab fa-facebook-square mx-2 text-primary"></i></a>
                                    <a href=""><i class="fab fa-google-plus-square text-danger"></i></a>
                                </span>
                                    </div>
                                </form>
                            </div>
                            <div class="employer-login mt-3">
                                <form class="card auth_form" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="login-title pb-2">Login with your registered Email & Password.</div>
                                    <input class="log-input" type="text" name="email" value="{{ old('email') }}"
                                           placeholder="E-mail address"><br>
                                    <input class="log-input mt-3" type="password" name="password"
                                           value="{{ old('password') }}" autocomplete="new-password"
                                           placeholder="Password">

                                    <div class="row remember mt-3">
                                        <div class="col-md-6">
                                            <input type="checkbox">
                                            <span>Remember Me</span>
                                        </div>
                                        <div class="col-md-6 rem-content">
                                            <a href="">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="login-btn mt-3">
                                        <button type="submit" class="register-btn">Log in</button>
                                    </div>

                                    <div class="remember log-footer footer-border mt-3 mb-2">
                                        <div>
                                            Don't have an account?
                                        </div>
                                        <div class="ml-1">
                                            <a class="register-now" href=""> Register Now</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name   }} {{ Auth::user()->last_name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>


        </div>
    </nav>
    <nav class="sidenav">
    </nav>
</header>
<div id="jobs-navbar">
    <div class="container scrollmenu-group">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs scrollmenu pb-2 pb-md-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#menu6"><i
                                class="far fa-clipboard"></i><span>All Jobs</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu"><i class="fas fa-users"></i><span>Fresher World</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1"><i class="fas fa-university"></i><span>Goverment Jobs</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2"><i
                                class="fas fa-chalkboard-teacher"></i><span>Bank Jobs</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu3"><i class="fas fa-running"></i><span>Walkin Jobs</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu4"><span><i class="fas fa-utensils"></i>Hospitality Jobs</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu5"><i class="fas fa-calculator"></i><span>Account Jobs</span></a>
                    </li>
                    <li class="nav-item last-child">
                        <a class="nav-link" data-toggle="tab" href="#menu7"><i class="far fa-newspaper"></i><span>Newspaper jobs</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
