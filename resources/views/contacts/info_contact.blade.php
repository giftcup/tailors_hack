@extends('layouts.pages')

@section('content')
    <section>
        <div class="flex gap-6 items-center py-5">
            <div>
                <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="110px" height="100px">
            </div>
            <div class="flex flex-col">
                <p class="text-2xl font-bold">{{ $customer->name }}</p>
                <p class="text-xl">{{ $customer->tel }}</p>
            </div>
        </div>
        <x-contacts.contact-info-component icon="fa-user" title="profile" detail="Personal details" :link="route('cust.profile.view', [
            'customerName' => $customer->slug,
        ])" />
        <x-contacts.contact-info-component icon="fa-tape" title="measurements" detail="All measurements"
            :link="route('ord.create', [
                'customerName' => $customer->slug,
            ])" />
        <x-contacts.contact-info-component :link="route('ord.cust', [
            'customerName' => $customer->slug,
        ])" icon="fa-cart-shopping" title="orders"
            detail="dresses ordered" />
        <x-contacts.contact-info-component icon="fa-wallet" title="payments" detail="Total amount paid" :link="route('ord.create', [
            'customerName' => $customer->slug,
        ])" />
    </section>
    </main>
@endsection
