@extends('frontSite.layouts.master')
@section('page_title')
    Home page
@endsection

@section('cssCode')

@endsection

@section('jsCode')
    <script>
        //alert('Welcome to home');
    </script>
@endsection

@section('content')
    <!-- slider -->
    <section class="slider_section">
        <div class="container-fluid">
            <div class="row">
                <div id="main_slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                    <div class="carousel-inner">
                        <div class="carousel-item slider_inner slider1 active">
                            <div class="container">
                                <div class="row">
                                    <div class="slider_coint_inner">
                                        <h3>Best<br><strong>New Collection</strong></h3>
                                        <h4 class="font_themecolor">Loxury Jewellery</h4>
                                        <p>Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felis<br>
                                            lacinia nec et est aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item slider_inner slider2">
                            <div class="container">
                                <div class="row">
                                    <div class="slider_coint_inner">
                                        <h3>Best<br><strong>New Collection</strong></h3>
                                        <h4 class="font_themecolor">Loxury Jewellery</h4>
                                        <p>Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felis<br>
                                            lacinia nec et est aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider_bullets">
                            <ol class="carousel-indicators">
                                <li data-target="#main_slider" data-slide-to="0" class="active"><i class="fa fa-chevron-left"></i></li>
                                <li data-target="#main_slider" data-slide-to="1"><i class="fa fa-chevron-right"></i></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider -->
    <!-- about section -->
    <section class="layout_padding section padding_bottom_0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="full heading_s1">
                        <h2>About</h2>
                    </div>
                    <div class="full">
                        <p class="large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="about_img margin_top_30  text_align_center">
                        <img src="images/video_img.jpg" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- section -->
    <section class="layout_padding padding_bottom_0" style="background: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="full heading_s1">
                        <h2>Jewellery</h2>
                    </div>
                    <div class="full">
                        <p class="large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                    </div>
                </div>
            </div>
            <div class="row product_section">
                <div class="col-md-4">
                    <div class="full product_blog margin_top_30">
                        <img src="images/pro1.jpg" alt="#" />
                        <h3><span style="color: #72dd78 !important;">$100</span> Diamond ring</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full product_blog margin_top_30">
                        <img src="images/pro2.jpg" alt="#" />
                        <h3><span style="color: #72dd78 !important;">$100</span> Diamond ring</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full product_blog margin_top_30">
                        <img src="images/pro3.jpg" alt="#" />
                        <h3><span style="color: #72dd78 !important;">$100</span> Diamond ring</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full product_blog margin_top_30">
                        <img src="images/pro3.jpg" alt="#" />
                        <h3><span style="color: #72dd78 !important;">$100</span> Diamond ring</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full product_blog margin_top_30">
                        <img src="images/pro4.jpg" alt="#" />
                        <h3><span style="color: #72dd78 !important;">$100</span> Diamond ring</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full product_blog margin_top_30">
                        <img src="images/pro5.jpg" alt="#" />
                        <h3><span style="color: #72dd78 !important;">$100</span> Diamond ring</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- section -->
    <section class="layout_padding section padding_bottom_0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="full heading_s1">
                        <h2>Our Shop</h2>
                    </div>
                    <div class="full">
                        <p class="large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- section -->
    <section class="layout_padding haf_layout section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11">
                    <div class="row">
                        <div class="container">
                            <div class="col-md-8">
                                <div class="full banner_section">
                                    <h3>Best <span style="color: #72dd78 !important;">Jewellery Shop</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="img-responsive" src="images/bg1.jpg" alt="#" />
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- section -->
    <section class="layout_padding section padding_bottom_0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="full text_align_center heading_s1">
                        <h2 style="width: 100%;text-align: center;">Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact_section margin_top_30">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gold_con">
                                    <img src="images/gold_c.png" alt="#" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_cont">
                                    <form action="index.html">
                                        <fieldset>
                                            <div class="field">
                                                <input type="text" name="name" placeholder="Name" />
                                            </div>
                                            <div class="field">
                                                <input type="email" name="email" placeholder="Email" />
                                            </div>
                                            <div class="field">
                                                <input type="text" name="phone" placeholder="Phone" />
                                            </div>
                                            <div class="field">
                                                <textarea placeholder="Message" ></textarea>
                                            </div>
                                            <div class="field center">
                                                <button>Send</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
