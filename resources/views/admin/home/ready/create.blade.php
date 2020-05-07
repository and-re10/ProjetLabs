@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ready</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('ready.store')}}" method="POST" enctype="multipart/form-data">
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
                        <label for="exampleInputPassword1">Sous-titre</label>
                        <input type="text" class="form-control  @error('sous_titre') is-invalid @enderror" name="sous_titre" id="sous_titre" placeholder="" value="{{old('sous_titre')}}">
                        @error('sous_titre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nom du Bouton</label>
                        <input type="text" class="form-control" name="btn_name" id="btn_name" placeholder="" value="{{old('btn_name')}}">
                        @error('btn_name')
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