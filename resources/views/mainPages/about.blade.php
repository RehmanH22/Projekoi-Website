@extends('layouts.layouts')

@section('content')
    <div class="px-4 py-4 bg-mainbg">
    </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 place-items-center bg-faqheaderbg">
            <div class="text-center max-w-sm w-full lg:max-w-full lg:flex">
                <img class="px-4 py-4"
                    src="{{ asset('assets/images/about-us.jpg') }}" alt="image" height="1000" width="1000"/>
            </div>

            <div class="px-4 py-4">
                <h1 class="tracking-wide font-ralewaylight text-faqtextheader text-4xl">
                    About us
                </h1>
                <div class="justify-center">
                    <p class="tracking-wide text-faqtextheader font-cg">
                        We are a small business based in Vancouver, BC in Canada. We love eternal roses, but found that there weren't as many options available in Canada compared to other countries, and decided to create our own flower shop and offer high quality eternal roses at a competitive price.
                    </p>
                </div>
            </div>
        </div>
@endsection
