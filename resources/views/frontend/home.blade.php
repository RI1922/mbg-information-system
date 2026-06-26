@extends('frontend.layouts.app')

@section('title','MBG Information System')

@section('content')

@include('frontend.partials.hero')



@include('frontend.partials.program')

@include('frontend.partials.statistics')

@include('frontend.partials.monitoring')

@include('frontend.partials.news')

@include('frontend.partials.gallery')

@include('frontend.partials.contact')

@endsection