@extends('layouts.layouts')

@section('content')

<div class="container mx-auto px-4">

    <section class="py-8 px-4">
        <div class="flex flex-wrap -mx-4">
            <div class="hidden md:block md:w-1/2 px-4">
                <div class="h-full w-full bg-cover rounded shadow-md" style="background-image: url('{{ asset('assets/images/Stories-3-v2.png') }}')"></div>
            </div>
            <div class="md:w-1/2 h-auto px-4">
                <div class="mb-8"><img class="rounded shadow-md hover:scale-125" src="{{ asset('assets/images/Landing-Page-MI.jpg') }}" alt=""></div>
                <div><img class="rounded shadow-md hover:scale-125" src="{{ asset('assets/images/Eternal-Roses-2.jpg') }}" alt=""></div>
            </div>
        </div>
    </section>

    <section class="py-8 px-4">
        <div class="flex flex-wrap -mx-4">
            <div class="md:w-1/2 px-4 mb-8 md:mb-0 hover:scale-125"><img class="rounded shadow-md" src="{{ asset('assets/images/Landing-Page-MI3.jpg') }}" alt=""></div>
            <div class="md:w-1/2 px-4 mb-8 md:mb-0 hover:scale-150"><img class="rounded shadow-md" src="{{ asset('assets/images/Eternal-Roses.jpg') }}" alt=""></div>
        </div>
    </section>

    <section class="pt-8 px-4">
        <div class="flex flex-wrap -mx-4">
            <div class="md:w-1/2 px-4 mb-8 hover:scale-125"><img class="rounded shadow-md" src="{{ asset('assets/images/Landing-Page-MI2.jpg') }}" alt=""></div>
            <div class="md:w-1/2 px-4 mb-8 hover:scale-125"><img class="rounded shadow-md" src="{{ asset('assets/images/Eternal-Roses-3.jpg') }}" alt=""></div>
        </div>
    </section>
</div>
@endsection
