
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="{{asset("front/img/$contacts->logo")}}" alt=""> </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>{{trans('messages.Newsletter')}}</h4>
                        <p>{{trans('messages.Stay up to date with our latest trends')}}.
                        </p>
                        @include('front.inc.error')
                        <form action="{{url("message/newsletter")}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="submit"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="{{$contacts->facebook}}"><i class="ti-facebook"></i></a>
                            <a href="{{$contacts->twitter}}"><i class="ti-twitter-alt"></i></a>
                            <a href="{{$contacts->insta}}"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>{{trans('messages.Contact us')}}</h4>
                        <div class="contact_info">
                            <p><span> {{trans('messages.Address')}} :</span> {{$contacts->{'city_'.app()->getLocale()}." / ".$contacts->{'address_'.app()->getLocale()} }} </p>
                            <p><span> {{trans('messages.Phone')}} :</span>{{$contacts->phone}}</p>
                            <p><span> {{trans('messages.Email')}} : </span>{{$contacts->email}} </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
{{trans('messages.Copyright')}} &copy;<script>document.write(new Date().getFullYear());</script> {{trans('messages.All rights reserved')}} 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{asset('front/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('front/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('front/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('front/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('front/js/slick.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('front/js/waypoints.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('front/js/custom.js')}}"></script>
</body>

</html>