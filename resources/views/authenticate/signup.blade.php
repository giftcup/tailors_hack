@extends('authenticate.auth_layout')

@section('image')
    <img class="h-48 w-full object-cover lg:h-full lg:rounded-l-xl" src="{{ asset('images/machine.jpg') }}" alt="">
@endsection

@section('header')
    <h1>Signup</h1>
@endsection

@section('form')
    <form action="{{ route('reg.store') }}" class="flex flex-col" method="POST">
        @csrf
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') }}"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg @error('name') is-invalid @enderror">
            @error('name')
                <div class="validationError">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="phone_number">Phone number</label>
            <input type="text" name="phone_number" value="{{ old('phone_number') }}"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg @error('phone_number') is-invalid @enderror">
            @error('phone_number')
                <div class="validationError">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="password">Password</label>
            <input type="password" name="password"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg @error('password') is-invalid @enderror">
            @error('password')
                <div class="validationError">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="password_confirmation">Confirm password</label>
            <input type="password" name="password_confirmation"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg @error('password_confirmation') is-invalid @enderror">
            @error('password_confirmation')
                <div class="validationError">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit" class="my-7 p-2 bg-orange-red w-full rounded font-bold text-2xl">Signup</button>
        </div>
    </form>
@endsection

@section('text')
    <p>Already have an account, <a href="{{ route('sess.create') }}"
            class="font-bold underline hover:text-orange-red text-lg">Login</a></p>
@endsection
