@extends('layouts.doctor.panding-app')
@php
$date=date("d-m-y");
  $month=date("F");
  $year=date('Y');

  $apppoinmentConfirm=DB::table('appoinment')->where('status',1)->get();
  $apppoinmentPanding=DB::table('appoinment')->where('status',0)->get();
  $apppoinmentComplate=DB::table('appoinment')->where('status',2)->get();

@endphp
  @section('details')
 
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Doctor System</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        Doctor Panding  Dashboard Please Wait for Admin Approval !!! 
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection