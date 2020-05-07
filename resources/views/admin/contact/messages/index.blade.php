@extends('adminlte::page')
@section('content')
<div class="container">
    <h1 class="text-center">Section Contact Us</h1>
      <div class="col-md-12 mb-5">
        <h1>Emails</h1>
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Inbox</h3>

            {{-- <div class="card-tools">
              <form action="/search/contactUser" method="GET">
                  <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="Search">
  
                      <div class="input-group-append">
                          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                  </div>
              </form>
          </div> --}}
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
              </div>
              <!-- /.btn-group -->
              <a href="{{route('contact-messages.index')}}" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></a>
              <div class="float-right">
                @if (count($messages) === 0)
                  0-{{count($messages)}}/{{count($messages)}}
                @else
                    1-{{count($messages)}}/{{count($messages)}}
                @endif
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.float-right -->
            </div>
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tbody>
                  @if (count($messages) !== 0)
                    @foreach ($messages as $index => $message)
                      <tr>
                        <td>
                          <div class="icheck-primary">
                            <input type="checkbox" value="" id="check1">
                            <label for="check1"></label>
                          </div>
                        </td>
                        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                        <td class="mailbox-name"><a href="{{route('contact-messages.show', $message->id)}}">{{maxStr($message->name, 10)}}</a></td>
                        <td class="mailbox-subject"><b>{{$message->subject}}</b> - {{maxStr($message->message, 25)}}
                        </td>
                        <td class="mailbox-attachment"></td>
                        <td class="mailbox-date">5 mins ago</td>
                        <td >
                          <form action="{{route('contact-messages.destroy', $message->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  @else
                    <tr>
                      <td class="mailbox-name"> Vous n'avez pas de messages</td>
                    </tr>
                  @endif
              
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer p-0">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
              </div>
              <!-- /.btn-group -->
              <a href="{{route('contact-messages.index')}}" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></a>
              <div class="float-right">
                @if (count($messages) === 0)
                  0-{{count($messages)}}/{{count($messages)}}
                @else
                    1-{{count($messages)}}/{{count($messages)}}
                @endif

                {{-- {{++$index}}-{{count($contactUsers)}}/{{count($contactUsers)}} --}}
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.float-right -->
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
</div>
@endsection