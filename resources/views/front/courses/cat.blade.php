@extends('front/layout')

@section('content')
 <!-- breadcrumb start-->
 <section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>{{trans('messages.Our Courses')}}</h2>
                        <p>{{trans('messages.Home')}}<span>/</span>{{trans('messages.Courses')}}<span>/</span>{{$categories->{'name_'.app()->getLocale()} }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--course_part start::-->
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>{{trans('messages.Courses')}}</h2>
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
            {{-- pagination --}}
            <div class="d-flex justify-content-center w-100 m-5">
                {{$courses->render()}}    
            </div>  
           
        </div>
    </div>
</section>
<!--course_part end::-->

@endsection