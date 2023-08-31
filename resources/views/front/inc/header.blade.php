<!doctype html>
<html lang="en" dir="{{trans('messages.dir')}}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" text-align="{{trans('messages.text_align')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$contacts->name}}</title>
    <link rel="icon" href="{{asset("front/img/$contacts->favicon")}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('front/css/slick.css')}}">
    <!-- style CSS -->
    @if (session('lang')=='ar')
    <link rel="stylesheet" href="{{asset('front/css/stylear.css')}}">  
    @else
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    @endif
</head>

<body>
    <!--::header part start::-->
    {{-- <header class="main_menu @if(Route::currentRouteName() == 'front.home') home_menu @else single_page_menu @endif"> --}}
        <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{url("/")}}"> <img src="{{asset("front/img/$contacts->logo")}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href={{url("/")}}>{{trans('messages.Home')}}</a>
                                </li>
                              
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{trans('messages.Courses')}}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($cats as $cat)
                                        <a class="dropdown-item" href="{{route('front.category',$cat->id)}}">{{$cat->{'name_'.app()->getLocale()} }}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route("front.contact")}}">{{trans('messages.Contact')}}</a>
                                </li>
                                
                                {{-- <li class="nav-item dropdown">
                                    <a href="" class="nav-link dropdown-toggle">{{LaravelLocalization::getCurrentLocaleNative()}}</a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                              
                            @endforeach
                                </div>
                                
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="{{route("admin.dashboard.login")}}">{{trans('messages.Dashboard')}}</a>
                                  </li>

                                 <li class="nav-item">
                                    <a class="nav-link" href="change/en">English</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="change/ar">اللغة العربية</a>
                                </li>
                               
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="{{url('quote')}}">{{trans('messages.Get A Quote')}}</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
