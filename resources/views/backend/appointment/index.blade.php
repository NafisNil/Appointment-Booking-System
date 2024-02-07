@extends('backend.layout.master')
@section('title')
   Appointment  - Index
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Appointment </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Appointment </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row ">
          <!-- left column -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Appointment</h3>
          
              
                <a href="{{route('appointment.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Doctor Name</th>
                    <th>Patient Name</th>
                    <th>Time</th>
                    <th> Email</th>
                    <th> Package</th>
                    <th> Payment Method</th>
                    <th> Transaction ID</th>
                    <th> Payment Status</th>
                    <th> Date</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                   
                            
                   @foreach ($appointment as $key=>$item)
                       
                   @php
                       $patient = App\Models\User::where('id', $item->patient_id)->first();
                   @endphp
                   @if ($item->slot->day == 1)
                         @php
                      $day = 'Sunday' 
                         @endphp
                      @elseif($item->slot->day == 2)
                      @php
                         $day = 'Monday'
                         @endphp
                      @elseif($item->slot->day == 3)
                      @php
                         $day = 'Tuesday' 
                        @endphp
                      @elseif($item->slot->day== 4)
                      @php
                        $day = 'Wednesday' 
                        @endphp
                      @elseif($item->slot->day== 5)
                      @php
                        $day = 'Thursaday' 
                        @endphp
                      @elseif($item->slot->day == 6)
                      @php
                         $day = 'Friday' 
                        @endphp
                      @elseif($item->slot->day== 7)
                      @php
                         $day = 'Saturday' 
                        @endphp
                      @endif
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$item->user->name}}</td>
                    <td>{{$patient->name}}</td>
                    <td>{{$day}} - {{ $item->slot->time }}</td>
                    <td>{{$patient->email}}</td>
                    <td>{{$item->package->name}}</td>
                    <td>{{$item->payment->method}}</td>
                    <td>{{$item->trx_id}}</td>
                    <td>
                      
                      @if ($item->payment_status == 1)
                          <span class="text-success">Done</span>
                      @else
                      <span class="text-warning">Pending</span>
                      @endif  
                    </td>
                    <td>{{$item->created_at->format('d M, Y')}}</td>
                   <td>
             
               
                     
                      <a href="{{route('appointment.show',[$item->id])}}"><button class="btn btn-outline-primary btn-sm"><i class="fas fa-eye" title="Show"></i></button></a>
                      <form action="{{route('appointment.destroy',[$item->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></button>
                    </form>
                         
                         
              
                    </td>
                   
                  </tr>
                
                  @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Doctor Name</th>
                    <th>Patient Name</th>
                    <th>Time</th>
                    <th> Email</th>
                    <th> Package</th>
                    <th> Payment Method</th>
                    <th> Transaction ID</th>
                    <th> Payment Status</th>
                    <th> Date</th>
                    <th>Action</th>
                  
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection