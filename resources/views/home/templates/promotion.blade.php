<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            @if (count($readys) !== 0)
                <div class="col-md-9">
                    <h2>{{$readys[0]->titre}}</h2>
                    <p>{{$readys[0]->sous_titre}}</p>
                </div>
                <div class="col-md-3">
                    <div class="promo-btn-area">
                        <a href="#con_form" class="site-btn btn-2">{{$readys[0]->btn_name}}</a>
                    </div>
                </div>
            @else
                <div class="col-md-9">
                    <h2>Are you ready to stand out?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
                </div>
                <div class="col-md-3">
                    <div class="promo-btn-area">
                        <a href="" class="site-btn btn-2">Browse</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Promotion section end-->