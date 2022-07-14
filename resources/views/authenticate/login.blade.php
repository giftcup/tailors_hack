@extends('authenticate.auth_layout')

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
            <label class="font-bold text-sm" for="tel">Phone number</label>
            <input type="text" name="tel"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
        </div>
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="password">Password</label>
            <input type="password" name="password"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
        </div>
        <div>
            <button class="my-7 p-2 bg-orange-red w-full rounded font-bold text-2xl">Login</button>
        </div>
    </form>
@endsection

@section('text')
    <p>Don't have an account? <a href="{{ route('reg.create') }}" class="font-bold underline hover:text-orange-red text-lg">Signup</a></p>
@endsection
