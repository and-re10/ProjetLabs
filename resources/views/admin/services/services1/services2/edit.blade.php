@extends('adminlte::page')

@section('content')
    @section('css')
        <link rel="stylesheet" href="{{asset('/css/flaticon.css')}}">
    @stop
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Titre de Services</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('service2.update', $service2->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Titre</label>
                        <input type="text" class="form-control  @error('titre') is-invalid @enderror" name="titre" value="{{editError($service2->titre, "titre")}}" id="titre" placeholder="">
                        @error('titre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control  @error('description') is-invalid @enderror" name="description" value="{{editError($service2->description, "description")}}" id="description" placeholder="">
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <label for="exampleInputPassword1">Icon</label>
                        <input type="text" class="form-control  @error('icon') is-invalid @enderror" name="titre" value="{{editError($service2->icon, "icon")}}" id="icon" placeholder="">
                        @error('icon')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div> --}}

                     <div class="container">
                        <label for="">Icon du Service</label>
                        <!-- radio -->
                        <div class="form-group row">
                            <div class="custom-control custom-radio col-md-2 mb-2 text-center">
                                @if ($service2->icon === "flaticon-023-flask")
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="flaticon-023-flask" checked>
                                @else
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="flaticon-023-flask">
                                @endif
                                <label for="customRadio1" class="custom-control-label"><i class="flaticon-023-flask"></i></label>
                            </div>
            
                            <div class="custom-control custom-radio col-md-2 mb-2 text-center">
                                @if ($service2->icon === "flaticon-011-compass")
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="flaticon-011-compass" checked>
                                @else
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="flaticon-011-compass">
                                @endif
                                <label for="customRadio2" class="custom-control-label"><i class="flaticon-011-compass"></i></label>
                            </div>
            
                            <div class="custom-control custom-radio col-md-2 mb-2 text-center">
                                @if ($service2->icon === "flaticon-037-idea")
                                    <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="flaticon-037-idea" checked>
                                @else
                                    <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="flaticon-037-idea">
                                @endif
                                <label for="customRadio3" class="custom-control-label"><i class="flaticon-037-idea"></i></label>
                            </div>
            
                            <div class="custom-control custom-radio col-md-2 mb-2 text-center">
                                @if ($service2->icon === "flaticon-039-vector")
                                    <input class="custom-control-input" type="radio" id="customRadio4" name="icon" value="flaticon-039-vector" checked>
                                @else
                                    <input class="custom-control-input" type="radio" id="customRadio4" name="icon" value="flaticon-039-vector">
                                @endif
                                <label for="customRadio4" class="custom-control-label"><i class="flaticon-039-vector"></i></label>
                            </div>
            
                            <div class="custom-control custom-radio col-md-2 mb-2 text-center">
                                @if ($service2->service_icon === "flaticon-036-brainstorming")
                                    <input class="custom-control-input" type="radio" id="customRadio5" name="icon" value="flaticon-036-brainstorming" checked>
                                @else
                                    <input class="custom-control-input" type="radio" id="customRadio5" name="icon" value="flaticon-036-brainstorming">
                                @endif
                                <label for="customRadio5" class="custom-control-label"><i class="flaticon-036-brainstorming"></i></label>
                            </div>
            
                            <div class="custom-control custom-radio col-md-2 mb-2 text-center">
                                @if ($service2->icon === "flaticon-026-search")
                                    <input class="custom-control-input" type="radio" id="customRadio6" name="icon" value="flaticon-026-search" checked>
                                @else
                                    <input class="custom-control-input" type="radio" id="customRadio6" name="icon" value="flaticon-026-search">
                                @endif
                                <label for="customRadio6" class="custom-control-label"><i class="flaticon-026-search"></i></label>
                            </div>

                            <div class="custom-control custom-radio col-md-2 mb-2 text-center">
                                @if ($service2->icon === "flaticon-018-laptop-1")
                                    <input class="custom-control-input" type="radio" id="customRadio7" name="icon" value="flaticon-018-laptop-1" checked>
                                @else
                                    <input class="custom-control-input" type="radio" id="customRadio7" name="icon" value="flaticon-018-laptop-1">
                                @endif
                                <label for="customRadio7" class="custom-control-label"><i class="flaticon-018-laptop-1"></i></label>
                            </div>
            
                            <div class="custom-control custom-radio col-md-2 mb-2 text-center">
                                @if ($service2->service_icon === "flaticon-043-sketch")
                                    <input class="custom-control-input" type="radio" id="customRadio8" name="icon" value="flaticon-043-sketch" checked>
                                @else
                                    <input class="custom-control-input" type="radio" id="customRadio8" name="icon" value="flaticon-043-sketch">
                                @endif
                                <label for="customRadio8" class="custom-control-label"><i class="flaticon-043-sketch"></i></label>
                            </div>
            
                            <div class="custom-control custom-radio col-md-2 mb-2 text-center">
                                @if ($service2->icon === "flaticon-012-cube")
                                    <input class="custom-control-input" type="radio" id="customRadio9" name="icon" value="flaticon-012-cube" checked>
                                @else
                                    <input class="custom-control-input" type="radio" id="customRadio9" name="icon" value="flaticon-012-cube">
                                @endif
                                <label for="customRadio9" class="custom-control-label"><i class="flaticon-012-cube"></i></label>
                            </div>
                        </div>
                        @error('icon')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div> 
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection