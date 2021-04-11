<!DOCTYPE html>
<html>
<head>
  <title>@yield('title','Manufacturerssss Suppliers Exporters Importers from the world s largest online B2B marketplace Demobaba com')</title>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-size.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style >
    .dropdown:hover .dropdown-menu {
  display: block;
}


</style>
</head>
<body style="background-color: #dfdede !important">
<header style="background-color: #d2d2d2 !important">
  <nav class="navbar navbar-expand-md  ">
    <a class="navbar-brand mr-4" href="#">Jaikara</a>
    <ul class="nav navbar ml-auto">
      <li><a href="{{url('/')}}" class="text-dark">Go to Main Site</a></li>
      <li><a href="#" class="text-dark ml-3">This store has been open since {{date('D M d Y',strtotime(session('user.joining_date')))}}</a></li>
    </ul>
  </nav>
</header>
<div class="container-fluid border-down-container" id="header">
  <div class="row" style="background-color: #6422ff"> 
    <div class="col-md-2 p-3">
        <img src="{{session('site_logo') != '' ?  asset('storage/'.session('site_logo')) : asset('no-image.jpg') }}" width="100" height="100">
    </div>
    <div class="col-md-4 p-4">
       <h4 class="text-white">{{session('site_name')}}</h4>
       <h4 class="text-white">{{session('user.city.city_name')}}</h4>
    </div>
    <div class="col-md-6 p-4 text-center">
        <div class="pull-right ">
          <i class="fa fa-check-square-o text-success f-24" aria-hidden="true"></i>
          <p class="text-white f-24">Verified</p>
        </div>
    </div>
  </div>
</div>
<div class="container-fluid mb-4 bg-white">
  <div class="row">
    <div class="col-md-12 p-0">
        <nav class="navbar navbar-expand-lg navbar-light pl-2 p-0">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item p-2" style="border-right:1px solid #cfcfcf ">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item p-2" style="border-right:1px solid #cfcfcf ">
            <a class="nav-link" href="#">Company Profile</a>
          </li>
          <li class="nav-item p-2" style="border-right:1px solid #cfcfcf ">
            <a class="nav-link" href="#">Product List</a>
          </li> 
          <li class="nav-item p-2" style="border-right:1px solid #cfcfcf ">
            <a class="nav-link" href="#">Classified</a>
          </li> 
          <li class="nav-item p-2" style="border-right:1px solid #cfcfcf ">
            <a class="nav-link" href="#">Seller Feedback</a>
          </li> 
          <li class="nav-item p-2" style="border-right:1px solid #cfcfcf ">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
         <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
            <a class="nav-link" href="#"><i class="fa fa-mobile"></i> {{session('user.mobile')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-envelope"></i> {{session('user.email')}}</a>
          </li>
        </ul>
      </div>
  </nav>
    </div>
  </div>
</div>

