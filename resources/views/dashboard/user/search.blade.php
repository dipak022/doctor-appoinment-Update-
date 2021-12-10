@extends('layouts.patent.app')

@section('content')
<div class="col-md-12 col-lg-12 col-xl-12">

@foreach($doctor as $row)
<div class="card">
<div class="card-body">
<div class="doctor-widget">
<div class="doc-info-left">
<div class="doctor-img">
<a href="doctor-profile.html">
<img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
</a>
</div>
<div class="doc-info-cont">
<h4 class="doc-name"><a href="doctor-profile.html">{{$row->name}}</a></h4>
<p class="doc-speciality">{{$row->specialization}}</p>
<h5 class="doc-department"><img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">{{$row->specialization}}</h5>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(17)</span>
</div>
<div class="clinic-details">
<p class="doc-location"><i class="fas fa-map-marker-alt"></i> dhanmondi, dhaka</p>
<ul class="clinic-gallery">
<li>
<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
<img src="assets/img/features/feature-01.jpg" alt="Feature">
</a>
</li>
<li>
<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
<img src="assets/img/features/feature-02.jpg" alt="Feature">
</a>
</li>
<li>
<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
<img src="assets/img/features/feature-03.jpg" alt="Feature">
</a>
</li>
<li>
<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
<img src="assets/img/features/feature-04.jpg" alt="Feature">
</a>
</li>
</ul>
</div>
<div class="clinic-services">
<span>Dental Fillings</span>
<span> Whitneing</span>
</div>
</div>
</div>
<div class="doc-info-right">
<div class="clini-infos">
<ul>
<li><i class="far fa-thumbs-up"></i> 98%</li>
<li><i class="far fa-comment"></i> 17 Feedback</li>
<li><i class="fas fa-map-marker-alt"></i> dhanmondi, Dhaka</li>
<li><i class="far fa-money-bill-alt"></i> {{$row->price}} tk<i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i> </li>
</ul>
</div>
<div class="clinic-booking">
<a class="view-pro-btn" href="{{ url('view/profile/'.$row->id) }}">View Profile</a>
<a class="apt-btn" href="{{ url('appoinment/'.$row->id) }}">Book Appointment</a>
</div>


</div>
</div>
</div>
</div>
@endforeach





<div class="load-more text-center">
<a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>
</div>
</div>
</div>
</div>
</div>



@endsection