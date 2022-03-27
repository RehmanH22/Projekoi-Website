@extends('layouts.layouts')

@section('content')
    <head>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"/>
        <!-- Swiper's CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    </head>
    <style>
        .swiper-button-next {
            color: #EBBAB4;
        }

        .swiper-button-prev {
            color: #EBBAB4;
        }
    </style>
    <div class="px-4 bg-split-rose-white">
        <div class="px-4 py-4">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="object-cover w-full h-96"
                            src="{{ asset('assets/images/Landing-Page-MI.jpg') }}" alt="image"/>
                    </div>
                    <div class="swiper-slide">
                        <img class="object-cover w-full h-96"
                            src="{{ asset('assets/images/Landing-Page-MI2.jpg') }}" alt="image"/>
                    </div>
                    <div class="swiper-slide">
                        <img class="object-cover w-full h-96"
                            src="{{ asset('assets/images/Landing-Page-MI3.jpg') }}" alt="image"/>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
    {{--            <div class="swiper-pagination"></div>--}}
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
@endsection

@section('footer')
    <div class="px-4">
        <div class="flex justify-center grid grid-rows-1 py-2">
            <div>
                <h1 class="flex-auto text-center text-base text-h2-text font-raleway uppercase">Small Canadian-Owned</h1>
            </div>
            <div>
                <h1 class="flex-auto text-center text-base text-h2-text font-raleway uppercase">Business based in </h1>
            </div>

            <div>
                <h2 class="flex-auto text-center text-xl text-h2-text italic font-cgbi uppercase">Vancouver, BC</h2>
            </div>
            <br/>
            <div class="px-32">
                <form action="https://www.amazon.ca/Large-Roses-Preserved-Acrylic-Eternal/dp/B09R43H52D/">
                    <input class="bg-gradient-to-l from-buttonl via-buttonr to-white hover:underline text-black font-bold py-2 px-8 border border-buttonl uppercase font-ralewaylight"
                        type="submit" value="shop on amazon" />
                </form>
            </div>
        </div>
    </div>
@endsection
