@extends('_layouts.master')

@section('title', 'Portfolio')

@section('content')
	<h1>Portfolio</h1>
	
	<a href="https://instagram.com/cjamesfox" target="_blank">Instagram</a><br/><br/>
	
	<h2>Slideshow</h2>
	<div class="slideshow-container">

	  <!-- Full-width images with number and caption text -->
	  <div class="mySlides fade">
	    <div class="numbertext">1 / 3</div>
	    <img src="https://cjamesfox.com/img/FOX_2020.jpg" style="width:100%">
	    <div class="text">Caption Text</div>
	  </div>
	
	  <div class="mySlides fade">
	    <div class="numbertext">2 / 3</div>
	    <img src="https://cjamesfox.com/img/FOX_2843.jpg" style="width:100%">
	    <div class="text">Caption Two</div>
	  </div>
	
	  <div class="mySlides fade">
	    <div class="numbertext">3 / 3</div>
	    <img src="https://cjamesfox.com/img/FOX_2030.jpg" style="width:100%">
	    <div class="text">Caption Three</div>
	  </div>
	
	  <!-- Next and previous buttons -->
	  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	  <a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span>
	  <span class="dot" onclick="currentSlide(2)"></span>
	  <span class="dot" onclick="currentSlide(3)"></span>
	</div>
	
	
	<h2>Sample Photos</h2>
	<img src="https://cjamesfox.com/img/FOX_2020.jpg" alt="" />
	<img src="https://cjamesfox.com/img/FOX_2843.jpg" alt="" />
	<img src="https://cjamesfox.com/img/FOX_2030.jpg" alt="" />
	<img src="https://cjamesfox.com/img/FOX_2047.jpg" alt="" />
	<img src="https://cjamesfox.com/img/FOX_2179.jpg" alt="" />
	<img src="https://cjamesfox.com/img/FOX_2216.jpg" alt="" />
	<img src="https://cjamesfox.com/img/FOX_2244.jpg" alt="" />
	<img src="https://cjamesfox.com/img/FOX_2300.jpg" alt="" />
	<img src="https://cjamesfox.com/img/FOX_2325.jpg" alt="" />
	<img src="https://cjamesfox.com/img/FOX_2373.jpg" alt="" />
	<img src="https://cjamesfox.com/img/FOX_2439.jpg" alt="" />
	<img src="https://cjamesfox.com/img/DSC_0019.jpg" alt="" />
	
@endsection
