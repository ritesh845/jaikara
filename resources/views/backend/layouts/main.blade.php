@include('backend.template.partials.header')
<div class="main">
  @yield('content')
</div>
<script src="{{asset('js/helper.js')}}"></script>
@include('backend.template.partials.footer')