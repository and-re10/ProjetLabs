<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            @if (count($services1) !== 0)
                <h2>{{$services1[0]->titre}}</h2>
            @else
                <h2>Get in <span>the Lab</span> and see the services</h2>
            @endif
        </div>
        <div class="row">
            @if (count($services2) !== 0)
                @foreach ($servs as $serv2)
                    <!-- single service -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <div class="icon">
                                <i class="{{$serv2->icon}}"></i>
                            </div>
                            <div class="service-text">
                                <h2>{{$serv2->titre}}</h2>
                                <p>{{maxStr($serv2->description, 100)}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="flaticon-023-flask"></i>
                        </div>
                        <div class="service-text">
                            <h2>Get in the lab</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                        </div>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="flaticon-011-compass"></i>
                        </div>
                        <div class="service-text">
                            <h2>Projects online</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                        </div>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="flaticon-037-idea"></i>
                        </div>
                        <div class="service-text">
                            <h2>SMART MARKETING</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                        </div>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="flaticon-039-vector"></i>
                        </div>
                        <div class="service-text">
                            <h2>Social Media</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                        </div>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="flaticon-036-brainstorming"></i>
                        </div>
                        <div class="service-text">
                            <h2>Brainstorming</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                        </div>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="flaticon-026-search"></i>
                        </div>
                        <div class="service-text">
                            <h2>Documented</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                        </div>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="flaticon-018-laptop-1"></i>
                        </div>
                        <div class="service-text">
                            <h2>Responsive</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                        </div>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="flaticon-043-sketch"></i>
                        </div>
                        <div class="service-text">
                            <h2>Retina ready</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                        </div>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="flaticon-012-cube"></i>
                        </div>
                        <div class="service-text">
                            <h2>Ultra modern</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        {{$servs->links()}}
        <div class="text-center">
            <a href="#services-primes" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->