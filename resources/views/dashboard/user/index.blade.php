@extends('layouts.patent.app')

@section('content')

@include('layouts.patent.slider')

@php
 $doctorList= DB::table('doctors')->get();
@endphp






<section class="cosmetics-specialist">
<div class="container">
<div class="section-title text-center">
<h2>choose your Any specialist</h2>
<p>All doctor here and show all doctor and appoinment</p>
</div>
<div class="row justify-content-center">
    @foreach($doctorList as $list)
<div class="col-12 col-md-6 col-lg-3">
<div class="specialities-col">
<div class="card">
<a href="{{ url('view/profile/'.$list->id) }}" class="specialities-img">
<img src="{{ asset(	$list->image)}}" alt="">
</a>
<div class="card-body">
<div class="specialities-content">
<a href="{{ url('view/profile/'.$list->id) }}"><h5>{{$list->name}}</h5></a>
<p>{{$list->specialization}}</p>
<a href="{{ url('appoinment/'.$list->id) }}" class="booknow-btn">Book now</a>
</div>
</div>


</div>
</div>
</div>
@endforeach



</div>
</section>


<section class="news-letter">
<div class="container">
<div class="row">
<div class="col-12">
<div class="news-letter-col">
<div class="section-title pb-2">
<h2>Grab Our Newsletter</h2>
<p>To receive latest offers and discounts from the shop.</p>
</div>
<form>
<div class="d-flex align-items-center">
<div>
<input type="email" name="email" placeholder="Enter Your Email Address">
</div>
<div>
<input type="submit" value="subscribe">
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

@endsection


