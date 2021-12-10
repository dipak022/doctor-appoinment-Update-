@extends('layouts.admin.app')
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
                  <th>Image</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Specialization</th>
                  <th>Price</th>
                  <th>Permition</h>
                  <th>Action</h>
                 
                </tr>
                </thead>
                <tbody>
                    @foreach($doctor as $row)
                <tr>
                    <td>
                        <img src="{{ asset($row->image) }}" style="height: 50px;width:50px;" alt="order image"  />
                     </td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->specialization}}</td>
                  <td>{{$row->price}}</td>

                  @if($row->status == 1)
                  <td><span class="badge rounded-pill bg-success-light">Confirm</span></td>
                  @else
                  <td >
                    <a href="{{ url('doctor/account/permition/'.$row->id) }}" class="btn btn-success"  >Accept Doctor</a>
                 </td>
                  @endif              
                 

                 <td>
                    <a href="{{ url('delete/doctor/'.$row->id) }}" class="btn btn-danger" ><i class="fa fa-trash">Delete</i></a>
                 </td>
                
                </tr>
                @endforeach
                
              
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    

    </section>
    <!-- /.content -->
  @endsection