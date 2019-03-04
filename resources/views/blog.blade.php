@extends('layout.master')

@Section('title' , 'Blog')

@section('content')

<!--==================================
=            Blog Section            =
===================================-->

<section class="blog section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Article 01 -->
				<article>
	<!-- Post Image -->
	<div class="image">
		<img src="{{ asset('images/products/1.jpg')}}" alt="article-01">
	</div>
	<!-- Post Title -->
	<h3>Buy Paver Block and Cover Block to decorate your home</h3>
	<ul class="list-inline">
		<li class="list-inline-item">by :- Author</li>
		
	</ul>
	<!-- Post Description -->
	<p class="">Buy Paver Block and Cover Block to decorate your home</p>
	<!-- Read more button -->
	<a href="{{asset('')}}" class="btn btn-transparent">Read More</a>
</article>
</div>
@include('layout.sidebar')

</div>
</div>
</section>
@endsection