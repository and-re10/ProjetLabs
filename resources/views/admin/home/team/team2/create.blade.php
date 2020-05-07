@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Team</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('team2.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nom</label>
                        <input type="text" class="form-control  @error('surname') is-invalid @enderror" name="surname" value="{{old('surname')}}" id="surname" placeholder="">
                        @error('surname')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Prenom</label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" id="name" placeholder="">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Work</label>
                        <input type="text" class="form-control  @error('work') is-invalid @enderror" name="work" value="{{old('work')}}" id="work" placeholder="">
                        @error('work')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" value="{{old('image')}}" name="image" id="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
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