@extends('_layouts.master')

@section('title', 'Portfolio')

@section('content')
	<h1>Portfolio</h1>
	
	<a href="https://instagram.com/cjamesfox" target="_blank">Instagram</a><br/>
	
	<div class="slideshow-container">

	  <!-- Full-width images with number and caption text -->
	  <div class="mySlides fade">
	    <div class="numbertext">1 / 10</div>
	    <img src="https://cjamesfox.com/img/FOX_2020.jpg" style="width:100%">
	    <div class="text">Sunset over the bridge</div>
	  </div>
	
	  <div class="mySlides fade">
	    <div class="numbertext">2 / 10</div>
	    <img src="https://cjamesfox.com/img/FOX_2843.jpg" style="width:100%">
	    <div class="text">Sanders Farm Portrait</div>
	  </div>
	
	  <div class="mySlides fade">
	    <div class="numbertext">3 / 10</div>
	    <img src="https://cjamesfox.com/img/FOX_2030.jpg" style="width:100%">
	    <div class="text">Manotick Mill at Night</div>
	  </div>
	  
	  <div class="mySlides fade">
	    <div class="numbertext">4 / 10</div>
	    <img src="https://cjamesfox.com/img/FOX_2179.jpg" style="width:100%">
	    <div class="text">Cows with a stance</div>
	  </div>
	
	  <div class="mySlides fade">
	    <div class="numbertext">5 / 10</div>
	    <img src="https://cjamesfox.com/img/FOX_2216.jpg" style="width:100%">
	    <div class="text">Manotick Mill</div>
	  </div>
	
	  <div class="mySlides fade">
	    <div class="numbertext">6 / 10</div>
	    <img src="https://cjamesfox.com/img/FOX_2244.jpg" style="width:100%">
	    <div class="text">Duck soul mates</div>
	  </div>
	  
	  <div class="mySlides fade">
	    <div class="numbertext">7 / 10</div>
	    <img src="https://cjamesfox.com/img/FOX_2300.jpg" style="width:100%">
	    <div class="text">Chicken Buddies</div>
	  </div>
	  
	  <div class="mySlides fade">
	    <div class="numbertext">8 / 10</div>
	    <img src="https://cjamesfox.com/img/FOX_2325.jpg" style="width:100%">
	    <div class="text">Morning fog</div>
	  </div>
	
	  <div class="mySlides fade">
	    <div class="numbertext">9 / 10</div>
	    <img src="https://cjamesfox.com/img/FOX_2373.jpg" style="width:100%">
	    <div class="text">Lonely Fisherman</div>
	  </div>
	
	  <div class="mySlides fade">
	    <div class="numbertext">10 / 10</div>
	    <img src="https://cjamesfox.com/img/FOX_2439.jpg" style="width:100%">
	    <div class="text">Alert Wiener</div>
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
	  <span class="dot" onclick="currentSlide(4)"></span>
	  <span class="dot" onclick="currentSlide(5)"></span>
	  <span class="dot" onclick="currentSlide(6)"></span>
	  <span class="dot" onclick="currentSlide(7)"></span>
	  <span class="dot" onclick="currentSlide(8)"></span>
	  <span class="dot" onclick="currentSlide(9)"></span>
	  <span class="dot" onclick="currentSlide(10)"></span>
	</div>
	
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);
		
		// Next/previous controls
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}
		
		// Thumbnail image controls
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}
		
		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		} 
	</script>
@endsection
