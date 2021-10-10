@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p>My name is {{ $page->owner->name }}</p>

    <h2>Links:</h2>

    <ul>
        <li><a href="https://instagram.com/cjamesfox" target="_blank">Instagram</a></li>
    </ul>
@endsection
