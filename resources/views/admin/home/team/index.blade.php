@extends('adminlte::page')

@section('content')
    
    <div class="container">
        <h1 class="text-center">Team</h1>

        <div class="col-12 mb-5 pb-5">
            @if (count($teams1) === 0)
                <a href="{{route('team1.create')}}" class="btn btn-primary mb-3">Créer</a>                
            @endif

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Mom Titre</h3>
        
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
                        <th>Titre Team</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams1 as $team1)
                            <tr>
                                <td>{{maxStr($team1->titre, 20)}}</td>
                                <td>
                                    <form action="{{route('team1.destroy', $team1->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('team1.edit', $team1->id)}}" class="btn btn-primary">Éditer</a>
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
            {{-- @if (count($teams2) === 0) --}}
                <a href="{{route('team2.create')}}" class="btn btn-primary mb-3">Créer</a>                
            {{-- @endif --}}

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Mom Titre</h3>
        
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
                        <th>Teamates</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams2 as $team2)
                            <tr>
                                <td><img src="{{asset('storage/'.$team2->img_path)}}" alt="" class="w-100"></td>
                                <td>{{maxStr($team2->name, 20)}}</td>
                                <td>{{maxStr($team2->surname, 20)}}</td>
                                <td>{{maxStr($team2->work, 20)}}</td>
                                <td>
                                    <form action="{{route('team2.destroy', $team2->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('team2.edit', $team2->id)}}" class="btn btn-primary">Éditer</a>
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