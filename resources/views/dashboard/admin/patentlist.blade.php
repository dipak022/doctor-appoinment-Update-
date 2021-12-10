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
                  
                  <th>Name</th>
                  <th>Email</th>
                 
                  <th>Action</h>
                 
                </tr>
                </thead>
                <tbody>
                    @foreach($patent as $row)
                <tr>
                  
                  <td>{{$row->name}}</td>
                  <td>{{$row->email}}</td>

                
                  <td>
                    
                    <a href="{{ url('delete/patent/'.$row->id) }}" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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