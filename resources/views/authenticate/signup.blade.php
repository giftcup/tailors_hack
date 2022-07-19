@extends('authenticate.auth_layout')

@section('image')
    <section class="basis-2/5 h-full bg-machine bg-cover bg-[center_left_-10rem] bg-no-repeat rounded-l-lg">

    </section>
@endsection

@section('header')
    <h1>Signup</h1>
@endsection

@section('form')
    <form action="{{ route('reg.store') }}" class="flex flex-col" method="POST">
        @csrf
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="name">Name</label>
            <input type="text" name="name"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
        </div>
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
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="cpassword">Confirm password</label>
            <input type="password" name="cpassword"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
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
