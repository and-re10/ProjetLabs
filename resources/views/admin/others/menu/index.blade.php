@extends('adminlte::page')

@section('content')
    
    <div class="container">
        <h1 class="text-center">Navbar Menu</h1>

        <div class="col-12">
            @if (count($menus) === 0)
                <a href="{{route('menu.create')}}" class="btn btn-primary mb-3">Créer</a>                
            @endif

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Mon Menu</h3>
        
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
                        <th>Logo</th>
                        <th>lien 1</th>
                        <th>lien 2</th>
                        <th>lien 3</th>
                        <th>lien 4</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr>
                                <td><img src="{{asset('storage/'.$menu->logo)}}" class="w-100" alt=""></td>
                                <td>{{$menu->nom_lien1}}</td>
                                <td>{{$menu->nom_lien2}}</td>
                                <td>{{$menu->nom_lien3}}</td>
                                <td>{{$menu->nom_lien4}}</td>
                                <td>
                                    <form action="{{route('menu.destroy', $menu->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('menu.edit', $menu->id)}}" class="btn btn-primary">Éditer</a>
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