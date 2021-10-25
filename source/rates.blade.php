@extends('_layouts.master')

@section('title', 'Rates')

@section('content')
    <h1>Rates</h1>

	<a href="#portrait">Portrait Session Package</a><br/>
	<a href="#pet">Pet Session Package</a><br/>
	<a href="#wedding1">Wedding Package 1</a><br/>
	<a href="#wedding2">Wedding Package 2</a><br/>
	<a href="#wedding3">Wedding Package 3</a><br/>
	<a href="#fineprint">Fine Print</a>

	<div id="portrait">
		<h3 class="rate-package">Portrait Session Package: <span class="rate-price">$350</span></h3>
		<blockquote class="rate-quote">Perfect for families, couples&nbsp;&amp;&nbsp;children.</blockquote>
		This package includes:
		<ul>
	        <li>All high-resolution images<br>
	        <span>(average of 30 images)</span></li>
	        <li>1 hour photography session</li>
	        <li>Travel within a 30 kms radius of Manotick<br>
	        <span>(please contact me to inquire about out-of-town rates)</span></li>
	        <li>Digital images are provided via download link only<br>
	        <span>(in high-resolution and convenient web-sized formats)</span></li>
	    </ul>
    </div>
    
    <div id="pet">
		<h3 class="rate-package">Pet Session Package: <span class="rate-price">$200</span></h3>
		<blockquote class="rate-quote">Perfect for pet lovers</blockquote>
		This package includes:
		<ul>
	        <li>All high-resolution images<br>
	        <span>(average of 30 images)</span></li>
	        <li>1 hour photography session</li>
	        <li>Travel within a 30 kms radius of Manotick<br>
	        <span>(please contact me to inquire about out-of-town rates)</span></li>
	        <li>Digital images are provided via download link only<br>
	        <span>(in high-resolution and convenient web-sized formats)</span></li>
	    </ul>
    </div>
    
   	<div id="wedding1">
	    <h3 class="rate-package">Wedding Package 1: <span class="rate-price">$1800</span></h3>
		<blockquote class="rate-quote">Perfect if you want to capture the iconic scenes of your special day: getting ready, pre-ceremony scenes of you and the wedding party, the ceremony, the formal portraits of you and your family,  the dinner and speeches.</blockquote>
		This package includes:
		<ul>
	        <li>All high-resolution images<br></li>
	        <li><b>8-hours</b> of wedding day coverage</li>
	        <li>Private Online Gallery</li>
	        <li>Digital images are provided via download link only<br>
	        <span>(prints can be requested)</span></li>
	    </ul>
    </div>
    <div id="wedding2">
	    <h3 class="rate-package">Wedding Package 2: <span class="rate-price">$2200</span></h3>
		<blockquote class="rate-quote">With package 2, you can document the happy memories of your wedding day with an additional two hours of coverage. No moments or guests will be left out or missed.</blockquote>
		This package includes:
		<ul>
	        <li>All high-resolution images<br></li>
	        <li><b>10-hours</b> of wedding day coverage</li>
	        <li>Private Online Gallery</li>
	        <li>Digital images are provided via download link only<br>
	        <span>(prints can be requested)</span></li>
	    </ul>
    </div>
    <div id="wedding3">
	    <h3 class="rate-package">Wedding Package 3: <span class="rate-price">$3000</span></h3>
		<blockquote class="rate-quote">Package 3 will have every moment and every detail of your beautiful day captured. It will document your story from the moment you get ready until the end of the last song.</blockquote>
		This package includes:
		<ul>
	        <li>All high-resolution images<br></li>
	        <li><b>12-hours</b> of wedding day coverage</li>
	        <li><b>Engagement session</b></li>
	        <li>Private Online Gallery</li>
	        <li>Digital images are provided via download link only<br>
	        <span>(prints can be requested)</span></li>
	    </ul>
    </div>
    <div id="fineprint">
		<h3 class="fine-print">Fine Print:</h3>
		<ul>
		    <li>Payment can be made by banking e-transfer (Interac) or credit card via Paypal</li>
		    <li>All packages are for one session date and location</li>
		    <li>All pricing is non-negotiable and is subject to change at any time unless the fee has been paid.</li>
		   	<li>The fee is due at time of booking and secures your session date.</li>
		    <li>The fee is non-refundable, but it is transferable in the event that you must re-schedule (24 hours notice required)</li>
		    <li>Due to the custom nature of photography, all sales are final</li>
		</ul>
	</div>

@endsection
