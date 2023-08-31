@extends('front/layout')
@section('content')
    
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>{{json_decode($banner->{'content_'.app()->getLocale()})->{'subtitle_'.app()->getLocale()} }}</h1>
                            <p>{{json_decode($banner->{'content_'.app()->getLocale()})->{'desc_'.app()->getLocale()} }}</p>
                                <div class="d-flex justifiy-content-end mt-5">
                                    <a href="allcourses" class="btn_1 m-auto">{{trans('messages.View Courses')}}</a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <img src="{{asset('front/img/banner/banner.png')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part mb-5 pb-5">
        <div class="container mb-5 pb-5">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>{{json_decode($awesome->{'content_'.app()->getLocale()})->{'subtitle_'.app()->getLocale()} }}</h2>
                        <p>{{json_decode($awesome->{'content_'.app()->getLocale()})->{'desc_'.app()->getLocale()} }}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>{{json_decode($subtitle1->{'content_'.app()->getLocale()})->{'subtitle_'.app()->getLocale()} }}</h4>
                            <p>{{json_decode($subtitle1->{'content_'.app()->getLocale()})->{'desc_'.app()->getLocale()} }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>{{json_decode($subtitle2->{'content_'.app()->getLocale()})->{'subtitle_'.app()->getLocale()} }}</h4>
                            <p>{{json_decode($subtitle2->{'content_'.app()->getLocale()})->{'desc_'.app()->getLocale()} }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>{{json_decode($subtitle3->{'content_'.app()->getLocale()})->{'subtitle_'.app()->getLocale()} }}</h4>
                            <p>{{json_decode($subtitle3->{'content_'.app()->getLocale()})->{'desc_'.app()->getLocale()} }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_img">
                        <img src="{{asset('front/img/learning_img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h2>{{json_decode($about->{'content_'.app()->getLocale()})->{'title_'.app()->getLocale()} }}</h5>
                        <p>{{json_decode($about->{'content_'.app()->getLocale()})->{'desc_'.app()->getLocale()} }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$course_count}}</span>
                        <h4>{{trans('messages.Courses')}}</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$trainer_count}}</span>
                        <h4> {{trans('messages.Trainers')}}</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$student_count}}</span>
                        <h4>{{trans('messages.Students')}}</h4>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

<!--course_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>{{json_decode($diffrentCources->{'content_'.app()->getLocale()})->{'subtitle_'.app()->getLocale()} }}</p>
                        <h2>{{json_decode($diffrentCources->{'content_'.app()->getLocale()})->{'desc_'.app()->getLocale()} }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{asset("front/img/courses/$course->image")}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="{{route("front.category",$course->category->id)}}" class="btn_4">{{$course->category->name}}</a>
                            <h4>${{$course->price}}</h4>
                            <a href="{{route("front.courseDetails",[$course->category->id,$course->id])}}"><h3>{{$course->name}}</h3></a>
                            <p>{{$course->{'smallDesc_'.app()->getLocale()} }}</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="{{asset("front/img/trainers/")}}/{{$course->trainer->image}}" alt="">
                                    <div class="author_info_text">
                                        <p>{{trans('messages.Conduct by')}}:</p>
                                        <h5><a href="#">{{$course->trainer->{'name_'.app()->getLocale()} }}</a></h5>
                                    </div>
                                </div>
                                {{-- <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div> --}}
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
               
               
            </div>
        </div>
    </section>
    <!--course_part end::-->

    <!-- learning part start-->
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        {{-- <h5>{{json_decode($advance->{'content_'.app()->getLocale()})->{'title_'.app()->getLocale()} }}</h5> --}}
                        {{-- <h2>{{json_decode($advance->{'content_'.app()->getLocale()})->{'subtitle_'.app()->getLocale()} }}</h2> --}}
                        {{-- <p>{{json_decode($advance->{'content_'.app()->getLocale()})->{'desc_'.app()->getLocale()} }}</p> --}}
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4>{{json_decode($advance1->{'content_'.app()->getLocale()})->{'subtitle_'.app()->getLocale()} }}</h4>
                                    <p class="learning_p">{{json_decode($advance1->{'content_'.app()->getLocale()})->{'desc_'.app()->getLocale()} }}</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-stamp"></span>
                                    <h4>{{json_decode($advance2->{'content_'.app()->getLocale()})->{'subtitle_'.app()->getLocale()} }}</h4>
                                    <p class="learning_p">{{json_decode($advance2->{'content_'.app()->getLocale()})->{'desc_'.app()->getLocale()} }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="{{asset('front/img//advance_feature_img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!--::review_part start::-->
    <section class="testimonial_part my-5 pt-5">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>{{json_decode($testominial->{'content_'.app()->getLocale()})->{'title_'.app()->getLocale()} }}</h2>
                        {{-- <h2>{{json_decode($testominial->{'content_'.app()->getLocale()})->{'subtitle_'.app()->getLocale()} }}</h2> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        @foreach ($tests as $test)
                        <div class="testimonial_slider">
                            <div class="row d-flex justify-content-center ms-5">
                                <div class="col-lg-10 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>{{$test->{'desc_'.app()->getLocale()} }}</p>
                                        <h4>{{$test->{'name_'.app()->getLocale()} }}</h4>
                                        @if ($test->{'spec_'.app()->getLocale()} != null)
                                        <h5> {{$test->{'spec_'.app()->getLocale()} }} </h5>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img mt-5">
                                        <img src="{{asset("front/img/tests/")}}/{{$test->image}}" alt="">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        @endforeach    
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::review_part end::-->

 

@endsection
