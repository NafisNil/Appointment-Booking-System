@extends('frontend.layout.master')
@section('title')
    Appointment Page- Connect with Dr.Atiq
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
                <div class="container mt-3">

                    <form class="formbody mt-5 p-5" method="POST" action="{{ route('appointment_info_store') }}">
                        @if (session('error'))
                        <div class="col-sm-12">
                            <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                        </div>
                         @endif
                        @csrf
                      <div class="row jumbotron box8 p-5">
                        <div class="col-sm-12 mx-t3 mb-4">
                          <h2 class="text-center " style="color: rgb(0, 70, 47)">Patient Information</h2>
                        </div>
                        <div class="col-sm-6 form-group">
                          <label for="name-f"> Name</label>
                          <input type="text" class="form-control" name="name" id="name-f" placeholder="Enter your  name." required>
                        </div>
             
                        <div class="col-sm-6 form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
                        </div>
                        <div class="col-sm-6 form-group">
                          <label for="email">Phone</label>
                          <input type="text" class="form-control" name="phone" id="" placeholder="Enter your phone." required>
                        </div>
                        <div class="col-sm-6 form-group">
                          <label for="address-1">Address </label>
                          <textarea name="address" id="" cols="30" rows="5" class="form-control" required></textarea>
                      
                        </div>
           
                        <div class="col-sm-6 form-group">
                          <label for="Date">Date Of Birth</label>
                          <input type="Date" name="age" class="form-control" id="Date" placeholder="" required>
                        </div>
                        <div class="col-sm-6 form-group mt-2">
                          <label for="sex">&nbsp;Gender</label>
                          <select id="sex" class="form-control browser-default custom-select" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="unspesified">Unspecified</option>
                          </select>
                        </div>

                        <div class="col-sm-6 form-group mt-2">
                            <label for="sex">&nbsp;Package</label>
                            <select id="" class="form-control browser-default custom-select" name="package_id">
                                @foreach ($package as $item)
                                <option value="{{ $item->id }}">  {{ $item->name }} - {{ $item->amount }}BDT &nbsp; <a href="#">Details</a></option>
                                @endforeach
                             

                            </select>
                          </div>

                          <div class="col-sm-6 form-group mt-2">
                            <label for="sex">&nbsp;Slot</label>
                            <select id="" class="form-control browser-default custom-select" name="slot_id">
                                @foreach ($slot as $item)
                                @php
                                    if ($item->day == '1') {
                                        $day = 'Sunday';
                                    } elseif($item->day == '2') {
                                        $day = 'Monday';
                                    } elseif($item->day == '3') {
                                        $day = 'Tuesday';
                                    } elseif($item->day == '4') {
                                        $day = 'Wednesday';
                                    } elseif($item->day == '5') {
                                        $day = 'Thursday';
                                    } elseif($item->day == '6') {
                                        $day = 'Friday';
                                    } elseif($item->day == '7') {
                                        $day = 'Saturday';
                                    }
                                    
                                @endphp
                                <option value="{{ $item->id }}">  {{ $day }} - {{ $item->time }} </option>
                                @endforeach
                             

                            </select>
                          </div>
                        <input type="hidden" name="doctor_id" value="{{ $doctor_id }}">
                    
                        <div class="col-sm-12 form-group mb-0 p-5">
                          <button class="btn btn-primary float-right" type="submit">Submit</button>
                        </div>
                  
                      </div>
                    </form>
                  </div>
    
            </section>
            <!-- gaming update section end -->
    
        </div>
        <!-- page wrapper end -->
@endsection
