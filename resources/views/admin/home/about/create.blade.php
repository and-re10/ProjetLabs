@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Menu</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
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
                        <label for="exampleInputPassword1">Texte 1</label>
                        <textarea class="form-control  @error('texte1') is-invalid @enderror" name="texte1" id="texte1" placeholder="">{{old('texte1')}}</textarea>
                        @error('texte1')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Texte 2</label>
                        <textarea class="form-control" name="texte2" id="texte2" placeholder="">{{old('texte2')}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nom du Bouton</label>
                        <input type="text" class="form-control" name="btn_name" id="btn_name" placeholder="" value="{{old('btn_name')}}">
                    </div>

                    {{-- <div class="col-sm-6">
                        <!-- radio -->
                        <div class="form-group">
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio1" name="service_icon" value="fas fa-desktop">
                            <label for="customRadio1" class="custom-control-label"><i class="fas fa-desktop"></i></label>
                          </div>
      
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio2" name="service_icon" value="fas fa-chart-bar">
                            <label for="customRadio2" class="custom-control-label"><i class="fas fa-chart-bar"></i></label>
                          </div>
      
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio3" name="service_icon" value="fas fa-paper-plane">
                            <label for="customRadio3" class="custom-control-label"><i class="fas fa-paper-plane"></i></label>
                          </div>
                          
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio4" name="service_icon" value="fas fa-images">
                            <label for="customRadio4" class="custom-control-label"><i class="fas fa-images"></i></label>
                          </div>
                          
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio5" name="service_icon" value="fas fa-road">
                            <label for="customRadio5" class="custom-control-label"><i class="fas fa-road"></i></label>
                          </div>
                          
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio6" name="service_icon" value="fa fa-shopping-bag">
                            <label for="customRadio6" class="custom-control-label"><i class="fa fa-shopping-bag"></i></label>
                          </div>
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