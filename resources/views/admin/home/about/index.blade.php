@extends('adminlte::page')

@section('content')
    
    <div class="container">
        <h1 class="text-center">About</h1>

        <div class="col-12 mb-5 pb-5">
            @if (count($abouts) === 0)
                <a href="{{route('about.create')}}" class="btn btn-primary mb-3">Créer</a>                
            @endif

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">About Me</h3>
        
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
                        <th>Texte 1</th>
                        <th>Texte 2</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)
                            <tr>
                                <td>{{maxStr($about->titre, 15)}}</td>
                                <td>{{maxStr($about->texte1, 15)}}</td>
                                <td>{{maxStr($about->texte2, 15)}}</td>
                                <td>{{maxStr($about->btn_name, 15)}}</td>
                                {{-- <td>{{maxStr($about->btn_url, 15)}}</td> --}}
                                <td>
                                    <form action="{{route('about.destroy', $about->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('about.edit', $about->id)}}" class="btn btn-primary">Éditer</a>
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
            @if (count($videos) === 0)
                <a href="{{route('video.create')}}" class="btn btn-primary mb-3">Créer</a>                
            @endif

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Ma Video</h3>
        
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
                        <th>Video</th>
                        <th>Lien de la Video</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $video)
                            <tr>
                                <td>
                                    <img src="{{asset('storage/'.$video->video)}}" class="w-100" alt="">
                                </td>
                                <td>{{maxStr($video->btn_url, 15)}}</td>
                                {{-- <td>{{maxStr($about->btn_url, 15)}}</td> --}}
                                <td>
                                    <form action="{{route('video.destroy', $video->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('video.edit', $video->id)}}" class="btn btn-primary">Éditer</a>
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