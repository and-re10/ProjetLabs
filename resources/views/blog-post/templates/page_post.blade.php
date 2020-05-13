<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        <img src="{{asset('storage/'.$article->img_path)}}" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$article->titre}}</h2>
                        <div class="post-meta">
                            <a href="">Loredana Papp</a>
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div>
                        <p>{{$article->texte}}</p>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="{{asset('img/avatar/03.jpg')}}" alt="">
                        </div>
                        <div class="author-info">
                            <h2>Lore Williams, <span>Author</span></h2>
                            <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2>Comments (2)</h2>
                        <ul class="comment-list">
                            <li>
                                <div class="avatar">
                                    <img src="{{asset('img/avatar/01.jpg')}}" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>Michael Smith | 03 nov, 2017 | Reply</h3>
                                    <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                                </div>
                            </li>
                            <li>
                                <div class="avatar">
                                    <img src="{{asset('img/avatar/02.jpg')}}" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>Michael Smith | 03 nov, 2017 | Reply</h3>
                                    <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                                </div>
                            </li>
                            @foreach ($postComments as $postComment)
                                <li>
                                    {{-- <div class="avatar">
                                        <img src="{{asset('img/avatar/02.jpg')}}" alt="">
                                    </div> --}}
                                    <div class="commetn-text">
                                        <h3>{{$postComment->name}} | 03 nov, 2017 | Reply</h3>
                                        <p>{{$postComment->message}}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class" action="{{route('post-comments.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" placeholder="Your email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" name="sujet" placeholder="Subject">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button type="submit" class="site-btn">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @if (count($categories) !== 0)
                        @foreach ($categories as $categorie)
                            <li><a href="#">{{$categorie->categories}}</a></li>
                        @endforeach
                        @else
                            <li><a href="#">Vestibulum maximus</a></li>
                            <li><a href="#">Nisi eu lobortis pharetra</a></li>
                            <li><a href="#">Orci quam accumsan </a></li>
                            <li><a href="#">Auguen pharetra massa</a></li>
                            <li><a href="#">Tellus ut nulla</a></li>
                            <li><a href="#">Etiam egestas viverra </a></li>
                        @endif
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Instagram</h2>
                    <ul class="instagram">
                        <li><img src="{{asset('img/instagram/1.jpg')}}" alt=""></li>
                        <li><img src="{{asset('img/instagram/2.jpg')}}" alt=""></li>
                        <li><img src="{{asset('img/instagram/3.jpg')}}" alt=""></li>
                        <li><img src="{{asset('img/instagram/4.jpg')}}" alt=""></li>
                        <li><img src="{{asset('img/instagram/5.jpg')}}" alt=""></li>
                        <li><img src="{{asset('img/instagram/6.jpg')}}" alt=""></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @if (count($tags) !== 0)
                            @foreach ($tags as $tag)
                                <li><a href="">{{$tag->tag_name}}</a></li>
                            @endforeach
                        @else
                            <li><a href="">branding</a></li>
                            <li><a href="">identity</a></li>
                            <li><a href="">video</a></li>
                            <li><a href="">design</a></li>
                            <li><a href="">inspiration</a></li>
                            <li><a href="">web design</a></li>
                            <li><a href="">photography</a></li>
                        @endif
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Quote</h2>
                    <div class="quote">
                        <span class="quotation">‘​‌‘​‌</span>
                        <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
                    </div>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Add</h2>
                    <div class="add">
                        <a href=""><img src="{{asset('img/add.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->