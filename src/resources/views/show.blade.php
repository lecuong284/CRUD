@extends('lecuong::layout')

@section('content-header')
	<section class="content-header">
	  <h1>
	    {{ trans('lecuong::crud.preview') }} <span>{{ $crud->entity_name }}</span>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ url(config('lecuong.base.route_prefix'), 'dashboard') }}">{{ trans('lecuong::crud.admin') }}</a></li>
	    <li><a href="{{ url($crud->route) }}" class="text-capitalize">{{ $crud->entity_name_plural }}</a></li>
	    <li class="active">{{ trans('lecuong::crud.preview') }}</li>
	  </ol>
	</section>
@endsection

@section('content')
	@if ($crud->hasAccess('list'))
		<a href="{{ url($crud->route) }}"><i class="fa fa-angle-double-left"></i> {{ trans('lecuong::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a><br><br>
	@endif

	<!-- Default box -->
	  <div class="box">
	    <div class="box-header with-border">
	      <h3 class="box-title">
            {{ trans('lecuong::crud.preview') }}
            <span>{{ $crud->entity_name }}</span>
          </h3>
	    </div>
	    <div class="box-body">
	      {{ dump($entry) }}
	    </div><!-- /.box-body -->
	  </div><!-- /.box -->

@endsection


@section('after_styles')
	<link rel="stylesheet" href="{{ asset('vendor/lecuong/crud/css/crud.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/lecuong/crud/css/show.css') }}">
@endsection

@section('after_scripts')
	<script src="{{ asset('vendor/lecuong/crud/js/crud.js') }}"></script>
	<script src="{{ asset('vendor/lecuong/crud/js/show.js') }}"></script>
@endsection