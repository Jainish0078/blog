@extends('layout.master')

@section('title', 'About us')

@section('content')

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('images/team/1.jpg')}}" class="img-fluid w-100 rounded" alt="shree hari pavers team">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <div class="about-content">
                    <h3 class="font-weight-bold">Introduction</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor
                        fermentum, commodo et libero. Quisque et rutrum arcu. Vivamus dictum tincidunt magna id
                        euismod. Nam sollicitudin mi quis orci lobortis feugiat.</p>
                    <h3 class="font-weight-bold">How we can help</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor
                        fermentum, commodo et libero. Quisque et rutrum arcu. Vivamus dictum tincidunt magna id
                        euismod. Nam sollicitudin mi quis orci lobortis feugiat. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero.
                        Quisque et rutrum arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est
                        justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu. Vivamus dictum
                        tincidunt magna id euismod. Nam sollicitudin mi quis orci lobortis feugiat.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading text-center text-capitalize font-weight-bold py-5">
                    <h2>our team</h2>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="{{ asset('images/team/4.jpg')}}" class="img-fluid w-100" alt="nayan bhuva">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">Nayan Bhuva</h5>
                        <p class="card-text">Founder / CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="{{ asset('images/team/4.jpg')}}" class="img-fluid w-100" alt="">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Founder / CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="{{ asset('images/team/4.jpg')}}" class="img-fluid w-100" alt="">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Founder / CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="{{ asset('images/team/4.jpg')}}" class="img-fluid w-100" alt="">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Founder / CEO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection