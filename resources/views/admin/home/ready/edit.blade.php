@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ready</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('ready.update', $ready->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Titre</label>
                        <input type="text" class="form-control  @error('titre') is-invalid @enderror" name="titre" value="{{editError($ready->titre, "titre")}}" id="titre" placeholder="">
                        @error('titre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Sous-titre</label>
                        <textarea class="form-control  @error('sous_titre') is-invalid @enderror" name="sous_titre" id="sous_titre" placeholder="">{{editError($ready->sous_titre, "sous_titre")}}</textarea>
                        @error('sous_titre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nom du Bouton</label>
                        <input type="text" class="form-control" name="btn_name" id="btn_name" placeholder="" value="{{editError($ready->btn_name, "btn_name")}}">
                        @error('texte1')
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