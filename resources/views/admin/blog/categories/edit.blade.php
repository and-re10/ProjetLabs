@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Mes Categories</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('categories.update', $categorie->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputPassword1">Categorie</label>
                        <input type="text" class="form-control @error('categories') is-invalid @enderror" name="categories" id="categories" value="{{editError($categorie->categories, "categories")}}" placeholder="">
                        @error('categories')
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