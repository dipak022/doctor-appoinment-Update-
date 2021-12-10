@extends('layouts.doctor.app')

@section('details')
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">all Slidder </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Image </th>
                  <th>Serial Number </th>
                  <th>Doctor Nmae </th>
                  <th>User Frist Name </th>
                  <th>User Last Name</th>
                  <th>email</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>Action</h>
                 
                </tr>
                </thead>
                <tbody>
                    @foreach($profile as $row)
                <tr>
                <td>
                       {{$row->id}}
                     </td>
                    <td>
                        <img src="{{ asset($row->image) }}" style="height: 50px;width:50px;" alt="order image"  />
                     </td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->first_name}}</td>
                  <td>{{$row->last_name}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->phone}}</td>
                  @if($row->status == 0)
                  <td><span class="badge rounded-pill bg-warning-light">Pending</span></td>
                  @elseif($row->status == 1)
                 <td><span class="badge rounded-pill bg-success-light">Confirm</span></td>
                 @elseif($row->status == 2)
                 <td><span class="badge rounded-pill bg-success-light">Complete Apponment </span></td>
                 @else
                 <td><span class="badge rounded-pill bg-danger-light">Cancelled</span></td>
                 @endif
                 @if($row->status == 0)
                  <td>
                    <a href="{{ url('confirm/appoinment/'.$row->id) }}" class="btn btn-success">Accept</a><br>
                    
                    <a href="{{ url('delete/appoinment/'.$row->id) }}"  class="btn btn-danger" >Delete</a>
                    
                 </td>
                 @elseif($row->status == 1)
                 <td>
                    
                    
                    <a href="{{ url('delete/appoinment/'.$row->id) }}"  class="btn btn-danger" >Delete</a>
                    <a href="{{ url('done/appoinment/'.$row->id) }}"  class="btn btn-primary" >Done</a>
                 </td>
                 @elseif($row->status == 2)
                 <td>
                    <a href="{{ url('delete/appoinment/'.$row->id) }}"  class="btn btn-danger" >Delete</a>
                    
                 </td>
                 @endif
                
                
                </tr>
                @endforeach
                
              
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    

    </section>
    <!-- /.content -->
  @endsection