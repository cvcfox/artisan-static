@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>
    <div style="width: 100%;">
	    <div style="width: 50%; float: left;"> 
	   		<img src="https://cjamesfox.com/img/IMG_5218.jpg" alt="" style="width: 33%; height: 33%" />
	    </div>
	    <div style="width: 50%; float: right;"> 
	    	<p>My name is {{ $page->owner->name }}. Software developer by day, photographer by night.  I offer an affordable option for those who don't need the "premium extras".</p>
		</div>
	</div>
@endsection
