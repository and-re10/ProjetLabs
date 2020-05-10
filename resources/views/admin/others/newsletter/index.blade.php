@extends('adminlte::page')

@section('content')
    
    <div class="container">
        <h1 class="text-center">Newsletter</h1>

        <div class="col-12 mb-5 pb-5">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Newsletter</h3>
        
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
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($newsletters as $newsletter)
                            <tr>
                                <td>{{maxStr($newsletter->email, 20)}}</td>
                                {{-- <td>
                                    <form action="{{route('newsletter.destroy', $newsletter->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('newsletter.edit', $newsletter->id)}}" class="btn btn-primary">Éditer</a>
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td> --}}
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