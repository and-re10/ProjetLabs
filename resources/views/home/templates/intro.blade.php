<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="img/big-logo.png" alt="">
            @if (count($banniere_homes) !== 0)
                <p>{{$banniere_homes[0]->slogan}}</p>
            @else
                <p>Get your freebie template now!</p>
            @endif
            
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @if (count($banniere_homes2) !== 0)
            @foreach ($banniere_homes2 as $banniere_home2)
                <div class="item  hero-item" data-bg="{{asset('storage/'.$banniere_home2->img_path)}}"></div>
            @endforeach
        @else
            <div class="item  hero-item" data-bg="img/01.jpg"></div>
            <div class="item  hero-item" data-bg="img/02.jpg"></div>
        @endif
        
    </div>
</div>
<!-- Intro Section -->
