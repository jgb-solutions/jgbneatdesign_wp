@extends('_layouts.master')

@section('main')

	@include('_partials.featured')

  	@include('_partials.header')

	@include('_partials.about-us')

	@include('_partials.services')

  	{{--@include('_partials.work')

   @include('_partials.clients')--}}

   @include('_partials.contact')

@endsection