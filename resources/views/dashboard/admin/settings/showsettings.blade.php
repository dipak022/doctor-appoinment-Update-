@extends('layouts.admin.app')
  @section('details')
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>all settings Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Setting page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">all Setting </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>logo</th>
                  <th>Fb Link</th>
                  <th>Twiter Link</th>
                  <th>Youtoybe Link</th>
                  <th>address</th>
                  
                  <th>Action</h>

       
                 
                </tr>
                </thead>
                <tbody>
                    @foreach($allsettings as $row)
                <tr>
                <td>
                        <img src="{{ asset($row->logo) }}" style="height: 50px;width:50px;" alt="order image"  />
                     </td>
                  <td>{{$row->fb_link}}</td>
                  <td>{{$row->twiter_link}}</td>
                  <td>{{$row->youtoube_link}}</td>
                  <td>{{$row->address}}</td>
                
                  <td>
                    <a href="{{ url('edit/settings/'.$row->id) }}" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a><br>
                    <a href="{{ url('delete/settings/'.$row->id) }}" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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