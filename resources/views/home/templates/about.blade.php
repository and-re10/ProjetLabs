<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @if(count($services2) !== 0)
                    @foreach($services2->random(3) as $service2)
                        <!-- single card -->
                        <div class="col-md-4 @if($loop->index === 2) col-sm-12 @else col-sm-6 @endif">
                            <div class="lab-card">
                                <div class="icon">
                                    <i class="{{$service2->icon}}"></i>
                                </div>
                                <h2>{{$service2->titre}}</h2>
                                <p>{{$service2->description}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- single card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="flaticon-023-flask"></i>
                            </div>
                            <h2>Get in the lab</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="flaticon-011-compass"></i>
                            </div>
                            <h2>Projects online</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-md-4 col-sm-12">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="flaticon-037-idea"></i>
                            </div>
                            <h2>SMART MARKETING</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                @if (count($abouts) !== 0)
                    <h2>{{$abouts[0]->titre}}</h2>
                @else
                    <h2>Get in <span>the Lab</span> and discover the world</h2>
                @endif
                
            </div>
            <div class="row">
                @if (count($abouts) !== 0)
                    <div class="col-md-6">
                        <p>{{$abouts[0]->texte1}}</p>
                    </div>
                    <div class="col-md-6">
                        <p>{{$abouts[0]->texte2}}</p>
                    </div>
                @else
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.</p>
                    </div>
                @endif
            </div>
            <div class="text-center mt60">
                @if (count($abouts) !== 0)
                    <a href="#contact-form" class="site-btn scrollTo">{{$abouts[0]->btn_name}}</a>
                @else
                    <a href="#contact-form" class="site-btn">Browse</a>
                @endif
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @if (count($videos) !== 0)
                            <img src="storage/{{$videos[0]->video}}" alt="">
                            <a href="{{asset($videos[0]->btn_url)}}" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        @else
                            <img src="img/video.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->