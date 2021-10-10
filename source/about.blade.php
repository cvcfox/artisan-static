@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>
    <div style="display: flex; height: 100px;">
	    <div style="width: 50%;"> 
	   		<img src="https://cjamesfox.com/img/IMG_5218.jpg" alt="" style="width: 33%; height: 33%" />
	    </div>
	    <div style="flex-grow: 1;"> 
	    	<p>My name is {{ $page->owner->name }}. Software developer by day, photographer by night.  I offer an affordable option for those who don't need the "premium extras".</p>
		</div>
	</div>
@endsection
