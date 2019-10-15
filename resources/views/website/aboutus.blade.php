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
                        <h4 class="page_title">About Us</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-bottom-30">
                                <li class="breadcrumb-item"><a href="{{route('website.index')}}">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ABOUT US</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div><!-- ends: .row -->
        </div>
    </section>

    <section class="about-links">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="d-flex justify-content-center">
                        <li><a href="about-two.html" class="active">About Us</a></li>
                        <li><a href="history.html">Our History</a></li>
                        <li><a href="our-values.html">Our Values</a></li>
                        <li><a href="business-conduct.html">Business Conduct</a></li>
                        <li><a href="our-clients.html">Our Clients</a></li>
                        <li><a href="our-locations.html">Our Locations</a></li>
                        <li><a href="success-story.html">Success Story</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 margin-md-60">
                    <div class="m-bottom-35">

                        <div class="divider divider-simple text-left">
                            <h2 class="m-bottom-20">Company Overview</h2>
                        </div>

                    </div>
                    <p>Investiga tiones demonstr averunt lectores legere me lius quod ii qua legunt saepius. Claritas
                        est etiam pro cessus dynamicus, qui sequitur mutaety tion em consu etudium awquod he legunt
                        saepius clary tyitas Investig atifonesw. tionem consu etudium.<br> Investig ationes demons trave
                        runt lectores legere liusry awquod he legunt saepius clary tyitas Investig atifonesw.</p>
                    <button type="button" class="btn btn-secondary btn-icon icon-left m-top-30"><i
                                class="la la-file"></i> Company Brochure
                    </button>
                </div><!-- ends: .col-lg-5 -->
                <div class="col-lg-6 offset-lg-1">

                    <div class="video-single">
                        <figure>
                            <div class="v_img">
                                <img src="{{asset('website/img/simg-2.jpg')}}" alt="" class="rounded">
                            </div>
                            <figcaption class="d-flex justify-content-center align-items-center shape-wrapper img-shape-two">
                                <a href="https://www.youtube.com/watch?v=omaTcIbwt9c" class="video-iframe play-btn play-btn--lg play-btn--primary"><img src="img/svg/play-btn.svg" alt="" class="svg"></a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .video-single -->

                </div><!-- ends: .col-lg-6 -->
            </div><!-- ends: .row -->
        </div>
    </section><!-- ends: section -->


    <div class="counter counter--7 biz_overlay overlay--primary">
        <div class="bg_image_holder"><img src="{{asset('website/img/cbg5.jpg')}}" alt=""></div>
        <div class="container content_above">
            <div class="row align-items-center">
                <div class="col-md-5 margin-md-60">
                    <div class="counter_left_content">
                        <h4>Key Figures</h4>
                        <p>Investiga tiones demonstr averunt lectres legere me lius quod ii qua legunt saepius. Clarias
                            est
                            etiam pro cessus dynamicus, qui sequitur mutaety tionem consu etudium
                            Investig ationes demons trave.</p>
                    </div>
                </div>

                <div class="col-md-6 offset-md-1">
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="counter_single">

                                <p class="value count_up">520</p>
                                <p class="title">USD Revenue</p>
                            </div><!-- end: .counter_single -->

                        </div>
                        <div class="col-sm-6">

                            <div class="counter_single">

                                <p class="value count_up">478</p>
                                <p class="title">USD Assets</p>
                            </div><!-- end: .counter_single -->

                        </div>
                        <div class="col-sm-6">

                            <div class="counter_single">

                                <p class="value count_up">980</p>
                                <p class="title">Employees</p>
                            </div><!-- end: .counter_single -->

                        </div>
                        <div class="col-sm-6">

                            <div class="counter_single">

                                <p class="value count_up">257</p>
                                <p class="title">USD Net Income</p>
                            </div><!-- end: .counter_single -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="p-top-100 p-bottom-40">
        <div class="m-bottom-55">

            <div class="divider text-center m-bottom-50">
                <h2 class="color-dark m-0">Why Choose Us</h2>
            </div>

        </div>

        <div class="icon-boxes icon-box--six">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">

                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-square-sm"><i class="la la-thumbs-up"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Valuable Ideas</h6>
                                <p>Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->

                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">

                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-square-sm"><i class="la la-bar-chart"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Industry Experience</h6>
                                <p>Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->

                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">

                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-square-sm"><i class="la la-money"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Budget Friendly</h6>
                                <p>Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->

                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">

                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-square-sm"><i class="la la-pencil-square"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Investment Planning</h6>
                                <p>Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->

                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">

                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-square-sm"><i class="la la-level-up"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Business Growth</h6>
                                <p>Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->

                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">

                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-square-sm"><i class="la la-lightbulb-o"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Financial Planning</h6>
                                <p>Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->

                    </div><!-- ends: .col-lg-4 -->
                </div><!-- ends: .row -->
            </div>
        </div><!-- ends: .icon-boxes -->

    </section>
@endsection
