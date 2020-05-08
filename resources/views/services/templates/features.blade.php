	<!-- features section -->
	<div class="team-section spad" id="services-primes">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				@if (count($servicesPrimes) !== 0)
					<h2>{{$servicesPrimes[0]->titre}}</h2>
				@else
					<h2>Get in <span>the Lab</span> and  discover the world</h2>
				@endif
			</div>
			<div class="row">
				
				<div class="col-md-4 col-sm-4 features">
					@if (count($services2) !== 0)
						@for ($i = 0; $i < 3; $i++)
							<!-- feature item -->
							<div class="icon-box light left">
								<div class="service-text">
									<h2>{{$services2[count($services2) - $i - 1]->titre}}</h2>
									<p>{{$services2[count($services2) - $i - 1]->description}}</p>
								</div>
								<div class="icon">
									<i class="{{$services2[count($services2) - $i - 1]->icon}}"></i>
								</div>
							</div>
						@endfor
					@else
						<!-- feature item -->
						<div class="icon-box light left">
							<div class="service-text">
								<h2>Get in the lab</h2>
								<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
							</div>
							<div class="icon">
								<i class="flaticon-002-caliper"></i>
							</div>
						</div>
						<!-- feature item -->
						<div class="icon-box light left">
							<div class="service-text">
								<h2>Projects online</h2>
								<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
							</div>
							<div class="icon">
								<i class="flaticon-019-coffee-cup"></i>
							</div>
						</div>
						<!-- feature item -->
						<div class="icon-box light left">
							<div class="service-text">
								<h2>SMART MARKETING</h2>
								<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
							</div>
							<div class="icon">
								<i class="flaticon-020-creativity"></i>
							</div>
						</div>
					@endif
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
				@if (count($services2) !== 0)
						@for ($i = 0; $i < 3; $i++)
							<!-- feature item -->
							<div class="icon-box light left">
								<div class="service-text">
									<h2>{{$services2[count($services2) - $i - 4]->titre}}</h2>
									<p>{{$services2[count($services2) - $i - 4]->description}}</p>
								</div>
								<div class="icon">
									<i class="{{$services2[count($services2) - $i - 4]->icon}}"></i>
								</div>
							</div>
						@endfor
					@else
						<div class="icon-box light">
							<div class="icon">
								<i class="flaticon-037-idea"></i>
							</div>
							<div class="service-text">
								<h2>Get in the lab</h2>
								<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
							</div>
						</div>
						<!-- feature item -->
						<div class="icon-box light">
							<div class="icon">
								<i class="flaticon-025-imagination"></i>
							</div>
							<div class="service-text">
								<h2>Projects online</h2>
								<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
							</div>
						</div>
						<!-- feature item -->
						<div class="icon-box light">
							<div class="icon">
								<i class="flaticon-008-team"></i>
							</div>
							<div class="service-text">
								<h2>SMART MARKETING</h2>
								<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
							</div>
						</div>
					@endif
				</div>
			</div>
			<div class="text-center mt100">
				@if (count($servicesPrimes) !== 0)
					<a href="#blog-rapides" class="site-btn">{{$servicesPrimes[0]->btn_name}}</a>
				@else
					<a href="#blog-rapides" class="site-btn">Browse</a>
				@endif
			</div>
		</div>
	</div>
	<!-- features section end-->