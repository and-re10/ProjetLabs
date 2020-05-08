@extends('adminlte::page')

@section('content')
    
    <div class="container">
        <h1 class="text-center">Bouton du Formulaire</h1>

        <div class="col-12 mb-5 pb-5">
            @if (count($btnForms) === 0)
                <a href="{{route('bouton-form.create')}}" class="btn btn-primary mb-3">Créer</a>                
            @endif

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Nom du bouton</h3>
            
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
                        <th>Nom du Bouton</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($btnForms as $btnForm)
                            <tr>
                                <td>{{$btnForm->btn_name}}</td>
                                <td>
                                    <form action="{{route('bouton-form.destroy', $btnForm->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('bouton-form.edit', $btnForm->id)}}" class="btn btn-primary">Éditer</a>
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