@extends('layouts.app')

@section('content')
    
    @include('templates.header')
    @include('services.templates.header_page')
    @include('templates.services')
    @include('services.templates.features')
    @include('services.templates.service_card')
    @include('templates.newsletter')
    @include('templates.contact')
    @include('templates.footer')

@endsection