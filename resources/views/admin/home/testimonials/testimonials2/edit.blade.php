@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Testimonials</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('testimonials2.update', $testimonial2->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Titre</label>
                        <textarea type="text" class="form-control  @error('texte') is-invalid @enderror" name="texte" id="texte" placeholder="">{{editError($testimonial2->texte, "texte")}}</textarea>
                        @error('texte')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nom</label>
                        <input type="text" class="form-control  @error('surnom') is-invalid @enderror" name="surnom" value="{{editError($testimonial2->surname, "surnom")}}" id="surnom" placeholder="">
                        @error('surnom')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Prenom</label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{editError($testimonial2->name, "name")}}" id="name" placeholder="">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Work</label>
                        <input type="text" class="form-control  @error('work') is-invalid @enderror" name="work" value="{{editError($testimonial2->work, "work")}}" id="work" placeholder="">
                        @error('work')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" value="{{$testimonial2->img_path}}" name="image" id="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
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