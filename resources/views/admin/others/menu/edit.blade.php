@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Menu</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('menu.update', $menu->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nom de Page 1</label>
                        <input type="text" class="form-control  @error('nom1') is-invalid @enderror" name="nom1" value="{{editError($menu->nom_lien1, "nom1")}}" id="nom1" placeholder="">
                        @error('nom1')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nom de Page 2</label>
                        <input type="text" class="form-control  @error('nom2') is-invalid @enderror" name="nom2" value="{{editError($menu->nom_lien2, "nom2")}}" id="nom2" placeholder="">
                        @error('nom2')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nom de Page 3</label>
                        <input type="text" class="form-control  @error('nom3') is-invalid @enderror" name="nom3" value="{{editError($menu->nom_lien3, "nom3")}}" id="nom3" placeholder="">
                        @error('nom3')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nom de Page 4</label>
                        <input type="text" class="form-control  @error('nom4') is-invalid @enderror" name="nom4" value="{{editError($menu->nom_lien4, "nom4")}}" id="nom4" placeholder="">
                        @error('nom4')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('logo') is-invalid @enderror" value="{{$menu->logo}}" name="logo" id="logo">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                        @error('logo')
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