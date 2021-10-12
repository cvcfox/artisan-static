@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form action="https://formcarry.com/s/x7n04aSHRaz" method="POST" accept-charset="UTF-8" >
        <div>
            <label for="sender">First Name</label><br>
            <input type="text" name="firstName" required>
        </div>

      	<div>
            <label for="sender">Last Name</label><br>
            <input type="text" name="lastName" required>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" required></textarea>
        </div>
		<input type="hidden" name="_gotcha">

        <input type="submit" name="submit" value="Send">
    </form>
@endsection
