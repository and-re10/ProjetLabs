@extends('layouts.app')

@section('content')

    @include('templates.header')
    @include('contact.templates.header_page')
    @include('contact.templates.map')
    @include('templates.contact')
    @include('templates.footer')

    {{-- @section('js')
        <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo')}}"></script>
    @stop --}}
    
@endsection