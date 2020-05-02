@extends('layouts.app')

@section('content')

    @include('templates.header')
    @include('blog-post.templates.header_page')
    @include('blog-post.templates.page_post')
    @include('templates.newsletter')
    @include('templates.footer')

@endsection