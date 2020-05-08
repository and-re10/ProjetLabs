<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                @if (count($infoContacts) !== 0)
                    <div class="section-title left">
                        <h2>{{$infoContacts[0]->titre1}}</h2>
                    </div>
                    <p>{{$infoContacts[0]->texte}}</p>
                    <h3 class="mt60">{{$infoContacts[0]->titre1}}</h3>
                    <p class="con-item">{{$infoContacts[0]->address}}</p>
                    <p class="con-item">{{$infoContacts[0]->phone}}</p>
                    <p class="con-item">{{$infoContacts[0]->email}}</p>
                @else
                    <div class="section-title left">
                        <h2>Contact us</h2>
                    </div>
                    <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
                    <h3 class="mt60">Main Office</h3>
                    <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
                    <p class="con-item">0034 37483 2445 322</p>
                    <p class="con-item">hello@company.com</p>
                @endif
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull" id="contact-form">
                <form class="form-class" action="{{route('contact-messages.store')}}" id="con_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        {{-- Nom --}}
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                            @error('name')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                        {{-- Email --}}
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                            @error('email')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                        
                        <div class="col-sm-12">

                            {{-- Sujet --}}
                            <input type="text" name="sujet" placeholder="Subject">
                            @error('sujet')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror

                            {{-- Message --}}
                            <textarea name="message" placeholder="Message"></textarea>
                            @if (session('messages'))
                                <div class="text-success pb-3">
                                    {{session('messages')}}
                                </div>
                            @endif
                            
                            @if (count($btnForms) !== 0)
                                <button class="site-btn">{{$btnForms[0]->btn_name}}</button>
                            @else
                                <button class="site-btn">send</button>
                            @endif
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->