@extends('layouts.patent.app')

@section('content')

<div class="breadcrumb-bar">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-md-12 col-12">
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Checkout</li>
</ol>
</nav>
<h2 class="breadcrumb-title">Checkout</h2>
</div>
</div>
</div>
</div>


<div class="content">
<div class="container">
<div class="row">
<div class="col-md-7 col-lg-8">
<div class="card">
<div class="card-body">

<form action="{{ route('doctor.appoinment') }}"method="post">
  @csrf
<div class="info-widget">
<h4 class="card-title">Personal Information</h4>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="form-group card-label">
<label>First Name</label>
<input class="form-control" type="text" name="first_name">
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="form-group card-label">
<label>Last Name</label>
<input class="form-control" type="text" name="last_name">
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="form-group card-label">
<label>Email</label>
<input class="form-control" type="email" name="email">
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="form-group card-label">
<label>Phone</label>
<input class="form-control" type="text" name="phone">
<input class="form-control" type="hidden" name="doctor_id" value="{{$appoinment->id}}">
</div>
</div>
</div>
<div class="exist-customer">Existing Customer? <a href="{{route('user.login')}}">Click here to login</a></div>
</div>

<div class="payment-widget">
<h4 class="card-title">Payment Method</h4>

<div class="payment-list">
<label class="payment-radio credit-card-option">
<input type="radio" name="payment" checked>
<span class="checkmark"></span>
Hand Cash
</label>

</div>






<div class="submit-section mt-4">
<button type="submit" class="btn btn-primary submit-btn">Confirm and Pay</button>
</div>

</div>
</form>

</div>
</div>
</div>
<div class="col-md-5 col-lg-4 theiaStickySidebar">

<div class="card booking-card">
<div class="card-header">
<h4 class="card-title">Booking Summary</h4>
</div>
<div class="card-body">

<div class="booking-doc-info">
<a href="doctor-profile.html" class="booking-doc-img">
<img src="{{asset($appoinment->image)}}" alt="User Image">
</a>
<div class="booking-info">
<h4><a href="doctor-profile.html">{{$appoinment->name}}</a></h4>

<div class="clinic-details">
<p class="doc-location"><i class="fas fa-map-marker-alt"></i> {{$appoinment->specialization}}</p>
</div>
</div>
</div>

<div class="booking-summary">
<div class="booking-item-wrap">

<ul class="booking-fee">
<li>Consulting Fee <span>{{$appoinment->price}} TK</span></li>

</ul>
<div class="booking-total">
<ul class="booking-total-list">
<li>
<span>Total</span>
<span class="total-cost">{{$appoinment->price}} TK</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

@endsection

