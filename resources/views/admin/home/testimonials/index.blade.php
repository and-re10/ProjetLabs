@extends('adminlte::page')

@section('content')
    
    <div class="container">
        <h1 class="text-center">Testimonials</h1>

        <div class="col-12 mb-5 pb-5">
            @if (count($testimonials1) === 0)
                <a href="{{route('testimonials1.create')}}" class="btn btn-primary mb-3">Créer</a>                
            @endif

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Titre Testimonials</h3>
        
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>Titre</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials1 as $testimonial1)
                            <tr>
                                <td>{{maxStr($testimonial1->titre, 20)}}</td>
                                <td>
                                    <form action="{{route('testimonials1.destroy', $testimonial1->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('testimonials1.edit', $testimonial1->id)}}" class="btn btn-primary">Éditer</a>
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        {{-- Partie 2 --}}
        <div class="col-12 mb-5 pb-5">
            {{-- @if (count($testimonials2) === 0) --}}
                <a href="{{route('testimonials2.create')}}" class="btn btn-primary mb-3">Créer</a>                
            {{-- @endif --}}

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Titre Testimonials</h3>
        
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Work</th>
                        <th>Testimonial</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials2 as $testimonial2)
                            <tr>
                                <td>
                                    <img src="{{asset('storage/'.$testimonial2->img_path)}}" alt="" class="w-100">
                                </td>
                                <td>{{maxStr($testimonial2->name, 15)}}</td>
                                <td>{{maxStr($testimonial2->surname, 15)}}</td>
                                <td>{{maxStr($testimonial2->work, 15)}}</td>
                                <td>{{maxStr($testimonial2->texte, 15)}}</td>
                                <td>
                                    <form action="{{route('testimonials2.destroy', $testimonial2->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('testimonials2.edit', $testimonial2->id)}}" class="btn btn-primary">Éditer</a>
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection