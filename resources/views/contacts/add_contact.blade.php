@extends('layouts.pages')

@section('content')
    <header class="text-xl font-extrabold pt-5 text-center">
        <h1>New Contact</h1>
    </header>
    <form action="{{ route('cust.store', ['workshopName' => auth()->user()->workshop->slug]) }}"
        enctype="multipart/form-data" class="flex flex-col justify-center" method="POST">
        @csrf
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="name">Customer's name</label>
            <input type="text" name="name" value="{{ old('name') }}"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
        </div>
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm" for="tel">Phone Number</label>
            <input type="tel" name="tel"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
        </div>
        <div class="flex flex-col pt-7">
            <label class="font-bold text-sm py-4" for="profile">Upload Photo</label>
            <input type="file" name="profile" accept="image/png image/jpg image/jpeg"
                class="file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-white file:text-orange-red
            hover:file:bg-violet-100
            ">
        </div>
        <div>
            <button type="submit" class="my-7 p-2 bg-orange-red w-1/2 rounded font-bold text-xl">Add</button>
        </div>
    </form>
@endsection
