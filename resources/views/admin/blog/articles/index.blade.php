@extends('adminlte::page')

@section('content')
    
    <div class="container">
        <h1 class="text-center">Banniere Home</h1>

        <div class="col-12">
            
            <a href="{{route('articles.create')}}" class="btn btn-primary mb-3">Créer</a>                

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Mes Articles</h3>
        
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
                        <th>Titre</th>
                        <th>Texte</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>
                                    <img src="{{asset('storage/'.$article->img_path)}}" alt="" class="w-100">
                                </td>
                                <td>{{maxStr($article->titre, 20)}}</td>
                                <td>{{maxStr($article->texte, 20)}}</td>
                                <td>
                                    <form action="{{route('articles.destroy', $article->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('articles.edit', $article->id)}}" class="btn btn-primary">Éditer</a>
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