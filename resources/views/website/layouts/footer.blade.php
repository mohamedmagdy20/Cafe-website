	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							{{$setting[1]->value}}
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							{{$setting[6]->value}}
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
              {{$setting[5]->value}}
			
            </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
  
  <!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>{{$about->title}}</h3>
					<p>{{$about->body}}</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
          <p style="font-size:25px">24 Hour</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">{{$setting[5]->value}}</p>
					<p class="lead"><a href="#">{{$setting[1]->value}}</a></p>
					<p><a href="#">{{$setting[6]->value}}</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					{{-- <h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div> --}}
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="{{$setting[2]->value}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="{{$setting[3]->value}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="{{$setting[4]->value}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">{{$setting[0]->value}}</a> Design By : Mohamed Magdy Mohamed</p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer --