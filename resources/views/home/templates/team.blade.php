<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            @if (count($teams1) !== 0)
                <h2>{{$teams1[0]->titre}}</h2>
            @else
                <h2>Get in <span>the Lab</span> and  meet the team</h2>
            @endif
        </div>
        <div class="row">
            @if (count($teams2) !== 0)
                {{-- @foreach ($teams2 as $team2)
                    <!-- single member -->
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="{{asset('storage/'.$team2->img_path)}}" alt="">
                            <h2>{{$team2->name}} {{$team2->surname}}</h2>
                            <h3>{{$team2->work}}</h3>
                        </div>
                    </div>
                @endforeach --}}
                @for ($i = 0; $i < 3; $i++)
                    <!-- single member -->
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="{{asset('storage/'.$teams2[count($teams2) - $i - 1]->img_path)}}" alt="">
                            <h2>{{$teams2[count($teams2) - $i - 1]->name}} {{$teams2[count($teams2) - $i - 1]->surname}}</h2>
                            <h3>{{$teams2[count($teams2) - $i - 1]->work}}</h3>
                        </div>
                    </div>
                @endfor
            @else
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/1.jpg" alt="">
                        <h2>Christinne Williams</h2>
                        <h3>Project Manager</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/2.jpg" alt="">
                        <h2>Christinne Williams</h2>
                        <h3>Junior developer</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/3.jpg" alt="">
                        <h2>Christinne Williams</h2>
                        <h3>Digital designer</h3>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Team Section end-->