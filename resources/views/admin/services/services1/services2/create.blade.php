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
            <form role="form" action="{{route('service2.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Titre</label>
                        <input type="text" class="form-control  @error('titre') is-invalid @enderror" name="titre" value="{{old('titre')}}" id="titre" placeholder="">
                        @error('titre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control  @error('description') is-invalid @enderror" name="description" value="{{old('description')}}" id="description" placeholder="">
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <label for="exampleInputPassword1">Icon</label>
                        <input type="text" class="form-control  @error('titre') is-invalid @enderror" name="titre" value="{{old('titre')}}" id="titre" placeholder="">
                        @error('titre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div> --}}

                    <div class="container">
                        <label for="">Icon du Service</label>
                        <!-- radio -->
                        <div class="form-group row">
                            <div class="custom-control custom-radio col-md-2 mb-2 text-center">
                                <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="flaticon-023-flask">
                                <label for="customRadio1" class="custom-control-label"><i class="flaticon-023-flask"></i></label>
                            </div>
        
                            <div class="custom-control custom-radio col-md-2 text-center">
                                <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="flaticon-011-compass">
                                <label for="customRadio2" class="custom-control-label"><i class="flaticon-011-compass"></i></label>
                            </div>
        
                            <div class="custom-control custom-radio col-md-2 text-center">
                                <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="flaticon-037-idea">
                                <label for="customRadio3" class="custom-control-label"><i class="flaticon-037-idea"></i></label>
                            </div>
                            
                            <div class="custom-control custom-radio col-md-2 text-center">
                                <input class="custom-control-input" type="radio" id="customRadio4" name="icon" value="flaticon-039-vector">
                                <label for="customRadio4" class="custom-control-label"><i class="flaticon-039-vector"></i></label>
                            </div>
                            
                            <div class="custom-control custom-radio col-md-2 text-center">
                                <input class="custom-control-input" type="radio" id="customRadio5" name="icon" value="flaticon-036-brainstorming">
                                <label for="customRadio5" class="custom-control-label"><i class="flaticon-036-brainstorming"></i></label>
                            </div>
                            
                            <div class="custom-control custom-radio col-md-2 text-center">
                                <input class="custom-control-input" type="radio" id="customRadio6" name="icon" value="flaticon-026-search">
                                <label for="customRadio6" class="custom-control-label"><i class="flaticon-026-search"></i></label>
                            </div>

                            <div class="custom-control custom-radio col-md-2 text-center">
                                <input class="custom-control-input" type="radio" id="customRadio7" name="icon" value="flaticon-018-laptop-1">
                                <label for="customRadio7" class="custom-control-label"><i class="flaticon-018-laptop-1"></i></label>
                            </div>
                                
                            <div class="custom-control custom-radio col-md-2 text-center">
                                <input class="custom-control-input" type="radio" id="customRadio8" name="icon" value="flaticon-043-sketch">
                                <label for="customRadio8" class="custom-control-label"><i class="flaticon-043-sketch"></i></label>
                            </div>
                                
                            <div class="custom-control custom-radio col-md-2 text-center">
                                <input class="custom-control-input" type="radio" id="customRadio9" name="icon" value="flaticon-012-cube">
                                <label for="customRadio9" class="custom-control-label"><i class="flaticon-012-cube"></i></label>
                            </div>
                        </div>
                        @error('icon')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    {{-- </div> --}}
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection