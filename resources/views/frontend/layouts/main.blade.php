@include('frontend.'.session('template_name').'.partials.header')
<main id="main">
	@yield('content')
</main>
<script src="{{asset('js/helper.js')}}"></script>
@include('frontend.'.session('template_name').'.partials.footer')