<?php 
include "includes/header.php";
?>

<!-- body-->

<style>
    @media only screen and (min-width: 780px) {
        #search{
            margin-top:10px; 
            margin-left:-15px;
        }
    }  
</style>



<div class="container">
<div class="row space-100">
<div class="col-lg-7 col-md-12 col-xs-12">
<div class="contents">
<h3 class="head-title">India’s One Of The <br> Best Education Platforms</h3>
<div class="job-search-form">
<form>
<div class="row">
<div class="col-lg-10 col-md-10 col-xs-12">
<div class="form-group">
<input class="form-control" type="text" placeholder="Search by courses, colleges, degrees and more" style="font-size:16px; padding:20px 30px; border-radius:10px; border: 1px solid #839192 ; box-shadow: 0px 10px 10px #E5E7E9 ;">
</div>
</div>
<div class="col-lg-2 col-md-2 col-xs-12">
<button type="submit" class="button" id="search"><i class="lni-search"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="intro-img">
<img src="assets/img/intro.png" alt="">
</div>
</div>
</div>
</div>
</header>


<section class="category section bg-gray">
<div class="container">
<div class="section-header">
<h2 class="section-title">Browse Categories</h2>
</div>

<!-- individual link section option> -->
<div class="row subcategory" style="display:none">
<input type="hidden" id="category">
<div class="col-lg-4 col-md-4 col-xs-12 f-category">
<a href="browse-jobs.html">
<div class="icon bg-color-1">
<i class="lni-search"></i>
</div>
<h3>Find Colleges</h3>
</a>
</div>
<div class="col-lg-4 col-md-4 col-xs-12 f-category">
<a href="browse-jobs.html">
<div class="icon bg-color-7">
<i class="lni-apartment"></i>
</div>
<h3>College Rankings</h3>
</a>
</div>
<div class="col-lg-4 col-md-4 col-xs-12 f-category">
<a href="browse-jobs.html">
<div class="icon bg-color-8">
<i class="lni-pencil-alt"></i>
</div>
<h3>College Reviews</h3>
</a>
</div>

</div>



<div class="row" style="margin-top:10px; cursor:pointer">
<div class="col-lg-3 col-md-6 col-xs-12 f-category" id="engineering">
<a onclick="setcategory('engineering')">
<div class="icon bg-color-4">
<i class="lni-display"></i>
</div>
<h3>Enginnering</h3>
</a>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 f-category" id="medicine">
<a onclick="setcategory('medicine')">
<div class="icon bg-color-2">
<i class="lni-heart"></i>
</div>
<h3>Medicine</h3>
</a>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 f-category" id="law">
<a onclick="setcategory('law')">
<div class="icon bg-color-2">
<i class="lni-apartment"></i>
</div>
<h3>Law</h3>
</a>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 f-category" id="finance">
<a onclick="setcategory('finance')">
<div class="icon bg-color-1">
<i class="lni-home"></i>
</div>
<h3>Accounting & Finance</h3>
</a>
</div>
</div>
</div>
</section>


<section id="featured" class="section">
<div class="container">
<div class="section-header">
<h2 class="section-title">Top 5 Engineering Colleges</h2>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="job-featured">
<div class="icon">
<img src="assets/img/features/img1.png" alt="">
</div>
<div class="content">
<h3>College Name</h3>
<div class="tags">
<span><i class="lni-map-marker"></i> Odisha</span>
<span><i class="lni-user"></i>Private</span>
</div>
<span class="full-time">View</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="job-featured">
<div class="icon">
<img src="assets/img/features/img1.png" alt="">
</div>
<div class="content">
<h3>College Name</h3>
<div class="tags">
<span><i class="lni-map-marker"></i> Odisha</span>
<span><i class="lni-user"></i>Private</span>
</div>
<span class="full-time">View</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="job-featured">
<div class="icon">
<img src="assets/img/features/img1.png" alt="">
</div>
<div class="content">
<h3>College Name</h3>
<div class="tags">
<span><i class="lni-map-marker"></i> Odisha</span>
<span><i class="lni-user"></i>Private</span>
</div>
<span class="full-time">View</span>
</div>
</div>
</div>


<div class="col-lg-2 col-md-0 col-xs-12">
</div>


<div class="col-lg-4 col-md-6 col-xs-12">
<div class="job-featured">
<div class="icon">
<img src="assets/img/features/img1.png" alt="">
</div>
<div class="content">
<h3>College Name</h3>
<div class="tags">
<span><i class="lni-map-marker"></i> Odisha</span>
<span><i class="lni-user"></i>Private</span>
</div>
<span class="full-time">View</span>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-xs-12">
<div class="job-featured">
<div class="icon">
<img src="assets/img/features/img1.png" alt="">
</div>
<div class="content">
<h3>College Name</h3>
<div class="tags">
<span><i class="lni-map-marker"></i> Odisha</span>
<span><i class="lni-user"></i>Private</span>
</div>
<span class="full-time">View</span>
</div>
</div>
</div>


<div class="col-lg-2 col-md-0 col-xs-12">
</div>

<div class="col-12 text-center mt-4">
<a href="#" class="btn btn-common">View All</a>
</div>
</div>
</div>
</section>


<section id="featured" class="section bg-gray">
<div class="container">
<div class="section-header">
<h2 class="section-title">Top 5 MBA Colleges</h2>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="job-featured">
<div class="icon">
<img src="assets/img/features/img1.png" alt="">
</div>
<div class="content">
<h3>College Name</h3>
<div class="tags">
<span><i class="lni-map-marker"></i> Odisha</span>
<span><i class="lni-user"></i>Private</span>
</div>
<span class="full-time">View</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="job-featured">
<div class="icon">
<img src="assets/img/features/img1.png" alt="">
</div>
<div class="content">
<h3>College Name</h3>
<div class="tags">
<span><i class="lni-map-marker"></i> Odisha</span>
<span><i class="lni-user"></i>Private</span>
</div>
<span class="full-time">View</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="job-featured">
<div class="icon">
<img src="assets/img/features/img1.png" alt="">
</div>
<div class="content">
<h3>College Name</h3>
<div class="tags">
<span><i class="lni-map-marker"></i> Odisha</span>
<span><i class="lni-user"></i>Private</span>
</div>
<span class="full-time">View</span>
</div>
</div>
</div>


<div class="col-lg-2 col-md-0 col-xs-12">
</div>


<div class="col-lg-4 col-md-6 col-xs-12">
<div class="job-featured">
<div class="icon">
<img src="assets/img/features/img1.png" alt="">
</div>
<div class="content">
<h3>College Name</h3>
<div class="tags">
<span><i class="lni-map-marker"></i> Odisha</span>
<span><i class="lni-user"></i>Private</span>
</div>
<span class="full-time">View</span>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-xs-12">
<div class="job-featured">
<div class="icon">
<img src="assets/img/features/img1.png" alt="">
</div>
<div class="content">
<h3>College Name</h3>
<div class="tags">
<span><i class="lni-map-marker"></i> Odisha</span>
<span><i class="lni-user"></i>Private</span>
</div>
<span class="full-time">View</span>
</div>
</div>
</div>


<div class="col-lg-2 col-md-0 col-xs-12">
</div>

<div class="col-12 text-center mt-4">
<a href="#" class="btn btn-common">View All</a>
</div>
</div>
</div>
</section>



<section class="how-it-works section">
<div class="container">
<div class="section-header">
<h2 class="section-title">How It Works?</h2>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="work-process">
<span class="process-icon">
<i class="lni-user"></i>
</span>
<h4>Create an Account</h4>
<p>Create an account to access the courses, see the reviews of college and find the details of various eduational institutes</p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="work-process step-2">
<span class="process-icon">
<i class="lni-search"></i>
</span>
<h4>Search Courses</h4>
<p>Search for various courses to get yourself enriched with knowledge before the placements and for competetive exams.</p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="work-process step-3">
<span class="process-icon">
<i class="lni-cup"></i>
</span>
<h4>Search Colleges</h4>
<p>Search for colleges to know about the details of the colleges like fees , faculties, placements, hostels and other activites.</p>
</div>
</div>
</div>
</div>
</section>





<?php
include 'includes/footer.php';
?>