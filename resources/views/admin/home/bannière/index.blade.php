@extends('adminlte::page')

@section('content')
    
    <div class="container">
        <h1 class="text-center">Banniere Home</h1>

        <div class="col-12 mb-5 pb-5">
            @if (count($banniere_homes) === 0)
                <a href="{{route('banniere-home.create')}}" class="btn btn-primary mb-3">Créer</a>                
            @endif

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Mo Slogan</h3>
        
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
                        <th>Slogan</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($banniere_homes as $banniere_home)
                            <tr>
                                <td>{{maxStr($banniere_home->slogan, 20)}}</td>
                                <td>
                                    <form action="{{route('banniere-home.destroy', $banniere_home->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('banniere-home.edit', $banniere_home->id)}}" class="btn btn-primary">Éditer</a>
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

        <div class="col-12">
            
            <a href="{{route('banniere-home2.create')}}" class="btn btn-primary mb-3">Créer</a>                

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Mes Images</h3>
        
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
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($banniere_homes2 as $banniere_home2)
                            <tr>
                                <td>
                                    <img src="{{asset('storage/'.$banniere_home2->img_path)}}" alt="" class="w-100">
                                </td>
                                <td>
                                    <form action="{{route('banniere-home2.destroy', $banniere_home2->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('banniere-home2.edit', $banniere_home2->id)}}" class="btn btn-primary">Éditer</a>
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