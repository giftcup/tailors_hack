@extends('authenticate.auth_layout')

@section('image')
    <img class="h-32 w-full object-cover md:h-48 lg:h-full lg:rounded-l-xl" src="{{ asset('images/threads.jpg') }}"
        alt="">
@endsection

@section('header')
    <h1>
        @auth
            {{ auth()->user()->name }}
        @endauth
        Dummy Home
    </h1>
@endsection

@section('form')
    <div class="flex flex-col justify-center">
        <div class="flex flex-col pt-7">
            <a class="font-bold text-2xl pb-4" href="{{ route('cust.create') }}">Create Customer</a>
            <a class="font-bold text-2xl pb-4" href="{{ route('cust.all') }}">Show Customers</a>
            <a class="font-bold text-2xl pb-4" href="{{ route('ord.workshop') }}">All Orders</a>
        </div>
    </div>
@endsection

@section('text')
    <p>Happy to have you here!</p>
@endsection
