@extends('authenticate.auth_layout')

@section('image')
    <section class="basis-2/5 h-full bg-threads bg-cover bg-[center_left_-20rem] bg-no-repeat rounded-l-lg">

    </section>
@endsection

@section('header')
    <h1>Join Workshop</h1>
@endsection

@section('form')
    <form action="{{ route('tailor.workshop') }}" class="flex flex-col justify-center" method="POST">
        @csrf
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="code">Workshop Code</label>
            <input type="text" name="code"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg @error('code') is-invalid @enderror">
                @error('code')
                <div class="validationError">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit" class="my-7 p-2 bg-orange-red w-full rounded font-bold text-2xl">Join</button>
        </div>
    </form>
@endsection

@section('text')
    <p>Owner of a workshop?<a href="{{ route('workshop.create') }}" class="font-bold hover:text-orange-red text-2xl"> Register it</a></p>
@endsection
