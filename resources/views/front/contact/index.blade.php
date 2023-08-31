@extends('front/layout')

@section('content')

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>{{trans('messages.Contact us')}}</h2>
                        <p>{{trans('messages.Home')}}<span>/<span>{{trans('messages.Contact us')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end-->

<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
<div class="container">
  <div class="d-none d-sm-block mb-5 pb-4">
        {!!$contact->map!!}      
  </div>


  <div class="row">
    <div class="col-12">
      <h2 class="contact-title">{{trans('messages.Get in Touch')}}</h2>
    </div>
    <div class="col-lg-8">
      @include('front.inc.error')
     
      @include('emails.welcome')
      
    </div>
    <div class="col-lg-4">
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-home"></i></span>
        <div class="media-body">
          <h3>{{$contact->{'city_'.app()->getLocale()} }}</h3>
          <p>{{$contact->{'address_'.app()->getLocale()} }}</p>
        </div>
      </div>
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
        <div class="media-body">
          <h3>{{$contact->phone}}</h3>
          <p>{{$contact->work_hours}}</p>
        </div>
      </div>
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-email"></i></span>
        <div class="media-body">
          <h3>{{$contact->email}}</h3>
          <p>{{trans('messages.Send us your query anytime!')}}</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- ================ contact section end ================= -->
@endsection