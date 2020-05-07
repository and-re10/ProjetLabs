@extends('adminlte::page')

@section('content')
    @section('css')
        <link rel="stylesheet" href="{{asset('/css/flaticon.css')}}">
    @stop
    <div class="container">
        <h1 class="text-center">Services</h1>

        <div class="col-12 mb-5 pb-5">
            @if (count($services1) === 0)
                <a href="{{route('service1.create')}}" class="btn btn-primary mb-3">Créer</a>                
            @endif

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Titre de Services</h3>
        
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"></button>
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
                        @foreach ($services1 as $service1)
                            <tr>
                                <td>{{maxStr($service1->titre, 15)}}</td>
                                <td>
                                    <form action="{{route('service1.destroy', $service1->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('service1.edit', $service1->id)}}" class="btn btn-primary">Éditer</a>
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

        <div class="col-12 mb-5 pb-5">
            {{-- @if (count($services2) === 0) --}}
                <a href="{{route('service2.create')}}" class="btn btn-primary mb-3">Créer</a>                
            {{-- @endif --}}

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Mes Services</h3>
        
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
                        <th>Icon</th>
                        <th>Titre</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($services2 as $service2)
                            <tr>
                                <td><i class="{{$service2->icon}}"></i></td>
                                <td>{{maxStr($service2->titre, 15)}}</td>
                                <td>{{maxStr($service2->description, 15)}}</td>
                                <td>
                                    <form action="{{route('service2.destroy', $service2->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('service2.edit', $service2->id)}}" class="btn btn-primary">Éditer</a>
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