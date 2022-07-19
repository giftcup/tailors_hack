@extends('layouts.main')

@section('main')
    @auth
        <p>{{ auth()->user()->name }}</p>
    @endauth
@endsection