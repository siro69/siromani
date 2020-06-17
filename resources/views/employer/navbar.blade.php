<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Employer Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('css/employer') }}vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,700|Prata" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href=" {{ asset('css/employer/dashboard.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/basic.css">
    <link href="{{ asset('css/employer/postajob.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
    <!-- Custom link for table -->
    <link href="{{ asset('css/employer/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/employer/') }}css/magic-check.css" rel="stylesheet">--}}
    <style>
        .navbar-nav li a {
            display: flex;
            align-items: center;
            font-size: 15px;
            padding: 5px 15px;
        }

        .nav-item {
            padding: 2px;
        }

        .navbar-nav .item {
            padding-left: 3px;
        }

        .dropdown {
            margin-right: 30px;
        }

        .small {
            font-size: 15px;
            padding-right: 5px;
            opacity: 0.9;
        }

        .dropdown-toggle {
            padding: 0 5px !important;
        }

        .img-profile:hover {
            box-shadow: 0px 3px 5px -1px;
        }

        .small:hover {
            opacity: 2;
        }

        @media only screen and (max-width: 1024px) {
            .navbar-brand .navbarlogoimg {
                height: 50px !important;
            }

            .navbar-nav li a {
                font-size: 10px !important;
            }

            .navbar {
                padding: 5px 10px;
            }
        }

        @media (max-width: 768px) {
            .hide-list {
                display: none !important;
            }

            .navbar-nav li a {
                font-size: 11px !important;
            }
        }

        @media (max-width: 425px) {
            .hide-list {
                display: block !important;
            }
        }

    </style>
</head>
<body id="page-top">
<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <nav class="navbar navbar-expand-md navbar-light bg-white static-top shadow">

            <a href="#" class="navbar-brand mx-md-3">
                <img src="https://www.kumarijob.com/assets/frontend/images/1.png" class="img-fluid navbar-logoimg"
                     style="height:60px;">
            </a>
            <!-- navbar Toggle (Topbar) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#emp-nav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Navbar -->
            <div class="collapse navbar-collapse dash-nav justify-content-between" id="emp-nav">
                <ul class="navbar-nav" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href=" {{ route('employer.dashboard') }}"><i class="fas fa-home"></i><span
                                class="item">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hide-list hide-list" href="{{ route('employer.PostAJob') }}"><i
                                class="fas fa-plus-circle"></i><span class="item">Post New Job</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hide-list" href="{{ route('employer.resumeSearch') }}"><i
                                class="fas fa-shopping-basket"></i><span class="item">Resume Basket</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('employer.myPostedJob') }}"><i
                                class="fas fa-clipboard-check"></i><span class="item">My Posted Job</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('employer.liveJob') }}"><i class="fab fa-medapps"></i><span
                                class="item">Live Jobs</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('employer.resumeSearch') }}"><i class="far fa-clipboard"></i><span
                                class="item">Resume Search</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('employer.offers') }}"><i class="fas fa-gift"></i><span
                                class="item">Offers</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('employer.package') }}"><i class="fas fa-box-open"></i><span
                                class="item">Packages</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('employer.subscription') }}"><i class="fas fa-bell"></i><span
                                class="item">Subscription</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.home') }}"><i class="fas fa-bell"></i><span
                                class="item">Leave dashboard</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-lg-inline text-gray-600 small">Kumari Job</span>
                            <img class="img-profile rounded-circle img-fluid"
                                 src="https://www.kumarijob.com/assets/frontend/images/1.png"
                                 style="height: 40px;
                  border:1px solid rgba(0,0,0,0.2);
                  padding-top:3px;">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="employerviewprofile.php">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="profilesetting.php">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="activitylog.php">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none search">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light small" placeholder="Search for..."
                                           aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>

     
