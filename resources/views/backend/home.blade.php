{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}

 
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/azia/v1.0.0/template/dashboard-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 07:07:15 GMT -->
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="https://www.bootstrapdash.com/demo/azia/v1.0.0/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://www.bootstrapdash.com/demo/azia/v1.0.0/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="https://www.bootstrapdash.com/demo/azia/v1.0.0/lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="https://www.bootstrapdash.com/demo/azia/v1.0.0/lib/morris.js/morris.css" rel="stylesheet">
    <link href="https://www.bootstrapdash.com/demo/azia/v1.0.0/lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="https://www.bootstrapdash.com/demo/azia/v1.0.0/lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="https://www.bootstrapdash.com/demo/azia/v1.0.0/css/azia.css">

  </head>
  <body class="az-body az-body-sidebar">

    <div class="az-sidebar">
      <div class="az-sidebar-header">
        <a href="index.html" class="az-logo">az<span>i</span>a</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="https://www.bootstrapdash.com/demo/azia/v1.0.0/img/faces/face1.jpg" alt=""></div>
        <div class="media-body">
          <h6>Aziana Pechon</h6>
          <span>Premium Member</span>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          <li class="nav-item active show">
            <a href="index.html" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="dashboard-one.html" class="nav-sub-link">Web Analytics</a></li>
              <li class="nav-sub-item active"><a href="dashboard-two.html" class="nav-sub-link">Sales Monitoring</a></li>
              <li class="nav-sub-item"><a href="dashboard-three.html" class="nav-sub-link">Ad Campaign</a></li>
              <li class="nav-sub-item"><a href="dashboard-four.html" class="nav-sub-link">Event Management</a></li>
              <li class="nav-sub-item"><a href="dashboard-five.html" class="nav-sub-link">Helpdesk Management</a></li>
              <li class="nav-sub-item"><a href="dashboard-six.html" class="nav-sub-link">Finance Monitoring</a></li>
              <li class="nav-sub-item"><a href="dashboard-seven.html" class="nav-sub-link">Cryptocurrency</a></li>
              <li class="nav-sub-item"><a href="dashboard-eight.html" class="nav-sub-link">Executive / SaaS</a></li>
              <li class="nav-sub-item"><a href="dashboard-nine.html" class="nav-sub-link">Campaign Monitoring</a></li>
              <li class="nav-sub-item"><a href="dashboard-ten.html" class="nav-sub-link">Product Management</a></li>
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-document"></i>Apps &amp; Pages</a>
            <ul class="nav-sub">
              <li class="nav-sub-item">
                <a href="app-mail.html" class="nav-sub-link">Mailbox</a>
              </li>
              <li class="nav-sub-item">
                <a href="app-chat.html" class="nav-sub-link">Chat</a>
              </li>
              <li class="nav-sub-item">
                <a href="app-calendar.html" class="nav-sub-link">Calendar</a>
              </li>
              <li class="nav-sub-item">
                <a href="app-contacts.html" class="nav-sub-link">Contacts</a>
              </li>
              <li class="nav-sub-item"><a href="app-kanban.html" class="nav-sub-link">Kanban</a></li>
              <li class="nav-sub-item"><a href="app-tickets.html" class="nav-sub-link">Tickets</a></li>
              <li class="nav-sub-item"><a href="page-profile.html" class="nav-sub-link">Profile</a></li>
              <li class="nav-sub-item"><a href="page-invoice.html" class="nav-sub-link">Invoice</a></li>
              <li class="nav-sub-item"><a href="page-signin.html" class="nav-sub-link">Sign In</a></li>
              <li class="nav-sub-item"><a href="page-signup.html" class="nav-sub-link">Sign Up</a></li>
              <li class="nav-sub-item"><a href="page-404.html" class="nav-sub-link">Page 404</a></li>
              <li class="nav-sub-item"><a href="page-faq.html" class="nav-sub-link">Faq</a></li>
              <li class="nav-sub-item"><a href="page-news-grid.html" class="nav-sub-link">News Grid</a></li>
              <li class="nav-sub-item"><a href="page-product-catalogue.html" class="nav-sub-link">Product Catalogue</a></li>
              <li class="nav-sub-item"><a href="page-project-list.html" class="nav-sub-link">Project List</a></li>
              <li class="nav-sub-item"><a href="page-order.html" class="nav-sub-link">Orders</a></li>
              <li class="nav-sub-item"><a href="page-pricing.html" class="nav-sub-link">Pricing</a></li>
              <li class="nav-sub-item"><a href="landing-sass.html" class="nav-sub-link">Landing Page</a></li>
              
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-book"></i>UI Elements</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="elem-accordion.html" class="nav-sub-link">Accordion</a></li>
              <li class="nav-sub-item"><a href="elem-alerts.html" class="nav-sub-link">Alerts</a></li>
              <li class="nav-sub-item"><a href="elem-avatar.html" class="nav-sub-link">Avatar</a></li>
              <li class="nav-sub-item"><a href="elem-badge.html" class="nav-sub-link">Badge</a></li>
              <li class="nav-sub-item"><a href="elem-breadcrumbs.html" class="nav-sub-link">Breadcrumbs</a></li>
              <li class="nav-sub-item"><a href="elem-buttons.html" class="nav-sub-link">Buttons</a></li>
              <li class="nav-sub-item"><a href="elem-cards.html" class="nav-sub-link">Cards</a></li>
              <li class="nav-sub-item"><a href="elem-carousel.html" class="nav-sub-link">Carousel</a></li>
              <li class="nav-sub-item"><a href="elem-collapse.html" class="nav-sub-link">Collapse</a></li>
              <li class="nav-sub-item"><a href="elem-dropdown.html" class="nav-sub-link">Dropdown</a></li>
              <li class="nav-sub-item"><a href="elem-icons.html" class="nav-sub-link">Icons</a></li>
              <li class="nav-sub-item"><a href="elem-images.html" class="nav-sub-link">Images</a></li>
              <li class="nav-sub-item"><a href="elem-list-group.html" class="nav-sub-link">List Group</a></li>
              <li class="nav-sub-item"><a href="elem-media-object.html" class="nav-sub-link">Media Object</a></li>
              <li class="nav-sub-item"><a href="elem-modals.html" class="nav-sub-link">Modals</a></li>
              <li class="nav-sub-item"><a href="elem-navigation.html" class="nav-sub-link">Navigation</a></li>
              <li class="nav-sub-item"><a href="elem-pagination.html" class="nav-sub-link">Pagination</a></li>
              <li class="nav-sub-item"><a href="elem-popover.html" class="nav-sub-link">Popover</a></li>
              <li class="nav-sub-item"><a href="elem-progress.html" class="nav-sub-link">Progress</a></li>
              <li class="nav-sub-item"><a href="elem-spinners.html" class="nav-sub-link">Spinners</a></li>
              <li class="nav-sub-item"><a href="elem-toast.html" class="nav-sub-link">Toast</a></li>
              <li class="nav-sub-item"><a href="elem-tooltip.html" class="nav-sub-link">Tooltip</a></li>
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-edit"></i>Forms</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="form-elements.html" class="nav-sub-link">Form Elements</a></li>
              <li class="nav-sub-item"><a href="form-layouts.html" class="nav-sub-link">Form Layouts</a></li>
              <li class="nav-sub-item"><a href="form-validation.html" class="nav-sub-link">Form Validation</a></li>
              <li class="nav-sub-item"><a href="form-wizards.html" class="nav-sub-link">Form Wizards</a></li>
              <li class="nav-sub-item"><a href="form-editor.html" class="nav-sub-link">WYSIWYG Editor</a></li>
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-chart-bar-outline"></i>Charts</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="chart-morris.html" class="nav-sub-link">Morris Charts</a></li>
              <li class="nav-sub-item"><a href="chart-flot.html" class="nav-sub-link">Flot Charts</a></li>
              <li class="nav-sub-item"><a href="chart-chartjs.html" class="nav-sub-link">ChartJS</a></li>
              <li class="nav-sub-item"><a href="chart-sparkline.html" class="nav-sub-link">Sparkline</a></li>
              <li class="nav-sub-item"><a href="chart-peity.html" class="nav-sub-link">Peity</a></li>
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-map"></i>Maps</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="map-google.html" class="nav-sub-link">Google Maps</a></li>
              <li class="nav-sub-item"><a href="map-leaflet.html" class="nav-sub-link">Leaflet</a></li>
              <li class="nav-sub-item"><a href="map-vector.html" class="nav-sub-link">Vector Maps</a></li>
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-tabs-outline"></i>Tables</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="table-basic.html" class="nav-sub-link">Basic Tables</a></li>
              <li class="nav-sub-item"><a href="table-data.html" class="nav-sub-link">Data Tables</a></li>
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-archive"></i>Utilities</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="util-background.html" class="nav-sub-link">Background</a></li>
              <li class="nav-sub-item"><a href="util-border.html" class="nav-sub-link">Border</a></li>
              <li class="nav-sub-item"><a href="util-display.html" class="nav-sub-link">Display</a></li>
              <li class="nav-sub-item"><a href="util-flex.html" class="nav-sub-link">Flex</a></li>
              <li class="nav-sub-item"><a href="util-height.html" class="nav-sub-link">Height</a></li>
              <li class="nav-sub-item"><a href="util-margin.html" class="nav-sub-link">Margin</a></li>
              <li class="nav-sub-item"><a href="util-padding.html" class="nav-sub-link">Padding</a></li>
              <li class="nav-sub-item"><a href="util-position.html" class="nav-sub-link">Position</a></li>
              <li class="nav-sub-item"><a href="util-typography.html" class="nav-sub-link">Typography</a></li>
              <li class="nav-sub-item"><a href="util-width.html" class="nav-sub-link">Width</a></li>
              <li class="nav-sub-item"><a href="util-extras.html" class="nav-sub-link">Extras</a></li>
            </ul>
          </li><!-- nav-item -->
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
            <button class="btn"><i class="fas fa-search"></i></button>
          </div><!-- az-header-center -->
          <div class="az-header-right">
            <div class="az-header-message">
              <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
            </div><!-- az-header-message -->
            <div class="dropdown az-header-notification">
              <a href="#" class="new"><i class="typcn typcn-bell"></i></a>
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
               {{--  <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a> --}}
                 {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              {{-- </div> --}}
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->
      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
          <p class="mg-b-0">Your sales monitoring dashboard template.</p>
        </div>
        <div class="az-dashboard-header-right">
          <div>
            <label class="tx-13">Customer Ratings</label>
            <div class="az-star">
              <i class="typcn typcn-star active"></i>
              <i class="typcn typcn-star active"></i>
              <i class="typcn typcn-star active"></i>
              <i class="typcn typcn-star active"></i>
              <i class="typcn typcn-star"></i>
              <span>(12,775)</span>
            </div>
          </div>
          <div>
            <label class="tx-13">All Sales (Online)</label>
            <h5>431,007</h5>
          </div>
          <div>
            <label class="tx-13">All Sales (Offline)</label>
            <h5>932,210</h5>
          </div>
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
        <div class="card card-dashboard-seven">
          <div class="card-header">
            <div class="row row-sm">
              <div class="col-6 col-md-4 col-xl">
                <div class="media">
                  <div><i class="icon ion-ios-calendar"></i></div>
                  <div class="media-body">
                    <label>Start Date</label>
                    <div class="date">
                      <span>Sept 01, 2018</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
              <div class="col-6 col-md-4 col-xl">
                <div class="media">
                  <div><i class="icon ion-ios-calendar"></i></div>
                  <div class="media-body">
                    <label>End Date</label>
                    <div class="date">
                      <span>Sept 30, 2018</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
              <div class="col-6 col-md-4 col-xl mg-t-15 mg-md-t-0">
                <div class="media">
                  <div><i class="icon ion-logo-usd"></i></div>
                  <div class="media-body">
                    <label>Sales Measure</label>
                    <div class="date">
                      <span>Revenue</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
              <div class="col-6 col-md-4 col-xl mg-t-15 mg-xl-t-0">
                <div class="media">
                  <div><i class="icon ion-md-person"></i></div>
                  <div class="media-body">
                    <label>Customer Type</label>
                    <div class="date">
                      <span>All Customers</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
              <div class="col-md-4 col-xl mg-t-15 mg-xl-t-0">
                <div class="media">
                  <div><i class="icon ion-md-stats"></i></div>
                  <div class="media-body">
                    <label>Transaction Type</label>
                    <div class="date">
                      <span>All Transactions</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
            </div><!-- row -->
          </div><!-- card-header -->
          <div class="card-body">
            <div class="row row-sm">
              <div class="col-6 col-lg-3">
                <label class="az-content-label">Total Quantity</label>
                <h2>110,000</h2>
                <div class="desc up">
                  <i class="icon ion-md-stats"></i>
                  <span><strong>2.00%</strong> (30 days)</span>
                </div>
                <span id="compositeline2">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
              </div><!-- col -->
              <div class="col-6 col-lg-3">
                <label class="az-content-label">Total Cost</label>
                <h2><span>$</span>523,200</h2>
                <div class="desc up">
                  <i class="icon ion-md-stats"></i>
                  <span><strong>12.09%</strong> (30 days)</span>
                </div>
                <span id="compositeline">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
              </div><!-- col -->
              <div class="col-6 col-lg-3 mg-t-20 mg-lg-t-0">
                <label class="az-content-label">Total Revenue</label>
                <h2><span>$</span>753,098</h2>
                <div class="desc down">
                  <i class="icon ion-md-stats"></i>
                  <span><strong>0.51%</strong> (30 days)</span>
                </div>
                <span id="compositeline4">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
              </div><!-- col -->
              <div class="col-6 col-lg-3 mg-t-20 mg-lg-t-0">
                <label class="az-content-label">Total Profit</label>
                <h2><span>$</span>331,886</h2>
                <div class="desc up">
                  <i class="icon ion-md-stats"></i>
                  <span><strong>5.32%</strong> (30 days)</span>
                </div>
                <span id="compositeline3">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->

        <div class="row row-sm mg-b-15 mg-sm-b-20">
          <div class="col-lg-6 col-xl-7">
            <div class="card card-dashboard-six">
              <div class="card-header">
                <div>
                  <label class="az-content-label">This Year's Total Revenue</label>
                  <span class="d-block">Sales Performance for Online and Offline Revenue</span>
                </div>
                <div class="chart-legend">
                  <div><span>Online Revenue</span> <span class="bg-indigo"></span></div>
                  <div><span>Offline Revenue</span> <span class="bg-teal"></span></div>
                </div>
              </div><!-- card-header -->
              <div id="morrisBar1" class="ht-200 ht-lg-250 wd-100p"></div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-lg-6 col-xl-5 mg-t-20 mg-lg-t-0">
            <div class="card card-dashboard-map-one">
              <label class="az-content-label">Sales Revenue by Customers in USA</label>
              <span class="d-block mg-b-20">Sales Performance of all states in the United States</span>
              <div id="vmap2" class="vmap-wrapper"></div>
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->

        <div class="row row-sm mg-b-20 mg-lg-b-0">
          <div class="col-md-6 col-xl-7">
            <div class="card card-table-two">
              <h6 class="card-title">Your Most Recent Earnings</h6>
              <span class="d-block mg-b-20">This is your most recent earnings for today's date.</span>
              <div class="table-responsive">
                <table class="table table-striped table-dashboard-two">
                  <thead>
                    <tr>
                      <th class="wd-lg-25p">Date</th>
                      <th class="wd-lg-25p tx-right">Sales Count</th>
                      <th class="wd-lg-25p tx-right">Earnings</th>
                      <th class="wd-lg-25p tx-right">Tax Witheld</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>05 Oct 2018</td>
                      <td class="tx-right tx-medium tx-inverse">25</td>
                      <td class="tx-right tx-medium tx-inverse">$380.50</td>
                      <td class="tx-right tx-medium tx-danger">-$23.50</td>
                    </tr>
                    <tr>
                      <td>04 Oct 2018</td>
                      <td class="tx-right tx-medium tx-inverse">34</td>
                      <td class="tx-right tx-medium tx-inverse">$503.20</td>
                      <td class="tx-right tx-medium tx-danger">-$13.45</td>
                    </tr>
                    <tr>
                      <td>03 Oct 2018</td>
                      <td class="tx-right tx-medium tx-inverse">30</td>
                      <td class="tx-right tx-medium tx-inverse">$489.65</td>
                      <td class="tx-right tx-medium tx-danger">-$20.98</td>
                    </tr>
                    <tr>
                      <td>02 Oct 2018</td>
                      <td class="tx-right tx-medium tx-inverse">27</td>
                      <td class="tx-right tx-medium tx-inverse">$421.80</td>
                      <td class="tx-right tx-medium tx-danger">-$22.22</td>
                    </tr>
                    <tr>
                      <td>01 Oct 2018</td>
                      <td class="tx-right tx-medium tx-inverse">31</td>
                      <td class="tx-right tx-medium tx-inverse">$518.60</td>
                      <td class="tx-right tx-medium tx-danger">-$23.01</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
            </div><!-- card-dashboard-five -->
          </div>
          <div class="col-md-6 col-xl-5 mg-t-20 mg-md-t-0">
            <div class="card card-dashboard-eight">
              <h6 class="card-title">Your Top Countries</h6>
              <span class="d-block mg-b-20">Sales performance revenue based by country</span>

              <div class="list-group">
                <div class="list-group-item">
                  <i class="flag-icon flag-icon-us flag-icon-squared"></i>
                  <p>United States</p>
                  <span>$1,671.10</span>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <i class="flag-icon flag-icon-nl flag-icon-squared"></i>
                  <p>Netherlands</p>
                  <span>$1,064.75</span>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <i class="flag-icon flag-icon-gb flag-icon-squared"></i>
                  <p>United Kingdom</p>
                  <span>$1,055.98</span>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <i class="flag-icon flag-icon-ca flag-icon-squared"></i>
                  <p>Canada</p>
                  <span>$1,045.49</span>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <i class="flag-icon flag-icon-au flag-icon-squared"></i>
                  <p>Australia</p>
                  <span>$1,042.00</span>
                </div><!-- list-group-item -->
              </div><!-- list-group -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- az-content-body -->
      <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->

@include('backend.layouts.partials.footer')