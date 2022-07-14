@extends('layouts.main')

@section('main')
    @if ( auth()->check() )
        <p>{{ auth()->user()->name }}</p>
    @endif
@endsection