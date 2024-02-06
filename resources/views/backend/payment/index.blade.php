@extends('backend.layout.master')
@section('title')
   Payment  - Index
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Payment </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment </li>
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
                <h3 class="card-title">Payment</h3>
          
              
                <a href="{{route('payment.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
                      
           
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Method Name</th>
                    <th>Method Description</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                   
                            
                   @foreach ($payment as $key=>$item)
                       
                   
                   
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$item->method}}</td>
                    <td>{!! $item->description !!}</td>
                   <td>
             
               
                      <a href="{{route('payment.edit',[$item->id])}}" title="Edit"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                      
                      <form action="{{route('payment.destroy',[$item->id])}}" method="POST">
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
                    <th>Method Name</th>
                    <th>Method Description</th>
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