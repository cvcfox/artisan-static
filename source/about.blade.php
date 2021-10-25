@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>
    <div style="display: flex; ">
	    <div style="width: 50%; margin-right:10px"> 
	   		<img src="https://cjamesfox.com/img/me.jpg" alt="" />
	    </div>
	    <div style="width:50%"> 
	    	<p>My name is {{ $page->owner->name }}. Software developer by day, photographer by evening/weekend. </p>
		</div>
	</div>
@endsection
