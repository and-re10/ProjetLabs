@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Info Contact</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('info-contact.update', $infoContact->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Titre 1</label>
                        <input type="text" class="form-control  @error('titre1') is-invalid @enderror" name="titre1" value="{{editError($infoContact->titre1, "titre1")}}" id="titre1" placeholder="">
                        @error('titre1')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Texte</label>
                        <textarea class="form-control  @error('texte') is-invalid @enderror" name="texte" id="texte" placeholder="">{{editError($infoContact->texte, "texte")}}</textarea>
                        @error('texte')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Titre 2</label>
                        <input type="text" class="form-control @error('titre2') is-invalid @enderror" name="titre2" id="titre2" placeholder="" value="{{editError($infoContact->titre2, "titre2")}}">
                        @error('titre2')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="" value="{{editError($infoContact->address, "address")}}">
                        @error('address')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="" value="{{editError($infoContact->phone, "phone")}}">
                        @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="" value="{{editError($infoContact->email, "email")}}">
                        @error('email')
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