@extends('frontend.layout.master')
@section('title')
    Home- Connect with Dr.Atiq
@endsection

@section('content')
        <!-- breadcrumbs area start -->
        <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="{{asset('frontend')}}/assets/img/bg/bg2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs_text text-center">
                            <h1>Appointment</h1>
                            <ul class="d-flex justify-content-center">
                                <li><a href="{{route('index')}}">Home </a></li>
                                <li> <span>//</span></li>
                                <li>  Appointment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs area end -->
        <!-- page wrapper start -->
        <div class="page_wrapper">
        
            <!-- contact section start -->
            <section class="contact_page_section mb-140">
                <div class="container">
                    <div class="contact_info_area">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="contact_info_list left wow fadeInUp" data-bgimg="assets/img/others/gaming-world-bg1.webp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                    <div class="contact_info_thumb">
                                        <img width="115" height="115" src="{{asset('frontend')}}/assets/img/icon/email.webp" alt="">
                                    </div>
                                    <div class="contact_info_text">
                                        <h3>Email:</h3>
                                        <p>
                                            <a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a>  <br>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="contact_info_list center wow fadeInUp" data-bgimg="{{asset('frontend')}}/assets/img/others/gaming-world-bg2.webp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                    <div class="contact_info_thumb">
                                        <img width="115" height="115" src="{{asset('frontend')}}/assets/img/icon/location.webp" alt="">
                                    </div>
                                    <div class="contact_info_text">
                                        <h3>Location:</h3>
                                        {!! $contact['address'] !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="contact_info_list right wow fadeInUp" data-bgimg="{{asset('frontend')}}assets/img/others/gaming-world-bg3.webp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                                    <div class="contact_info_thumb">
                                        <img width="115" height="115" src="{{asset('frontend')}}/assets/img/icon/phone.webp" alt="">
                                    </div>
                                    <div class="contact_info_text">
                                        <h3>Phone:</h3>
                                        {!! $contact['phone'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
     
                </div>
            </section>
            <!-- contact section end -->
    
            <!--contact map start-->
            <div class="contact_map mt-70">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.387241065215!2d90.36724760000001!3d23.769220999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0af31da7625%3A0x8c5b4d0cdf3c7ad4!2sThikana%20Psychiatric%20and%20Drug%20addiction%20Clinic!5e0!3m2!1sen!2sbd!4v1694506562295!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               
            </div>
            <!--contact map end-->
    
            <!-- gaming update section start -->
            <section class="gaming_update_section contact_gaming_update">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="gaming_update_inner d-flex justify-content-between align-items-center" data-bgimg="">
                                <div class="gaming_update_text">
                                    <h2>Connect with us <br>
                                      </h2>
                                </div>
                                <div class="gaming_update_btn">
                                    <a class="btn btn-link" href="#">CONNECT NOW <img width="20" height="20" src="{{asset('frontend')}}/assets/img/icon/arrrow-icon.webp" alt=""> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- gaming update section end -->
    
        </div>
        <!-- page wrapper end -->
@endsection
