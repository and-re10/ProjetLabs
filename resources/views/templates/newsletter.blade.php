<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form" action="{{route('newsletter.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="email" placeholder="Your e-mail here">

                    <button type="submit" class="site-btn btn-2">Newsletter</button>
                </form>
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                @if (session('error'))
                    <div class="text-danger pb-3">
                        {{session('error')}}
                    </div>
                @endif

                @if (session('messages'))
                    <div class="text-success pb-3">
                        {{session('messages')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->