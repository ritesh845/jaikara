@include('backend.template.partials.header')
<link rel="stylesheet" href="{{asset('css/jquery.validate.css')}}">
<div class="main">
  @yield('content')
</div>
<script src="{{asset('js/helper.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
@include('backend.template.partials.footer')