@extends('components.layouts.web.master')
@section('main-content')
    {{-- Hero Banner Section Start --}}
    <section
        class="hero-banner min-h-auto lg:min-h-[calc(100dvh-85px)] 4xl:min-h-[calc(100dvh-235px)] relative flex flex-col justify-center items-center py-15 lg:py-5">
        <div class="container">
            <div class="row items-center justify-between">
                <div class="w-full xl:w-6/12 4xl:w-5/12">
                    <h1
                        class="font-normal text-black text-[25px] xl:text-[50px] 4xl:text-[92px] inline-block max-w-[683px] mb-3 leading-[1]">
                        Flow Your Payment
                        Seamlessly with <br class="hidden 4xl:block">
                        <span class="text-primary">OMni</span><span class="text-secondary">paysol</span> Anywhere
                    </h1>
                    <p class="max-w-[683px] 4xl:text-[22px] font-light 4xl:leading-[2] mb-7">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                    </p>
                    <div class="flex flex-wrap gap-3 lg:gap-6">
                        <x-banner-btn btnClass="btn-primary" />
                        <x-live-chat-button text="Live Chat" />
                    </div>
                </div>
                <div class="lg:w-1/2 4xl:w-6/12 hidden xl:block px-0">
                    <img fetchpriority="High" src="{{ asset('assets/images/banners/hero-img.webp') }}" alt="Hero Image"
                        class="w-[40vw] 4xl:w-[761px] h-auto ms-auto" width="761" height="624">
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Banner Section End --}}


    {{-- Marquee Section Start --}}
    <section class="relative h-[100px] lg:h-[150px] overflow-hidden 4xl:max-w-[1920px] mx-auto">
        <x-marquee />
    </section>
    {{-- Marquee Section End --}}


    {{-- Leading Experts Section Start --}}
    <section class="bg-white border-b border-gray-400 viewport-section">
        <x-why-choose-us />
    </section>
    {{-- Leading Experts Section End --}}

    {{-- Trusted Partner Section Start --}}
    <section>
        <x-trusted-partners />
    </section>
    {{-- Trusted Partner Section End --}}

    {{-- Cta Section Start --}}
    <section class="py-0">
        <x-cta />
    </section>
    {{-- Cta Section End --}}

    {{-- Counter Section Start --}}
    <section class="pt-5">
        <x-counter />
    </section>
    {{-- Counter Section End --}}


    <section class="overflow-hidden bg-secondary viewport-section">
        <x-services />
    </section>

    {{-- Cta 1 Section Start --}}
    <section class="bg-primary xl:pb-0 xl:pt-0">
        <x-cta1 />
    </section>
    {{-- Cta 1 Section End - --}}


    {{-- FAQ Section Start --}}
    <section class=" 4xl:py-[60px]">
        <x-faqs />
    </section>
    {{-- FAQ Section End --}}


    {{-- Testimonilas Section Start --}}
    <section
        class="bg-primary bg-center bg-cover bg-no-repeat  lg:bg-[linear-gradient(0deg,rgba(255,255,255,1)_11%,rgba(43,42,108,1)_6%)] pb-0 pt-10">
        <x-testimonials />
    </section>
    {{-- Testimonilas Section End --}}


    {{-- Blog Section Start --}}
    <section class="overflow-hidden viewport-section">
        <x-blogs-card />
    </section>
    {{-- Blog Section End --}}
@endsection
