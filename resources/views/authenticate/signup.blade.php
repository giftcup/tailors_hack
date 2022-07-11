@extends('authenticate.auth_layout')

@section('image')
{{-- <img src={{ asset('images/machine.jpg') }} alt="" class="h-full w-fit"> --}}
@endsection

@section('header')
<h1 class="text-3xl font-bold underline">Signup</h1>
@endsection

@section('form')
<form action="">
    <label for="input">Name:</label>
    <input type="text" name="input">
</form>
@endsection

@section('text')
<p>Already have an account, <a href="">Login</a></p>
@endsection
