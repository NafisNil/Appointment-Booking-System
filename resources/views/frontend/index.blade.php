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

            <!-- contact section end -->
    
            <!--contact map start-->
    
            <!--contact map end-->
    
            <!-- gaming update section start -->
            <section class="blog_section mb-90">
                <div class="container">
                    <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s"
                        data-wow-duration="1.1s">
                        <h2> Doctor and Counsellor </h2>
                    </div>
                    <div class="row blog_inner">
                        @foreach ($doctor as $item)

                        <div class="col-lg-6">
                            <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s"
                                data-wow-duration="1.1s">
                                <div class="blog_thumb">
                                    <a href="{{ route('doctor_details', $item->id) }}"><img width="200" height="200"
                                            src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt=""></a>
                                </div>
                                <div class="blog_content">
                                    <div class="blog_date">
                                        <span><i class="icofont-calendar"></i> {{ $item->type }}</span>
                                    </div>
                                    <h3><a href="{{ route('doctor_details', $item->id) }}">{{ $item->name }}</a></h3>
                                    <p>{!! $item->designation !!}</p>
                                    <a href="{{ route('doctor_details', $item->id) }}">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- gaming update section end -->
    
        </div>
        <!-- page wrapper end -->
@endsection
