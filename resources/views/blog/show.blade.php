@extends('layouts.app')

@section('content')
    
    @include('templates.header')
    @include('blog.templates.header_page')
    @include('blog.templates.show_posts')
    @include('templates.newsletter')
    @include('templates.footer')

@endsection