@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Titre de Services</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('service1.update', $service1->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Titre</label>
                        <input type="text" class="form-control  @error('titre') is-invalid @enderror" name="titre" value="{{editError($service1->titre, "titre")}}" id="titre" placeholder="">
                        @error('titre')
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