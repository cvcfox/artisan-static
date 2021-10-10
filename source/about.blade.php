@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p>My name is {{ $page->owner->name }}</p>
    <img src="https://cjamesfox.com/img/IMG_5218.jpg" alt="" />

	<a href="https://instagram.com/cjamesfox" target="_blank">Instagram</a>

@endsection
