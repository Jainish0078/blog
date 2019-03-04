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
		<br>
		<br>
	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Products</h2>
						<p>Shree Hari Pavers is a reliable manufacturer, supplier and exporter of Pipe & Paver Blocks.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- offer 01 -->
						<div class="col-lg-12">
								<div class="trending-ads-slide">
									
									<div class="col-sm-12 col-lg-4">
										
										<!-- product card -->
										<div class="product-item bg-light">
											<div class="card">
												<div class="thumb-content">
													<!-- <div class="price">$200</div> -->
													<a href="{{ asset('square')}}">
														<img class="card-img-top img-fluid" src="{{ asset('images/products/products-1.jpg')}}" alt="square">
													</a>
												</div>
												<div class="card-body">
													<h4 class="card-title"><a href="">Square Block</a></h4>
													<ul class="list-inline product-meta">
														<li class="list-inline-item">
															<a href=""><i class="fa fa-folder-open-o"></i>60 MM</a>
														</li>
													</ul>
													<p class="card-text">Use : Parking, Party Plot, Societies, etc.</p>
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
														<a href="{{ asset('cover-block')}}">
															<img class="card-img-top img-fluid" src="{{ asset('images/products/2.jpg')}}" alt="Card image cap">
														</a>
													</div>
													<div class="card-body">
														<h4 class="card-title"><a href="">Cover Block</a></h4>
														<ul class="list-inline product-meta">
															<li class="list-inline-item">
																<a href=""><i class="fa fa-folder-open-o"></i>Size: 20,25,40,45 mm</a>
															</li>
														</ul>
														<p class="card-text">Use : When you built your terrace</p>
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
															<a href="{{ asset('rubber-mold-pavers')}}">
																<img class="card-img-top img-fluid" src="{{ asset('images/products/products-2.jpg')}}" alt="Card image cap">
															</a>
														</div>
														<div class="card-body">
															<h4 class="card-title"><a href="">Rubbuer Mold Pavers</a></h4>
															<ul class="list-inline product-meta">
																<li class="list-inline-item">
																	<a href=""><i class="fa fa-folder-open-o"></i>Size: 20,25,40,45 mm</a>
																</li>
															</ul>
															<p class="card-text">Use : Footpath, Societies, Bunglows </p>
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
														<a href="{{ asset('rcc-pipe')}}">
															<img class="card-img-top img-fluid" src="{{ asset('images/products/6.jpg')}}" alt="Card image cap">
														</a>
													</div>
													<div class="card-body">
														<h4 class="card-title"><a href="">RCC Pipe</a></h4>
														<ul class="list-inline product-meta">
															<li class="list-inline-item">
																<a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
															</li>
	
														</ul>
														<p class="card-text">Use : in Sewerage, in PipeLine and everthing.</p>
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
			</div>
		</div>
	</section>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact-us-content p-4">
						<h5>Contact Us</h5>
						<h1 class="pt-3">Send your Mobile number</h1>
						<p class="pt-3 pb-5">Enter your Contact number here, our Sales represantative will contact you as soon as possible.</p>
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
										<div class="col-lg-6 py-2">
											<input type="text" placeholder="Mobile *" name="mobile" class="form-control" required>
										</div>
										<div class="col-lg-12 py-2">
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

@endsection