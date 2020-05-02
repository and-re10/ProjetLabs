@extends('layouts.app')

@section('content')
    
    @include('templates.header')
    @include('home.templates.intro')
    @include('home.templates.about')
    @include('home.templates.testimonials')
    @include('templates.services')
    @include('home.templates.team')
    @include('home.templates.promotion')
    @include('templates.contact')
    @include('templates.footer')

@endsection