<!-- Page Preloder -->
{{-- <div id="preloder">
    <div class="loader">
        <img src="img/logo.png" alt="">
        <h2>Loading.....</h2>
    </div>
</div> --}}


<!-- Header section -->
<header class="header-section">
    <div class="logo">
        @if (count($menus) !== 0)
            <img src="storage/{{$menus[0]->logo}}" alt=""><!-- Logo -->
        @else
            <img src="img/logo.png" alt=""><!-- Logo -->
        @endif
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            @if (count($menus) !== 0)
            @foreach ($menus as $menu)
                <li class="active"><a href="{{route('home')}}">{{$menu->nom_lien1}}</a></li>
                <li class=""><a href="{{route('services')}}">{{$menu->nom_lien2}}</a></li>
                <li><a href="{{route('blog')}}">{{$menu->nom_lien3}}</a></li>
                <li><a href="{{route('contact')}}">{{$menu->nom_lien4}}</a></li>    
            @endforeach
            @else
                <li class="active"><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            @endif
        </ul>
    </nav>
</header>
<!-- Header section end -->