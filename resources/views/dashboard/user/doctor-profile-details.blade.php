@extends('layouts.patent.app')

@section('content')
<div class="breadcrumb-bar">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-md-12 col-12">
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
</ol>
</nav>
<h2 class="breadcrumb-title">Doctor Profile</h2>
</div>
</div>
</div>
</div>


<div class="content">
<div class="container">
<div class="card">
<div class="card-body">
<div class="doctor-widget">
<div class="doc-info-left">
<div class="doctor-img">
<img src="{{ asset($user->image)}}" class="img-fluid" alt="User Image">
</div>
<div class="doc-info-cont">
<h4 class="doc-name">{{$user->name}}</h4>
<p class="doc-speciality">{{$user->specialization}}</p>
<p class="doc-department"><img src="{{ asset('doctor/')}}/assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">{{$user->specialization}}</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(35)</span>
</div>
<div class="clinic-details">
<p class="doc-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA - <a href="javascript:void(0);">Get Directions</a></p>
<ul class="clinic-gallery">
<li>
<a href="{{ asset('doctor/')}}/assets/img/features/feature-01.jpg" data-fancybox="gallery">
<img src="{{ asset('doctor/')}}/assets/img/features/feature-01.jpg" alt="Feature">
</a>
</li>
<li>
<a href="{{ asset('doctor/')}}/assets/img/features/feature-02.jpg" data-fancybox="gallery">
<img src="{{ asset('doctor/')}}/assets/img/features/feature-02.jpg" alt="Feature Image">
</a>
</li>
<li>
<a href="{{ asset('doctor/')}}/assets/img/features/feature-03.jpg" data-fancybox="gallery">
<img src="{{ asset('doctor/')}}/assets/img/features/feature-03.jpg" alt="Feature">
</a>
</li>
<li>
<a href="{{ asset('doctor/')}}/assets/img/features/feature-04.jpg" data-fancybox="gallery">
<img src="{{ asset('doctor/')}}/assets/img/features/feature-04.jpg" alt="Feature">
</a>
</li>
</ul>
</div>
<div class="clinic-services">
<span>Dental Fillings</span>
<span>Teeth Whitneing</span>
</div>
</div>
</div>
<div class="doc-info-right">
<div class="clini-infos">
<ul>
<li><i class="far fa-thumbs-up"></i> 99%</li>
<li><i class="far fa-comment"></i> 35 Feedback</li>
<li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
<li><i class="far fa-money-bill-alt"></i> {{$user->price}} Tk </li>
</ul>
</div>
<div class="doctor-action">
<a href="javascript:void(0)" class="btn btn-white fav-btn">
<i class="far fa-bookmark"></i>
</a>
<a href="chat.html" class="btn btn-white msg-btn">
<i class="far fa-comment-alt"></i>
</a>
<a href="javascript:void(0)" class="btn btn-white call-btn" data-bs-toggle="modal" data-bs-target="#voice_call">
<i class="fas fa-phone"></i>
</a>
<a href="javascript:void(0)" class="btn btn-white call-btn" data-bs-toggle="modal" data-bs-target="#video_call">
<i class="fas fa-video"></i>
</a>
</div>
<div class="clinic-booking">
<a class="apt-btn" href="{{ url('appoinment/'.$user->id) }}">Book Appointment</a>
</div>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-body pt-0">

<nav class="user-tabs mb-4">
<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
<li class="nav-item">
<a class="nav-link active" href="#doc_overview" data-bs-toggle="tab">Overview</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#doc_locations" data-bs-toggle="tab">Locations</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#doc_reviews" data-bs-toggle="tab">Reviews</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#doc_business_hours" data-bs-toggle="tab">Business Hours</a>
</li>
</ul>
</nav>


<div class="tab-content pt-0">

<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
<div class="row">
<div class="col-md-12 col-lg-9">

<div class="widget about-widget">
<h4 class="widget-title">About Me</h4>
<p>{{$user->about}}.</p>
</div>


<div class="widget education-widget">
<h4 class="widget-title">Education</h4>
<div class="experience-box">
<ul class="experience-list">
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name">{{$user->university_name}}</a>
<div>{{$user->degree}}</div>
<span class="time">{{$user->year}}</span>
</div>
</div>
</li>




</div>
</div>


<div class="widget experience-widget">
<h4 class="widget-title">Work & Experience</h4>
<div class="experience-box">
<ul class="experience-list">
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name">{{$user->experience}}</a>
<span class="time">{{$user->experience_year }}</span>
</div>
</div>
</li>

</ul>
</div>
</div>


<div class="widget awards-widget">
<h4 class="widget-title">Awards</h4>
<div class="experience-box">
<ul class="experience-list">
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<p class="exp-year">{{$user->award_date}}</p>
<h4 class="exp-title">{{$user->award_name}} </h4>
<p>{{$user->award_description}}.</p>
</div>
</div>
</li>

</ul>
</div>
</div>







</div>
</div>
</div>


<div role="tabpanel" id="doc_locations" class="tab-pane fade">

<div class="location-list">
<div class="row">

<div class="col-md-6">
<div class="clinic-content">
<h4 class="clinic-name"><a href="#">Smile Cute Dental Care Center</a></h4>
<p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(4)</span>
</div>
<div class="clinic-details mb-0">
<h5 class="clinic-direction"> <i class="fas fa-map-marker-alt"></i> 2286 Sundown Lane, Austin, Texas 78749, USA <br><a href="javascript:void(0);">Get Directions</a></h5>
<ul>
<li>
<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery2">
<img src="assets/img/features/feature-01.jpg" alt="Feature Image">
</a>
</li>
<li>
<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery2">
<img src="assets/img/features/feature-02.jpg" alt="Feature Image">
</a>
</li>
<li>
<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery2">
<img src="assets/img/features/feature-03.jpg" alt="Feature Image">
</a>
</li>
<li>
<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery2">
<img src="assets/img/features/feature-04.jpg" alt="Feature Image">
</a>
</li>
</ul>
</div>
</div>
</div>


<div class="col-md-4">
<div class="clinic-timing">
<div>
<p class="timings-days">
<span> Mon - Sat </span>
</p>
<p class="timings-times">
<span>10:00 AM - 2:00 PM</span>
<span>4:00 PM - 9:00 PM</span>
</p>
</div>
<div>
<p class="timings-days">
<span>Sun</span>
</p>
<p class="timings-times">
<span>10:00 AM - 2:00 PM</span>
</p>
</div>
</div>
</div>

<div class="col-md-2">
<div class="consult-price">
$250
</div>
</div>
</div>
</div>


<div class="location-list">
<div class="row">

<div class="col-md-6">
<div class="clinic-content">
<h4 class="clinic-name"><a href="#">The Family Dentistry Clinic</a></h4>
<p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS</p>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="d-inline-block average-rating">(4)</span>
</div>
<div class="clinic-details mb-0">
<p class="clinic-direction"> <i class="fas fa-map-marker-alt"></i> 2883 University Street, Seattle, Texas Washington, 98155 <br><a href="javascript:void(0);">Get Directions</a></p>
<ul>
<li>
<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery2">
<img src="assets/img/features/feature-01.jpg" alt="Feature Image">
</a>
</li>
<li>
<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery2">
<img src="assets/img/features/feature-02.jpg" alt="Feature Image">
</a>
</li>
<li>
<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery2">
<img src="assets/img/features/feature-03.jpg" alt="Feature Image">
</a>
</li>
<li>
<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery2">
<img src="assets/img/features/feature-04.jpg" alt="Feature Image">
</a>
</li>
</ul>
</div>
</div>
</div>


<div class="col-md-4">
<div class="clinic-timing">
<div>
<p class="timings-days">
<span> Tue - Fri </span>
</p>
<p class="timings-times">
<span>11:00 AM - 1:00 PM</span>
<span>6:00 PM - 11:00 PM</span>
</p>
</div>
<div>
<p class="timings-days">
<span>Sat - Sun</span>
</p>
<p class="timings-times">
<span>8:00 AM - 10:00 AM</span>
<span>3:00 PM - 7:00 PM</span>
</p>
</div>
</div>
</div>

<div class="col-md-2">
<div class="consult-price">
$350
</div>
</div>
</div>
</div>

</div>


<div role="tabpanel" id="doc_reviews" class="tab-pane fade">

<div class="widget review-listing">
<ul class="comments-list">

<li>
<div class="comment">
<img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient.jpg">
<div class="comment-body">
<div class="meta-data">
<span class="comment-author">David Pope</span>
<span class="comment-date">Reviewed 2 Days ago</span>
<div class="review-count rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
</div>
<p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the doctor</p>
<p class="comment-content">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation.
Curabitur non nulla sit amet nisl tempus
</p>
<div class="comment-reply">
<a class="comment-btn" href="#">
<i class="fas fa-reply"></i> Reply
</a>
<p class="recommend-btn">
<span>Recommend?</span>
<a href="#" class="like-btn">
<i class="far fa-thumbs-up"></i> Yes
</a>
<a href="#" class="dislike-btn">
<i class="far fa-thumbs-down"></i> No
</a>
</p>
</div>
</div>
</div>

<ul class="comments-reply">
<li>
<div class="comment">
<img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient1.jpg">
<div class="comment-body">
<div class="meta-data">
<span class="comment-author">Bernice Hood</span>
<span class="comment-date">Reviewed 3 Days ago</span>
<div class="review-count rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
</div>
<p class="comment-content">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam.
Curabitur non nulla sit amet nisl tempus
</p>
<div class="comment-reply">
<a class="comment-btn" href="#">
<i class="fas fa-reply"></i> Reply
</a>
<p class="recommend-btn">
<span>Recommend?</span>
<a href="#" class="like-btn">
<i class="far fa-thumbs-up"></i> Yes
</a>
<a href="#" class="dislike-btn">
<i class="far fa-thumbs-down"></i> No
</a>
</p>
</div>
</div>
</div>
</li>
</ul>

</li>


<li>
<div class="comment">
<img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient2.jpg">
<div class="comment-body">
<div class="meta-data">
<span class="comment-author">Joshua Miller</span>
<span class="comment-date">Reviewed 4 Days ago</span>
<div class="review-count rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
</div>
<p class="comment-content">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation.
Curabitur non nulla sit amet nisl tempus
</p>
 <div class="comment-reply">
<a class="comment-btn" href="#">
<i class="fas fa-reply"></i> Reply
</a>
<p class="recommend-btn">
<span>Recommend?</span>
<a href="#" class="like-btn">
<i class="far fa-thumbs-up"></i> Yes
</a>
<a href="#" class="dislike-btn">
<i class="far fa-thumbs-down"></i> No
</a>
</p>
</div>
</div>
</div>
</li>

</ul>

<div class="all-feedback text-center">
<a href="#" class="btn btn-primary btn-sm">
Show all feedback <strong>(167)</strong>
</a>
</div>

</div>


<div class="write-review">
<h4>Write a review for <strong>Dr. Eric Buckles</strong></h4>

<form>
<div class="form-group">
<label>Review</label>
<div class="star-rating">
<input id="star-5" type="radio" name="rating" value="star-5">
<label for="star-5" title="5 stars">
<i class="active fa fa-star"></i>
</label>
<input id="star-4" type="radio" name="rating" value="star-4">
<label for="star-4" title="4 stars">
<i class="active fa fa-star"></i>
</label>
<input id="star-3" type="radio" name="rating" value="star-3">
<label for="star-3" title="3 stars">
<i class="active fa fa-star"></i>
</label>
<input id="star-2" type="radio" name="rating" value="star-2">
<label for="star-2" title="2 stars">
<i class="active fa fa-star"></i>
</label>
<input id="star-1" type="radio" name="rating" value="star-1">
<label for="star-1" title="1 star">
<i class="active fa fa-star"></i>
</label>
</div>
</div>
<div class="form-group">
<label>Title of your review</label>
<input class="form-control" type="text" placeholder="If you could say it in one sentence, what would you say?">
</div>
<div class="form-group">
<label>Your review</label>
<textarea id="review_desc" maxlength="100" class="form-control"></textarea>
<div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> characters remaining</small></div>
</div>
<hr>
<div class="form-group">
<div class="terms-accept">
<div class="custom-checkbox">
<input type="checkbox" id="terms_accept">
<label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
</div>
</div>
</div>
<div class="submit-section">
<button type="submit" class="btn btn-primary submit-btn">Add Review</button>
</div>
</form>

</div>

</div>


<div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
<div class="row">
<div class="col-md-6 offset-md-3">

<div class="widget business-widget">
<div class="widget-content">
<div class="listing-hours">
<div class="listing-day current">
<div class="day">Day <span></span></div>
<div class="time-items">
 <span class="open-status"><span class="badge bg-success-light">Open Now</span></span>

</div>
</div>
<div class="listing-day">
<div class="day">Monday</div>
<div class="time-items">
<span class="time">{{$user->monday_time}}</span>
</div>
</div>
<div class="listing-day">
<div class="day">Tuesday</div>
<div class="time-items">
<span class="time">{{$user->tuesday_time}}</span>
</div>
</div>
<div class="listing-day">
<div class="day">Wednesday</div>
<div class="time-items">
<span class="time">{{$user->Wednesday_time}}</span>
</div>
</div>
<div class="listing-day">
<div class="day">Thursday</div>
<div class="time-items">
<span class="time">{{$user->thursday_time}}</span>
</div>
</div>
<div class="listing-day">
<div class="day">Friday</div>
<div class="time-items">
<span class="time">{{$user->friday_time}}</span>
</div>
</div>
<div class="listing-day">
<div class="day">Saturday</div>
<div class="time-items">
<span class="time">{{$user->saturday_time}}</span>
</div>
</div>
<div class="listing-day closed">
<div class="day">Sunday</div>
<div class="time-items">
    
<span class="time"><span class="time">{{$user->sunday_time}}</span></span>
</div>
</div>
</div>
</div>
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

