<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="Shree Hari Pavers, Lathidad, Rubber Mould Paverblock, Coverblock, Curbstone, Botad, Paver Block, Blocks, Surat">
  <meta name="description" content="Lathidad Shree Hari Pavers are Biggest Manufacturer of Paver Block in Surat. We are having 3 years experience in this field. Shree Hari Pavers is a reliable manufacturer, supplier and exporter of Paver Blocks.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') | Shree Hari Pavers</title>
  
  
  <!-- FAVICON -->
  <link href="{{imges/favicon.png}}" rel="shortcut icon">
  
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap-slider.css')}}">
  <link rel="stylesheet" href="{{ asset('//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}">
  
  <!-- Font Awesome -->
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  
  <!-- Owl Carousel -->
  <link href="{{ asset('plugins/slick-carousel/slick/slick.css')}}" rel="stylesheet">
  <link href="{{ asset('plugins/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet">
  
  <!-- Fancy Box -->
  <link href="{{ asset('plugins/fancybox/jquery.fancybox.pack.css')}}" rel="stylesheet">
  <link href="{{ asset('plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
  
  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="body-wrapper">

<section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light navigation">
            <a class="navbar-brand" href="index">
              <img src="{{ asset('images/logo2.png')}}" alt="">Shree Hari Pavers
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto main-nav ">
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('rubber-mold-pavers')}}">Rubber Mold Block</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('curb-stone')}}">Curb Stone</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ asset('rcc-pipe')}}">RCC Pipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('cover-block')}}">Cover Block</a>
                      </li>
              </ul>
              {{-- <ul class="navbar-nav ml-auto mt-10">
                <!-- Login -->
                @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  
                @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          Jainish Bhuva<span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
                @endguest --}}
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>