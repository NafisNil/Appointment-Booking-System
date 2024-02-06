@extends('frontend.layout.master')
@section('title')
    Payment Page- Connect with Dr.Atiq
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
                            <h1>Payment</h1>
                            <ul class="d-flex justify-content-center">
                                <li><a href="{{route('index')}}">Home </a></li>
                                <li> <span>//</span></li>
                                <li>  Payment</li>
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

                    <form class="formbody mt-5 p-5" method="POST" action="{{ route('payment_info_store') }}">
                        @csrf
                        <p>After payment, enter your transaction id</p>
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
                          <h2 class="text-center " style="color: rgb(0, 70, 47)">Payment Information</h2>
                        </div>
                        @php
                            $payment = App\Models\Payment::all();
                        @endphp
                        <div class="col-sm-6 form-group mt-2">
                            <label for="sex">&nbsp;Payment Methodology</label>
                            <select id="" class="form-control browser-default custom-select" name="payment_id" required>
                                @foreach ($payment as $item)
                                <option value="{{ $item->id }}">  {{ $item->method }} - {!! $item->description !!}</option>
                                @endforeach
                             
                                <input type="hidden" name="appointment_id" value="{{ Session::get('appointment')}}">
                                <input type="hidden" name="patient_id" value="{{ Session::get('patient')}}">
                            </select>
                          </div>

                        <div class="col-sm-6 form-group">
                          <label for="name-f"> Trx ID</label>
                          <input type="text" class="form-control" name="trx_id" id="name-f" placeholder="Enter transaction id" required>
                        </div>
             

                  
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
