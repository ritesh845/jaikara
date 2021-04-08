<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>@yield('title','Jaikara')</title>
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>

    <!-- vendor css -->
    <link href="{{asset('backend/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/typicons.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('backend/css/morris.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('backend/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/jqvmap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/azia.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-size.css')}}">

</head>
<body class="az-body az-body-sidebar">
<div class="az-sidebar">
    <div class="az-sidebar-header">
        <a href="{{url('/')}}" class="az-logo">jaikara</a>
    </div><!-- az-sidebar-header -->
    <div class="az-sidebar-loggedin">
        <div class="az-img-user online">
            <img src="https://www.bootstrapdash.com/demo/azia/v1.0.0/img/faces/face1.jpg" alt="">
        </div>
        <div class="media-body">
            <h6>{{Auth::user()->name}}</h6>
            <span>Premium Member</span>
        </div><!-- media-body -->
    </div><!-- az-sidebar-loggedin -->
    <div class="az-sidebar-body">
        <ul class="nav">
            <li class="nav-label">Main Menu</li>
            <li class="nav-item active show">
                <a href="{{route('home')}}" class="nav-link"><i class="fa fa-clipboard fa f-14"></i>Dashboard</a>
            </li><!-- nav-item -->
            @role('super_admin')
                <li class="nav-item">
                    <a href="#" class="nav-link with-sub"><i class="fa fa-file-o fa f-14"></i>General Setting</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a href="app-mail.html" class="nav-sub-link">General Setting</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-chat.html" class="nav-sub-link">Member Package</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-calendar.html" class="nav-sub-link">Change Password</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-calendar.html" class="nav-sub-link">Permission Setting</a>
                        </li>
                        
                    </ul>
                </li><!-- nav-item -->
                
                 <li class="nav-item">
                    <a href="#" class="nav-link with-sub"><i class="fa fa-file-o fa f-14"></i>Users And Customers</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a href="{{route('userShow')}}" class="nav-sub-link">Show User</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-chat.html" class="nav-sub-link">Show Customer</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-calendar.html" class="nav-sub-link">Per Day User</a>
                        </li> 
                        <li class="nav-sub-item">
                            <a href="app-calendar.html" class="nav-sub-link">Add Staff User</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-calendar.html" class="nav-sub-link">Show Staff User</a>
                        </li>
                        
                    </ul>
                </li><!-- nav-item -->
            @endrole
            @role('seller')
                 <li class="nav-item">
                    <a href="#" class="nav-link with-sub"><i class="fa fa-building-o fa f-14"></i>Company Profile </a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a href="{{route('company_profile')}}" class="nav-sub-link"><i class="fa fa-building-o fa f-14"></i> Company Profile </a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="{{route('trade_production_view')}}" class="nav-sub-link"><i class="fa fa-info-circle fa f-14"></i> Trade & Production </a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-calendar.html" class="nav-sub-link"><i class="fa fa-info-circle fa f-14"></i> Information & Policies</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-calendar.html" class="nav-sub-link"><i class="fa fa-file-image-o" aria-hidden="true"></i> IMAGE GALLERY</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-calendar.html" class="nav-sub-link"><i class="fa fa-file-image-o" aria-hidden="true"></i>  CERTIFICATION ACHIEVED</a>
                        </li>
                        
                    </ul>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="#" class="nav-link with-sub"><i class="fa fa-pie-chart  fa f-14"></i>Trade Leads</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a href="{{ route('sell_trade') }}" class="nav-sub-link"> <i class="fa fa-tasks" aria-hidden="true"></i>Sell trade leads</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-chat.html" class="nav-sub-link"> <i class="fa fa-tasks" aria-hidden="true"></i>Buy trade leads</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-calendar.html" class="nav-sub-link"> <i class="fa fa-plus"></i>Add Trade Lead</a>
                        </li>
                        
                        
                    </ul>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="#" class="nav-link with-sub"><i class="fa fa-quote-right  fa f-14"></i>Quotation</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a href="app-mail.html" class="nav-sub-link"><i class="fa fa-file-text"></i>My Posted RFQ</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-chat.html" class="nav-sub-link"><i class="fa fa-file-text">
                            </i>My Submited Quotes</a>
                        </li>
                       
                        
                    </ul>
                </li><!-- nav-item --> 
                <li class="nav-item">
                    <a href="#" class="nav-link with-sub"><i class="fa fa-tasks fa f-14"></i>Product Management</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a href="app-mail.html" class="nav-sub-link"><i class="fa fa-gift"></i> Product List</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-chat.html" class="nav-sub-link"> <i class="fa fa-gift"></i>Add Product</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-calendar.html" class="nav-sub-link"><i class="fa fa-user"></i> Product Group Management</a>
                        </li>
                       
                        
                    </ul>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="#" class="nav-link with-sub"><i class="fa fa-bullhorn fa f-14"></i>My Classifieds</a>
                   
                </li><!-- nav-item -->
            @endrole
     
        </ul><!-- nav -->
    </div><!-- az-sidebar-body -->
    </div><!-- az-sidebar -->

 <div class="az-content az-content-dashboard-two">
    <div class="az-header">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="#" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-center">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fa fa-search"></i></button>
          </div><!-- az-header-center -->
          <div class="az-header-right">
            <div class="az-header-message">
              <a href="app-chat.html"><i class="fa fa-envelope f-15"></i></a>
            </div><!-- az-header-message -->
            <div class="dropdown az-header-notification">
              <a href="#" class="new"><i class="fa fa-bell-o f-15"></i></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header mg-b-20 d-sm-none">
                  <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <h6 class="az-notification-title">Notifications</h6>
                <p class="az-notification-text">You have 2 unread notification</p>
                <div class="az-notification-list">
                  <div class="media new">
                    <div class="az-img-user"><img src="https://www.bootstrapdash.com/demo/azia/v1.0.0/img/faces/face2.jpg" alt=""></div>
                    <div class="media-body">
                      <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                      <span>Mar 15 12:32pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media new">
                    <div class="az-img-user online"><img src="https://www.bootstrapdash.com/demo/azia/v1.0.0/img/faces/face3.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Joyce Chua</strong> just created a new blog post</p>
                      <span>Mar 13 04:16am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="https://www.bootstrapdash.com/demo/azia/v1.0.0/img/faces/face4.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                      <span>Mar 13 02:56am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="https://www.bootstrapdash.com/demo/azia/v1.0.0/img/faces/face5.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                      <span>Mar 12 10:40pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- az-notification-list -->
                <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
              </div><!-- dropdown-menu -->
            </div><!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
              <a href="#" class="az-img-user"><img src="https://www.bootstrapdash.com/demo/azia/v1.0.0/img/faces/face1.jpg" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="https://www.bootstrapdash.com/demo/azia/v1.0.0/img/faces/face1.jpg" alt="">
                  </div><!-- az-img-user -->
                  <h6>Aziana Pechon</h6>
                  <span>Premium Member</span>
                </div><!-- az-header-profile -->

                <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                <a href="#" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                <a href="#" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>

                <a href="page-signin.html" class="dropdown-item"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="typcn typcn-power-outline"></i> Sign Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                    </form>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->
      <div class="az-content-body mt-4">
