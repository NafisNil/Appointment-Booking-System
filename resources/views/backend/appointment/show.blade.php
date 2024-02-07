@extends('backend.layout.master')
@section('title')
   Appointment - Create
@endsection
@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Appointment Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Appointment Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
        
  @php
      $patient = App\Models\User::where('id', $appointment->patient_id)->first();
  @endphp
  <p class="text-muted text-center"> <span > <b>Doctor Name : </b></span>  {{$appointment->user->name}}</p>
  <hr>
                  <h3 class="profile-username text-center"> <span> <b>Patient Name : </b> </span>{{$patient->name  }}</h3>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Date of Birth : </b> <a class="float-right">{{ @$patient->age }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Email</b> <a class="float-right">{{ @$patient->email }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Phone</b> <a class="float-right">{{ @$patient->phone }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Gender</b> <a class="float-right">{{ @$patient->gender }}</a>
                      </li>

                      <li class="list-group-item">
                        <b>Address</b> <a class="float-right">{!! @$patient->address !!}</a>
                      </li>
                  </ul>
  
             <hr>     
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
              <!-- About Me Box -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">About Appointment</h3>
                </div>

            @if ($appointment->slot->day == 1)
                  @php
               $day = 'Sunday' 
                  @endphp
               @elseif($appointment->slot->day == 2)
               @php
                  $day = 'Monday'
                  @endphp
               @elseif($appointment->slot->day == 3)
               @php
                  $day = 'Tuesday' 
                 @endphp
               @elseif($appointment->slot->day== 4)
               @php
                 $day = 'Wednesday' 
                 @endphp
               @elseif($appointment->slot->day== 5)
               @php
                 $day = 'Thursaday' 
                 @endphp
               @elseif($appointment->slot->day == 6)
               @php
                  $day = 'Friday' 
                 @endphp
               @elseif($appointment->slot->day== 7)
               @php
                  $day = 'Saturday' 
                 @endphp
               @endif
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Time</strong>
  
                  <p class="text-muted">
                    {{$day}} - {{ $appointment->slot->time }}
                  </p>
  
                  <hr>
  
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Package</strong>
  
                  <p class="text-muted">{{$appointment->package->name}}</p>
  
                  <hr>
  
                 
                 
  
                  <strong><i class="far fa-file-alt mr-1"></i> Payment</strong>
  
                  <p class="text-muted">{{$appointment->payment->method}}</p>

                  <hr>
                  <strong><i class="far fa-file-alt mr-1"></i> Transaction ID</strong>
  
                  <p class="text-muted">{{$appointment->trx_id}}</p>
                  <hr>
                  <strong><i class="far fa-file-alt mr-1"></i> Payment Status</strong>
  
                  <p class="text-muted">
                      @if ($appointment->payment_status == 1)
                          <span class="text-success">Done</span>
                      @else
                      <span class="text-warning">Pending</span>
                      @endif
                  </p> <br>
                  @if ($appointment->payment_status == '1')
                      <a href="{{ route('payment_status', $appointment->id) }}" class="btn btn-outline-warning">Pending</a>
                  @else
                  <a href="{{ route('payment_status', $appointment->id) }}" class="btn btn-outline-success">Approved</a>
                  @endif
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
     
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    
@endsection