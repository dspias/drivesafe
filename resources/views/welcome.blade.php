@extends('layouts.withnav')

@section('title', '| welcome to drive safe')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fire-css/assets/table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uea/swiper.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/uea/main.css') }}">

    <link rel="stylesheet" href="{{ asset('css/uea/style.css') }}">
    
@endsection

@section('content')

	<!-- ======================= welcome is here =========================== -->
	<!--start Preloader-->
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell align-middle">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</div>
<!--end Preloader-->

<!--Header-->
<header id="intro-header">
    <div class="main-header">
        <div class="banner-bg">
              
            <!-- Start  header-slider-->
            <div class="container">
                <div class="header-slider owl-carousel owl-theme single-dots">
                    <!-- Start  Item-->
                    <div class="item">
                        <div class="row sliderarea">
                            <div class="col-md-6 pt-40">
                                <div class="slider-head">
                                  
                                    <h1>Drive Safe</h1>
                                    <p class="discript-head">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 pt-40">
                                <!-- <div class="sliderimg">
                                    <img class="img-fluid"  src="images/slider-mockup-1.png" alt="#">
                                </div> -->
                                <!-- Start  keyframes-->
                                <div class="envoy-waves">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                    <div class="waves wave-4"></div>
                                </div>
                                <!-- End  keyframes-->
                            </div>
                        </div>
                    </div>
                    <!-- End  Item-->
                    <!-- Start  Item-->
                    <div class="item">
                        <div class="row sliderarea">
                            <div class="col-md-6 pt-40">
                                <div class="slider-head">
                                  
                                    <h1>Drive Safe</h1>
                                    <p class="discript-head">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                                  
                                </div>
                            </div>
                            <div class="col-md-6 pt-40">
                                <!-- <div class="sliderimg">
                                    <img  class="img-fluid"  src="images/slider-mockup-2.png" alt="#">
                                </div> -->
                                <!-- Start  keyframes-->
                                <div class="envoy-waves">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                    <div class="waves wave-4"></div>
                                </div>
                                <!-- End  keyframes-->
                            </div>
							
                        </div>
                    </div>
                    <!-- End  Item-->
                    <!-- Start  Item-->
                    <div class="item">
                        <div class="row sliderarea">
                            <div class="col-md-6 pt-40">
                                <div class="slider-head">
                                    
                                    <h1>Drive Safe</h1>
                                    <p class="discript-head">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                               
                                </div>
                            </div>
                            <div class="col-md-6 pt-40">
                                <!-- <div class="sliderimg">
                                    <img  class="img-fluid"  src="images/slider-mockup-1.png" alt="#">
                                </div> -->
                                <!-- Start  keyframes-->
                                <div class="envoy-waves">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                    <div class="waves wave-4"></div>
                                </div>
                                <!-- End  keyframes-->
                            </div>
                        </div>
                    </div>
                    <!-- End  Item-->
                </div>
            </div>
            <!-- End  Header-slider-->
        </div>
    </div>
</header><!-- End header-section-->

<!-- Features -->
<section id="feature-section" class="feature section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 feature-item">

                <div class="feature-dateils text-center">
                    <h2>Donec quamd</h2>
                    <p>iis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies n</p>
                </div>
            </div>
            <div class="col-md-4 feature-item">

                <div class="feature-dateils text-center">
                    <h2>Donec quam</h2>
                    <p>iis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies n</p>
                </div>
            </div>
            <div class="col-md-4 feature-item">

                <div class="feature-dateils text-center">
                    <h2>Donec quam</h2>
                    <p>iis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies n</p>
                </div>
            </div>
        </div>
    </div>
</section> <!-- End Feature -->

	<!-- ======================== welcome is here ============================ -->

@endsection

@section('scripts')
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/uea/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/uea/swiper.min.js') }}"></script>
<script src="{{ asset('js/uea/main.js') }}"></script>
@endsection


