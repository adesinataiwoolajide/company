@extends('layouts.app')

@section('content')
<section class="breadcrumb_area breadcrumb2 bgimage biz_overlay">
    <div class="bg_image_holder">
        <img src="{{asset('website/img/slider_1.png')}}" alt="">
    </div>
    <div class="container content_above">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                    <h4 class="page_title">Our Clients Products</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-bottom-30">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div><!-- ends: .row -->
    </div>
</section><!-- ends: .breadcrumb_area -->

<section class="content-block content--block5 p-top-110 p-bottom-110">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 margin-md-60">
                <img src="{{asset('website/img/about.png')}}" alt="">
            </div><!-- ends: .col-lg-6 -->
            <div class="col-lg-5 offset-lg-1">
                <h2>Serving Clients Around the World</h2>
                <p>Investiga tiones demonstr averunt lectres legere me lius quod ii qua legunt saepius. Clarias est etiam pro cessus dynamicus, qui sequitur mutaety tionem consu etudium. Investig ationes demons trave runt lectores.</p>
            </div>
        </div>
    </div>
</section><!-- ends: .content-block -->

<section class="p-top-90 section-bg">

<section class="grid-wrapper logo-details-wrapper section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">

                <div class="grid-single logo-details text-center">
                    <div class="logo">
                        <img src="{{asset('website/img/cl9.png')}}" alt="">
                    </div>
                    <h5>ABeam Consulting</h5>
                    <span class="sub-title color-secondary">www.abeam.com</span>
                    <p>Investig ationes demons travge vunt lectores legere lyrus quodk legunt lectores legere quodk.</p>
                </div><!-- end: .grid-single -->

            </div><!-- ends: .col-lg-4 -->
            <div class="col-lg-4 col-md-6">

                <div class="grid-single logo-details text-center">
                    <div class="logo">
                        <img src="{{asset('website/img/cl12.png')}}" alt="">
                    </div>
                    <h5>Groupo ASSA</h5>
                    <span class="sub-title color-secondary">www.grupoassa.com</span>
                    <p>Investig ationes demons travge vunt lectores legere lyrus quodk legunt lectores legere quodk.</p>
                </div><!-- end: .grid-single -->

            </div><!-- ends: .col-lg-4 -->
            <div class="col-lg-4 col-md-6">

                <div class="grid-single logo-details text-center">
                    <div class="logo">
                        <img src="{{asset('website/img/cl13.png')}}" alt="">
                    </div>
                    <h5>West Monore Partners</h5>
                    <span class="sub-title color-secondary">www.arete.com.tr</span>
                    <p>Investig ationes demons travge vunt lectores legere lyrus quodk legunt lectores legere quodk.</p>
                </div><!-- end: .grid-single -->



            </div><!-- ends: .col-lg-4 -->
        </div><!-- ends: .row -->
    </div><!-- ends: .container -->
</section><!-- ends: .grid-wrapper -->

</section><!-- ends: section -->


<section class="cta-wrapper-sm cta--seven bgimage biz_overlay overlay--secondary">
    <div class="bg_image_holder">
        <img src="img/cta3.png" alt="">
    </div>
    <div class="container content_above">
        <div class="row d-flex align-items-center">
            <div class="col-lg-9">
                <p class="m-0 color-light">Are you ready to start your business?</p>
            </div>
            <div class="col-lg-3">
                <div class="action-btn">
                    <a href="#" class="btn btn-light">Get a quote</a>
                </div>
            </div>
        </div><!-- .row -->
    </div>
</section><!-- ends: .cta-wrapper-sm -->



@endsection
