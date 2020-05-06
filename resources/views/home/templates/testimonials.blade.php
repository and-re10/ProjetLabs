<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    @if (count($testimonials1) !== 0)
                        <h2>{{$testimonials1[0]->titre}}</h2>
                    @else
                        <h2>What our clients say</h2>   
                    @endif 
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    @if (count($testimonials2) !== 0)
                        @foreach ($testimonials2 as $testimonial2)
                            <!-- single testimonial -->
                            <div class="testimonial">
                                <span>‘​‌‘​‌</span>
                                <p>{{$testimonial2->texte}}</p>
                                <div class="client-info">
                                    <div class="avatar">
                                        <img src="{{asset('storage/'.$testimonial2->img_path)}}" alt="">
                                    </div>
                                    <div class="client-name">
                                        <h2>{{$testimonial2->name}} {{$testimonial2->surname}}</h2>
                                        <p>{{$testimonial2->work}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/01.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/02.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/01.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/02.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/01.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/02.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->