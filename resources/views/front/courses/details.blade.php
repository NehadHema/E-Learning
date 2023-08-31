@extends('front/layout')

@section('content')
     <!-- breadcrumb start-->
     <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>{{trans('messages.Course Details')}}</h2>
                            <p>{{trans('messages.Home')}}<span>/</span>{{$courses->category->{'name_'.app()->getLocale()} }}<span>/</span>{{$courses->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{asset("front/img/courses/$courses->image")}}" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">{{trans('messages.Objectives')}}</h4>
                        <div class="content">
                           {{$courses->{'desc_'.app()->getLocale()} }}
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>{{trans('messages.Trainer’s Name')}}</p>
                                    <span class="color">{{$courses->trainer->{'name_'.app()->getLocale()} }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>{{trans('messages.Course Fee')}}</p>
                                    <span>${{$courses->price}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="container mt-5">
                        @include('front.inc.error')
                        <form class="form-contact contact_form" action="{{route("front.message.enroll")}}" method="post" id="contactForm" novalidate="novalidate">
                          @csrf
                          <input type="hidden" name="course_id" value="{{$courses->id}}">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <input class="form-control" name="spec" id="spec" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter specility'" placeholder = 'Enter specility'>
                              </div>
                            </div>
                          </div>
                          <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_1">{{trans('messages.Enroll')}}</button>
                          </div>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->

@endsection