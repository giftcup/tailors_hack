@extends('layouts.pages')

@section('content')
    <section class="md:flex md:flex-col md:items-center md:bg-dark-green/80">
        <section class="md:w-1/2 md:flex md:flex-col md:border md:border-white/30 md:shadow-lg md:shadow-white/50 md:p-9">
            <section class="text-xl tracking-wide leading-relaxed py-5">
                <div class="py-4">
                    <span class="flex justify-center">
                        <h1 class="font-bold text-lg text-orange-red">Edit Info</h1>
                    </span>
                    @if ($errors->any())
                        <h4 class="text-red-900 bg-white w-fit px-2">{{ $errors->first() }}</h4>
                    @endif
                    <div>
                        <form action="{{ route('tailor.profile.edit') }}" method="POST">
                            @csrf
                            <div class="flex flex-col py-4">
                                <label class="font-bold text-sm" for="name">Name</label>
                                <input type="text" name="name" value="{{ auth()->user()->name }}"
                                    class="md:w-4/5 bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
                            </div>
                            <div class="flex flex-col py-4">
                                <label class="font-bold text-sm" for="tel">Phone Number</label>
                                <input type="text" name="tel" value="{{ auth()->user()->tel }}"
                                    class="md:w-4/5 bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
                            </div>
                            <div class="flex flex-col py-4">
                                <label class="font-bold text-sm" for="code">Workshop Code</label>
                                <input type="text" name="code" value="{{ auth()->user()->workshop->code }}"
                                    class="md:w-4/5 bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
                            </div>
                            <div class="flex justify-between">
                                <button type="submit"
                                    class="my-7 p-2 bg-orange-red w-full md:w-2/5 rounded font-bold text-2xl">Save</button>

                                <a href="{{ route('tailor.profile') }}"
                                    class="my-7 p-2 border border-orange-red w-full md:w-2/5 rounded font-bold text-2xl text-center hover:bg-orange-red/20 hover:border-orange-red/20">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>

            </section>
        </section>
    </section>
@endsection
