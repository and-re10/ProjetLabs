@extends('adminlte::page')

@section('content')
    
    <div class="container">
        <h1 class="text-center">Info Contact</h1>

        <div class="col-12 mb-5 pb-5">
            @if (count($infoContacts) === 0)
                <a href="{{route('info-contact.create')}}" class="btn btn-primary mb-3">Créer</a>                
            @endif

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Information du Contact</h3>
            
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
                        <th>Titre 1</th>
                        <th>Texte</th>
                        <th>Titre 2</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($infoContacts as $infoContact)
                            <tr>
                                <td>{{maxStr($infoContact->titre1, 15)}}</td>
                                <td>{{maxStr($infoContact->texte, 15)}}</td>
                                <td>{{maxStr($infoContact->titre2, 15)}}</td>
                                <td>{{maxStr($infoContact->address, 15)}}</td>
                                <td>{{maxStr($infoContact->phone, 15)}}</td>
                                <td>{{maxStr($infoContact->email, 15)}}</td>
                                <td>
                                    <form action="{{route('info-contact.destroy', $infoContact->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('info-contact.edit', $infoContact->id)}}" class="btn btn-primary">Éditer</a>
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