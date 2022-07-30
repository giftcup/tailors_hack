@extends('authenticate.auth_layout')

@section('image')
    <section class="basis-2/5 h-full bg-threads bg-cover bg-[center_left_-20rem] bg-no-repeat rounded-l-lg">

    </section>
@endsection

@section('header')
    <h1>Create Workshop</h1>
@endsection

@section('form')
    <form action="{{ route('workshop.store') }}" class="flex flex-col justify-center" method="POST">
        @csrf
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="name">Name</label>
            <input type="text" name="name"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg  @error('name') is-invalid @enderror">
            @error('name')
                <div class="validationError">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="street">Street</label>
            <input type="text" name="street"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg  @error('street') is-invalid @enderror">
            @error('street')
                <div class="validationError">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="town">Town</label>
            <input type="text" name="town"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg   @error('town') is-invalid @enderror">
            @error('town')
                <div class="validationError">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit" class="my-7 p-2 bg-orange-red w-full rounded font-bold text-2xl">Create</button>
        </div>
    </form>
@endsection

@section('text')
    <p><a href="{{ route('tailor.join') }}" class="underline hover:text-orange-red text-lg">Join a workshop instead? </a>
    </p>
@endsection
