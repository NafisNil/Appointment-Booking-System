@extends('backend.layout.master')
@section('title')
   Slot  - Index
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Slot </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slot </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row offset-1">
          <!-- left column -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Slot</h3>
          
              
                <a href="{{route('slot.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
                      
           
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Time</th>
                    <th>Day</th>
                    <th>Doctor</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                   
                            
                   @foreach ($slot as $key=>$item)
                       
                   
                   
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{!! $item->time !!}</td>
                    <td>
                      @if ($item->day == 1)
                          Sunday
                      @elseif($item->day == 2)
                          Monday
                      @elseif($item->day == 3)
                        Tuesday
                      @elseif($item->day == 4)
                        Wednesday
                      @elseif($item->day == 5)
                        Thursaday
                      @elseif($item->day == 6)
                        Friday
                      @elseif($item->day == 7)
                        Saturday
                      @endif
                    </td>
                    <td>{!! $item->doctor->name !!}</td>
                   <td>
             
               
                      <a href="{{route('slot.edit',[$item->id])}}" title="Edit"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
     
                      <form action="{{route('slot.destroy',[$item->id])}}" method="POST">
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
                    <th>Time</th>
                    <th>Day</th>
                    <th>Doctor</th>
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