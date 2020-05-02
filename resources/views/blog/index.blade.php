@extends('layouts.app')

@section('content')
    
    @include('templates.header')
    @include('blog.templates.header_page')
    @include('blog.templates.page_blog')
    @include('templates.newsletter')
    @include('templates.footer')

@endsection