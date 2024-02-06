@extends('frontend.layout.master')
@section('title')
    Confirmation Payment Page- Connect with Dr.Atiq
@endsection

@section('content')
<style>
    label {
    font-weight: 600;
    color: #666;
}
.formbody {
  background: #82bdf5;
}
.box8{
  box-shadow: 0px 0px 5px 1px #2b4149;
}
.mx-t3{
  margin-top: -3rem;
}
</style>
        <!-- breadcrumbs area start -->
        <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="{{asset('frontend')}}/assets/img/bg/bg2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs_text text-center">
                            <h1>Confirmation Appointment</h1>
                            <ul class="d-flex justify-content-center">
                                <li><a href="{{route('index')}}">Home </a></li>
                                <li> <span>//</span></li>
                                <li>Confirmation  Appointment</li>
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
                <div class="container mt-3">

                    <h3>
                        Thanks for connecting with Us. We will contact with you shortly. 
                    </h3>

                  </div>
    
            </section>
            <!-- gaming update section end -->
    
        </div>
        <!-- page wrapper end -->
@endsection
