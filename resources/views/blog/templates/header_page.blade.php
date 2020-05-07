<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            @if (count($menus) !== 0)
                <h2>{{$menus[0]->nom_lien3}}</h2>
                <div class="page-links">
                    <a href="#">Home</a>
                    <span>{{$menus[0]->nom_lien3}}</span>
                </div>
            @else
                <h2>Blog</h2>
                <div class="page-links">
                    <a href="#">Home</a>
                    <span>Blog</span>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Page header end-->