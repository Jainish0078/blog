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
                        <img src="{{ asset('images/products/5.JPG')}}" alt="article-01">
                        <p>we produce stunning blocks pavers for drive ways, gardens or any given areas with high quality range of splended paver block products with diffrent colours, best finishing and sizes, we give cost effective paving premium products for gardening, land scaping and other projects.</p> 
                        
                        <p>We are Manufacturer of Paver Block, Interlocking Paver Block, Concrete Paver Block, Parking Tile, Rubber Moulded Paver Block, And Hallow Brick</p>
    
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
                @include('layout.sidebar')
            </div>
        </div>
    </section>
@endsection