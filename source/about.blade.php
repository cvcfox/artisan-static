@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>
    <div style="display: flex; ">
	    <div style="width: 50%; margin-right:10px"> 
	   		<img src="https://cjamesfox.com/img/IMG_5218.jpg" alt="" />
	    </div>
	    <div style="width:50%"> 
	    	<p>My name is {{ $page->owner->name }}. Software developer by day, photographer by night.  I offer an affordable option for those who don't need the "premium extras".</p>
		</div>
	</div>
@endsection
