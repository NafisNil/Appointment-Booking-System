@extends('frontend.layout.master')
@section('title')
    Appointment Page- Connect with Dr.Atiq
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
        
            <section class="about_section">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="about_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                <img width="550" height="550" src="{{(!empty($doctor->logo))?URL::to('storage/'.$doctor->logo):URL::to('image/no_image.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="about_sidebar wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                <div class="about_title">
                                    <h5>ABOUT  {{ $doctor->name }}</h5>
                                </div>
                                <div class="about_desc">
                                    <p><strong>Email :</strong> {{ $doctor->email }}</p>
    <p>&nbsp;</p>
    <p><strong>&nbsp;Designation :</strong> {!! $doctor->designation !!}</p>
    <p>&nbsp;</p>
    <p><strong>&nbsp;Education :</strong> {!! $doctor->education !!}</p>
    <p><strong>&nbsp; &nbsp; Experience </strong> {!! $doctor->experience !!}</p>
 
    <p><strong>Age : &nbsp; </strong> {{ $doctor->age }}</p>
    <p>&nbsp;</p>
    <p>{{ $doctor->type }}</p>
    <p>&nbsp;</p>
    <p>{{ $doctor->phone }}</p>
                                </div>
                                <a href="" class="btn btn-outline-success">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- gaming update section end -->
    
        </div>
        <!-- page wrapper end -->
@endsection
