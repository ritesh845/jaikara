@include('frontend.'.session('template_name').'.partials.header')
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
<main id="main">
	@yield('content')
</main>
<script src="{{asset('js/helper.js')}}"></script>
<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
@include('frontend.'.session('template_name').'.partials.footer')