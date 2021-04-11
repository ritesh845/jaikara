@extends('frontend.layouts.main')
@section('content')
@if(\View::exists('frontend.'.session('template_name').'.pages.'.$page_name))
	@include('frontend.'.session('template_name').'.pages.'.$page_name)
@else
 @php 
 abort(404); 
 @endphp
@endif 


@endsection