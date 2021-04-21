@include('backend.template.partials.header')
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<div class="main">
  @yield('content')
</div>
<script src="{{asset('js/helper.js')}}"></script>

@include('backend.template.partials.footer')