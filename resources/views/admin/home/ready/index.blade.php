@extends('adminlte::page')

@section('content')
    
    <div class="container">
        <h1 class="text-center">Ready</h1>

        <div class="col-12 mb-5 pb-5">
            @if (count($readys) === 0)
                <a href="{{route('ready.create')}}" class="btn btn-primary mb-3">Créer</a>                
            @endif

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Ready</h3>
        
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
                        <th>Sous-titre</th>
                        <th>Nom Bouton</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($readys as $ready)
                            <tr>
                                <td>{{maxStr($ready->titre, 15)}}</td>
                                <td>{{maxStr($ready->sous_titre, 15)}}</td>
                                <td>{{maxStr($ready->btn_name, 15)}}</td>
                                {{-- <td>{{maxStr($about->btn_url, 15)}}</td> --}}
                                <td>
                                    <form action="{{route('ready.destroy', $ready->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('ready.edit', $ready->id)}}" class="btn btn-primary">Éditer</a>
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