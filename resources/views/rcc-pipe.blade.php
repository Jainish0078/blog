@extends('layout.master')

@Section('title' , 'Rcc Pipe')

@section('content')

    
    <!--=================================
    =            Single Blog            =
    ==================================-->
    
    
    <section class="blog single-blog section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
                    <article class="single-post">
                        <h2>RCC Pipe</h2>
                        <div class="product-ratings">
                                <ul class="list-inline">
                                    <li class="float-right" class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="float-right" class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="float-right" class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="float-right" class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                   <li class="float-right" class="list-inline-item"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>                       
                            <ul class="list-inline">
                            <li class="list-inline-item">Size: <strong>100 sq.feet</strong></li>
                            <li class="list-inline-item">Thickness: <strong> 60 mm</strong></li>
                        </ul>
                        <img src="images/products/1.jpg" alt="article-01">
                        <p>we produce stunning blocks pavers for drive ways, gardens or any given areas with high quality range of splended paver block products with diffrent colours, best finishing and sizes, we give cost effective paving premium products for gardening, land scaping and other projects.</p> 
                        
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
    
                        <p>Our unit is located in Botad-Bhavnagar Road, Lathidad area is situated at 3 km away from Salangpur (Hanumanji). River Bhogawo as just 40 km away from our unit and shayla is 30 km away which is well-known for stone chips and raw material .</p>
                        <ul class="social-circle-icons list-inline">
                              <li class="list-inline-item text-center"><a class="fa fa-facebook" href="https://www.facebook.com/sharer/sharer.php?u="></a></li>
                              <li class="list-inline-item text-center"><a class="fa fa-twitter" href="https://twitter.com/home?status="></a></li>
                              <li class="list-inline-item text-center"><a class="fa fa-google-plus" href="https://twitter.com/home?status="></a></li>
                              <li class="list-inline-item text-center"><a class="fa fa-pinterest-p" href="https://pinterest.com/pin/create/button/?url=&media=&description="></a></li>
                              <li class="list-inline-item text-center"><a class="fa fa-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source="></a></li>
                          </ul>
                    </article>
                    
                    <div class="block comment">
                            <h4>Reviews</h4>
                            @foreach($reviews as $review)
                            @if($review->is_approved == 1)
                              <li>{{$review->name}} : {{$review->message}}</li>
                             @endif 
                            @endforeach

                            <br>
                            <br>


                        <h4>Leave A Comment</h4>
                        <form method="POST" action="{{route('rccpipe')}}">
                            @csrf
                            <!-- Message -->
                            <div class="form-group mb-30">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" id="message" rows="8"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <!-- Name -->
                                    <div class="form-group mb-30">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <!-- Email -->
                                    <div class="form-group mb-30">
                                        <label for="number">Mobile Number</label>
                                        <input type="text" name="number" class="form-control" id="name">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-transparent">Leave Comment</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
                    <div class="sidebar">
                        <!-- Search Widget -->
                        
                        <!-- Category Widget -->
                        <div class="widget category">
                                <!-- Widget Header -->
                                <h5 class="widget-header">Categories</h5>
                                <ul class="category-list">
                                    <li><a href="{{ asset('bricks')}}">Bricks <span class="float-right"></span></a></li>
                                    <li><a href="{{ asset('rcc-pipe')}}">rcc-pipe <span class="float-right"></span></a></li>
                                    <li><a href="{{ asset('curb-stone')}}">Curb Stone<span class="float-right"></span></a></li>
                                    <li><a href="{{ asset('zigzag-paver')}}">Zig Zag Pavers<span class="float-right"></span></a></li>
                                    <li><a href="{{ asset('cover-block')}}">Cover Block<span class="float-right"></span></a></li>
                                </ul>
                            </div>
                        <!-- Store Widget -->
                        
                        <!-- Archive Widget -->
                        <div class="widget archive">
                            <!-- Widget Header -->
                            <h5 class="widget-header">Contact us</h5>
                            <ul class="archive-list">
                            <p><strong>Address:</strong> 
                                <br>Shree Hari Pavers,
                                <br>Lathidad-Botad Road,
                                <br>To.Lathidad Dist.Botad.
                            </p>
                            <p><strong>Call us on:</strong> 
                                <br>Jagdish Bhuva - <a href="tel:9924773844">9924773844</a>
                                <br> Sanjay Patel - <a href="tel:9924773844">9924773844</a>
                                <br> Nayan  Bhuva - <a href="tel:9904031258">9904031258</a>
                            </p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection