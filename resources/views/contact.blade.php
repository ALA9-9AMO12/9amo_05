
@extends('layout')

@section('content')
    <h1>Contact</h1>
    <div style="text-align: center; background-color: white;">
        <form>
            <label>Name:</label>
            <input type="text" name="name"><br>
            <label>Email:</label>
            <input type="email" name="email"><br>
            <label>Massage:</label>
            <input type="text" name="description"><br>
            <input type="submit" value="Send">
        </form>
    </div>
@endsection
@section('footer')
    <h1>Footer</h1>
@endsection
