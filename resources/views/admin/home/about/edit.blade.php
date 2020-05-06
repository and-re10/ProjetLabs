@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('about.update', $about->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Titre</label>
                        <input type="text" class="form-control  @error('titre') is-invalid @enderror" name="titre" value="{{editError($about->titre, "titre")}}" id="titre" placeholder="">
                        @error('titre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Texte 1</label>
                        <textarea class="form-control  @error('texte1') is-invalid @enderror" name="texte1" id="texte1" placeholder="">{{editError($about->texte1, "texte1")}}</textarea>
                        @error('texte1')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Texte 2</label>
                        <textarea class="form-control" name="texte2" id="texte2" placeholder="">{{editError($about->texte2, "texte2")}}</textarea>
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputPassword1">Texte 2</label>
                        <input type="text" class="form-control" name="btn_name" id="btn_name" placeholder="" value="{{editError($about->btn_name, "btn_name")}}">
                    </div>

                    {{-- <div class="col-sm-6">
                        <label for="">Icon du Service</label>
                        <!-- radio -->
                        <div class="form-group">
                        <div class="custom-control custom-radio">
                            @if ($service2->service_icon === "fas fa-desktop")
                                <input class="custom-control-input" type="radio" id="customRadio1" name="service_icon" value="fas fa-desktop" checked>
                            @else
                                <input class="custom-control-input" type="radio" id="customRadio1" name="service_icon" value="fas fa-desktop">
                            @endif
                            <label for="customRadio1" class="custom-control-label"><i class="fas fa-desktop"></i></label>
                        </div>
        
                        <div class="custom-control custom-radio">
                            @if ($service2->service_icon === "fas fa-chart-bar")
                                <input class="custom-control-input" type="radio" id="customRadio2" name="service_icon" value="fas fa-chart-bar" checked>
                            @else
                                <input class="custom-control-input" type="radio" id="customRadio2" name="service_icon" value="fas fa-chart-bar">
                            @endif
                            <label for="customRadio2" class="custom-control-label"><i class="fas fa-chart-bar"></i></label>
                        </div>
        
                        <div class="custom-control custom-radio">
                            @if ($service2->service_icon === "fas fa-paper-plane")
                                <input class="custom-control-input" type="radio" id="customRadio3" name="service_icon" value="fas fa-paper-plane" checked>
                            @else
                                <input class="custom-control-input" type="radio" id="customRadio3" name="service_icon" value="fas fa-paper-plane">
                            @endif
                            <label for="customRadio3" class="custom-control-label"><i class="fas fa-paper-plane"></i></label>
                        </div>
        
                        <div class="custom-control custom-radio">
                            @if ($service2->service_icon === "fas fa-images")
                                <input class="custom-control-input" type="radio" id="customRadio4" name="service_icon" value="fas fa-images" checked>
                            @else
                                <input class="custom-control-input" type="radio" id="customRadio4" name="service_icon" value="fas fa-images">
                            @endif
                            <label for="customRadio4" class="custom-control-label"><i class="fas fa-images"></i></label>
                        </div>
        
                        <div class="custom-control custom-radio">
                            @if ($service2->service_icon === "fas fa-road")
                                <input class="custom-control-input" type="radio" id="customRadio5" name="service_icon" value="fas fa-road" checked>
                            @else
                                <input class="custom-control-input" type="radio" id="customRadio5" name="service_icon" value="fas fa-road">
                            @endif
                            <label for="customRadio5" class="custom-control-label"><i class="fas fa-road"></i></label>
                        </div>
        
                        <div class="custom-control custom-radio">
                            @if ($service2->service_icon === "fa fa-shopping-bag")
                                <input class="custom-control-input" type="radio" id="customRadio6" name="service_icon" value="fa fa-shopping-bag" checked>
                            @else
                                <input class="custom-control-input" type="radio" id="customRadio6" name="service_icon" value="fa fa-shopping-bag">
                            @endif
                            <label for="customRadio6" class="custom-control-label"><i class="fa fa-shopping-bag"></i></label>
                        </div>
                    </div> --}}
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection