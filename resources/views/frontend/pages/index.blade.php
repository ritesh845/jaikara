@extends('frontend.layouts.main')
@section('content')
	@if(\View::exists('frontend.'.session('template_name').'.pages.'.$page_name))
		@include('frontend.'.session('template_name').'.pages.'.$page_name)
	@else
		@include('frontend.pages.not-found')
	@endif 


@endsection