@extends('layout.master')

@section('title' , 'Home | Shree Hari Pavers')

@section('content')


<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Saurashtra's Largest Pavers Block Production Unit</h1>
					<p>Your New Destination 
							for Pavers Block.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Trending Ads</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- offer 01 -->
				<div class="col-sm-12 col-lg-4">
					<!-- product card -->
	<div class="product-item bg-light">
		<div class="card">
			<div class="thumb-content">
				<!-- <div class="price">$200</div> -->
				<a href="">
					<img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><a href="">11inch Macbook Air</a></h4>
				<ul class="list-inline product-meta">
					<li class="list-inline-item">
						<a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
					</li>
					<li class="list-inline-item">
						<a href=""><i class="fa fa-calendar"></i>26th December</a>
					</li>
				</ul>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
				<div class="product-ratings">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
				</div>
				<div class="col-sm-12 col-lg-4">
					<!-- product card -->
	<div class="product-item bg-light">
		<div class="card">
			<div class="thumb-content">
				<!-- <div class="price">$200</div> -->
				<a href="">
					<img class="card-img-top img-fluid" src="images/products/products-2.jpg" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><a href="">Full Study Table Combo</a></h4>
				<ul class="list-inline product-meta">
					<li class="list-inline-item">
						<a href=""><i class="fa fa-folder-open-o"></i>Furnitures</a>
					</li>
					<li class="list-inline-item">
						<a href=""><i class="fa fa-calendar"></i>26th December</a>
					</li>
				</ul>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
				<div class="product-ratings">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
				</div>
				<div class="col-sm-12 col-lg-4">
					<!-- product card -->
	<div class="product-item bg-light">
		<div class="card">
			<div class="thumb-content">
				<!-- <div class="price">$200</div> -->
				<a href="">
					<img class="card-img-top img-fluid" src="images/products/products-3.jpg" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><a href="">11inch Macbook Air</a></h4>
				<ul class="list-inline product-meta">
					<li class="list-inline-item">
						<a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
					</li>
					<li class="list-inline-item">
						<a href=""><i class="fa fa-calendar"></i>26th December</a>
					</li>
				</ul>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
				<div class="product-ratings">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
				</div>
				
				
			</div>
		</div>
	</section>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact-us-content p-4">
						<h5>Contact Us</h5>
						<h1 class="pt-3">Hello, what's on your mind?</h1>
						<p class="pt-3 pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elit dolor, blandit vel euismod ac, lentesque et dolor. Ut id tempus ipsum.</p>
					</div>
				</div>
				<div class="col-md-6">
						<form method="POST" action="{{route('index')}}">
							@csrf
							<fieldset class="p-4">
								<div class="form-group">
									<div class="row">
										<div class="col-lg-6 py-2">
											<input type="text" placeholder="Name *" name="name" class="form-control" required>
										</div>
										<div class="col-lg-6 pt-2">
											<input type="text" placeholder="Mobile *" name="mobile" class="form-control" required>
										</div>
										<div class="col-lg-12">
												<input type="email" placeholder="Email *" name="email" class="form-control" required>
											</div>
									</div>
									
									
								<textarea name="message" id=""  placeholder="Message *" name="message" class="border w-100 p-3 mt-3 mt-lg-4"></textarea>
								<div class="btn-grounp">
									<button type="submit" class="btn btn-primary mt-2 float-right">SUBMIT</button>
								</div>
							</fieldset>
						</form>
				</div>
			</div>
		</div>
	<!-- contact us end -->
	
	
	<div class="col-md-12">
		<div class="section-title">
			<h2>Reputed Clients</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
		</div>
	</div>


<!-- Container Start -->
<div class="container">
	<div class="row">
		<!-- Client Slider -->
		<div class="col-md-12">
			<!-- Client Slider -->
		<div class="category-slider">
			<!-- Client 01 -->
			<div class="item">
				<a href="#">
					<!-- Slider Image -->
					<img src="images/eicher.png" alt="Eicher">
					
				</a>
			</div>
			<div class="item">
				<a href="#">
					<!-- Slider Image -->
					<img src="images/bp.png" alt="Eicher">

				</a>
			</div>
			<div class="item">
				<a href="#">
					<!-- Slider Image -->
					<img src="images/ioc.jpeg" alt="Eicher">

				</a>
			</div>
			<div class="item">
				<a href="#">
					<!-- Slider Image -->
					<img src="images/reliance2.jpg" alt="Eicher">
				</a>
			</div>
			<div class="item">
				<a href="#">
					<!-- Slider Image -->
					<img src="images/sky.png" alt="Eicher">
				
				</a>
			</div>
			<div class="item">
				<a href="#">
					<!-- Slider Image -->
					<i class="fa fa-film"></i>
					<h4>Gym</h4>
				</a>
			</div>
			<!-- Client 01 -->
			<div class="item">
				<a href="#">
					<!-- Slider Image -->
					<i class="fa fa-paragraph"></i>
					<h4>Park</h4>
				</a>
			</div>
			<div class="item">
				<a href="#">
					<!-- Slider Image -->
					<i class="fa fa-play"></i>
					<h4>Play</h4>
				</a>
			</div>
			<div class="item">
				<a href="#">
					<!-- Slider Image -->
					<i class="fa fa-building"></i>
					<h4>Real Estate</h4>
				</a>
			</div>
			<div class="item">
				<a href="#">
					<!-- Slider Image -->
					<i class="fa fa-shopping-bag"></i>
					<h4>Shopping</h4>
				</a>
			</div>
			<div class="item">
				<a href="#">
					<!-- Slider Image -->
					<i class="fa fa-bed"></i>
					<h4>Electronics</h4>
				</a>
			</div>
			<div class="item">
				<a href="#">
					<!-- Slider Image -->
					<i class="fa fa-bed"></i>
					<h4>Health</h4>
				</a>
			</div>
			
		</div>
		</div>
	</div>
</div>

<!-- Container End -->

@endsection