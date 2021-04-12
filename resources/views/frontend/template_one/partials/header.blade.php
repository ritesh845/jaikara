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
<body>
<header>
	<nav class="navbar navbar-expand-md  ">
	  <a class="navbar-brand mr-4" href="#">Jaikara</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
	     <span class="fa fa-bars"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarsExample04">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item dropdown">
	            <a class="nav-link text-dark f-15 dropdown-toggle" href="#">For Buyers</a>
	            <div class="dropdown-menu row dropdown-width" aria-labelledby="dropdown03" style="width: 32rem">
	             	<div class="col-md-6" style="float: left"> 
	             		<h6 class="font-weight-bold">Source Products</h6>
						<a class="dropdown-item f-14 p-1" href="#">Get Quotations Now</a>
						<a class="dropdown-item f-14 p-1" href="#">By Product List</a>
						<a class="dropdown-item f-14 p-1" href="#">By Supplier</a>
						<a class="dropdown-item f-14 p-1" href="#">Sell Leads</a>
					</div>
	             	<div class="col-md-6" style="float: right">
	             		<h6 class="font-weight-bold">Trade Service</h6>
						<a class="dropdown-item f-14 p-1" href="#">Business Identity</a>
						<a class="dropdown-item f-14 p-1" href="#">Secure Payment</a>
						<a class="dropdown-item f-14 p-1" href="#">e-Credit Line</a>
						<a class="dropdown-item f-14 p-1" href="#">Inspection Services</a>
	             	</div>
	            </div>

	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link text-dark f-15 dropdown-toggle" href="#">For Suppliers</a>
	            <div class="dropdown-menu row dropdown-width" aria-labelledby="dropdown03" style="width: 32rem">
		            <div class="col-md-6" style="float: left"> 
						<a class="dropdown-item f-14 p-1" href="#">SourcePRO</a>
						<a class="dropdown-item f-14 p-1" href="#">Supplier Memberships</a>
						<a class="dropdown-item f-14 p-1" href="#">Learning Center</a>
						<a class="dropdown-item f-14 p-1" href="#">By Classified</a>
					</div>
		         	<div class="col-md-6" style="float: right">
						<a class="dropdown-item f-14 p-1" href="#">Gold suppliers</a>
						<a class="dropdown-item f-14 p-1" href="#">Silversuppliers</a>
						<a class="dropdown-item f-14 p-1" href="#">Platinum suppliers</a>
		         	</div>
		         </div>
	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link text-dark f-15 dropdown-toggle" href="#">Help & Community</a>
	             <div class="dropdown-menu row dropdown-width" aria-labelledby="dropdown03" style="width: 32rem">
		            <div class="col-md-6" style="float: left"> 
						<a class="dropdown-item f-14 p-1" href="#">I Am a Supplier</a>
						<a class="dropdown-item f-14 p-1" href="#">I Am a New User</a>
					</div>
		         	<div class="col-md-6" style="float: right">
						<a class="dropdown-item f-14 p-1" href="#">How to Sell</a>
						<a class="dropdown-item f-14 p-1" href="#">How to Buy</a>
		         	</div>
		         </div>
	          </li>   
		    </ul>
		    <ul class="ml-auto navbar-nav">
		    	<li class="nav-item">
		    		<a href="" class="nav-link text-muted f-14" >Member Package</a>
		    	</li>
		    	<li class="nav-item">
		    		<a href="" class="nav-link text-muted f-14" >All Categories</a>
		    	</li>
		    	<li class="nav-item">
		    		<a href="" class="nav-link text-muted f-14" >Suppliers</a>
		    	</li>
		    	<li class="nav-item">
		    		<a href="" class="nav-link text-muted f-14" >Products</a>
		    	</li>
		    	<li class="nav-item">
		    		<a href="" class="nav-link text-muted f-14" >Classified</a>
		    	</li>
		    </ul>	    
	  </div>
	</nav>
</header>
<div class="container-fluid mt-2 border-down-container">
	<div class="row">
		<div class="col-md-2 mb-2">
			 <div class="dropdown">
			  <a type="button" class=" dropdown-toggle" data-toggle="dropdown">
			    <i class="fa fa-bars"></i> Dropdown button
			  </a>
			  <div class="dropdown-menu">
			    <a class="dropdown-item" href="#">Link 1</a>
			    <a class="dropdown-item" href="#">Link 2</a>
			    <a class="dropdown-item" href="#">Link 3</a>
			  </div>
			</div> 						
		</div>
		<div class="col-md-6">
			<div class="input-group mb-3 search-theme">
			  <div class="input-group-prepend">
			   		<select class="" name="">
			   			<option value="P">Product</option>
			   			<option value="S">Seller</option>
			   			<option value="C">Classified</option>
			   		</select>
			  </div>
			  <input type="text" class="form-control" placeholder="What are you looking for..." aria-label="" aria-describedby="basic-addon1">
			  <div class="input-group-append">
			   		<button class="btn btn-sm btn-theme"><i class="fa fa-search"></i> Search</button>
			  </div>
			</div>
		</div>
		<div class="col-md-4 mb-2">
				<i class="fa fa-user-o f-28 "></i>
				@guest
					<a href="{{route('login')}}" class="text-muted f-13 ">Sign In |</a>
					<a href="{{route('register')}}" class="text-muted f-13 ">Join Free</a>
				@else
					<a href="{{route('home')}}" class="text-muted f-12 ">My Account |</a>
					<a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="text-muted f-12 ">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
				@endguest

			<button class="btn btn-success btn-sm ml-5">Get Quote</button>
			<button class="btn btn-theme btn-sm ml-3">SourcePRO</button>


		</div>
	</div>
</div>

