{{-- @extends('authenticate.auth_layout')

@section('image')
    <section class="basis-2/5 h-full bg-threads bg-cover bg-[center_left_-20rem] bg-no-repeat rounded-l-lg">

    </section>
@endsection

@section('header')
    <h1>Login</h1>
@endsection

@section('form')
    <form action="" class="flex flex-col justify-center" method="POST">
        @csrf
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
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
            @if($errors->has('password'))
                <div class="validationError">{{ $errors->first('password') }}</div>
            @endif
        </div>
        <div>
            <button type="submit" class="my-7 p-2 bg-orange-red w-full rounded font-bold text-2xl">Login</button>
        </div>
    </form>
@endsection

@section('text')
    <p>Don't have an account? <a href="{{ route('reg.create') }}"
            class="font-bold underline hover:text-orange-red text-lg">Signup</a></p>
@endsection --}}

@extends('layouts.main')
{{-- <section class=""> --}}
    <section class="bg-dark-green h-full w-full lg:grid lg:grid-cols-2">
        <section class="lg:shrink-0">
            <img class="h-48 w-full object-cover lg:h-full" src="{{ asset('images/threads.jpg') }}" alt="">
        </section>
        <section class="bg-dark-green text-white p-5">
            <header class="text-5xl font-extrabold pt-5">
                <h1>Login</h1>
            </header>
            <section class="py-4">
                <form action="">
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
                            class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
                        @if($errors->has('password'))
                            <div class="validationError">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    <div>
                        <button type="submit" class="my-9 p-2 bg-orange-red w-full rounded font-bold text-2xl">Login</button>
                    </div>
                </form>
                <p>Don't have an account? <a href="{{ route('reg.create') }}">Signup</a></p>
            </section>
        </section>
    </section>
{{-- </section> --}}