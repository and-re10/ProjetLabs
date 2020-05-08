@extends('adminlte::page')

@section('content')
    
    <div class="container">
        <h1 class="text-center">Services Primés</h1>
        <div class="col-12">
            
            <a href="{{route('services-primes.create')}}" class="btn btn-primary mb-3">Créer</a>                

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Services Primés</h3>
        
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
                        <th>Image</th>
                        <th>Nom do Bouton</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($servicesPrimes as $servicePrime)
                            <tr>
                                <td>{{$servicePrime->titre}}</td>
                                <td>
                                    <img src="{{asset('storage/'.$servicePrime->img_path)}}" alt="" class="w-25">
                                </td>
                                <td>{{$servicePrime->btn_name}}</td>
                                <td>
                                    <form action="{{route('services-primes.destroy', $servicePrime->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('services-primes.edit', $servicePrime->id)}}" class="btn btn-primary">Éditer</a>
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