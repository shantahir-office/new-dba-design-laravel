@extends('components.layouts.web.master')
@section('main-content')
    {{-- Hero Banner Section Start --}}
    <section class="hero-banner min-h-[100dvh] relative flex flex-col justify-center items-center py-15 lg:py-5 bg-black">
        <div class="container">
            <div class="row items-center justify-center text-center">
                <div class="w-full xl:w-8/12">
                    <div class="flex gap-2 items-center justify-center mb-6">
                        <img src="{{ asset('assets/images/icons/vector1.svg') }}" alt="vector icon" class="w-auto h-auto"
                            width="16" height="16">
                        <span class="4xl:text-xl text-base font-normal text-white">WELCOME TO LOGO NAME COMPANY</span>
                    </div>
                    <h1
                        class="font-normal text-black text-[25px] xl:text-[50px] 4xl:text-[80px] inline-block  mb-3 leading-[1] text-white">
                        Driving innovation with custom <br>

                        <span class="text-primary">digital solutions</span>
                    </h1>
                    <div class="mt-5">
                        <x-banner-btn btnClass="btn-primary"
                            textClass="btn-text bg-[#333333] hover:bg-secondary hover:text-white xl:px-18" />
                    </div>
                </div>
            </div>
        </div>
        {{-- Marquee Section Start --}}
        <div class="absolute bottom-0 w-full">
            <x-marquee />
        </div>
        {{-- Marquee Section End --}}
    </section>
    {{-- Hero Banner Section End --}}

    {{-- About Us Section Start --}}
    <section class="relative overflow-hidden bg-black">
        {{-- Purple background glow --}}
        <div class="absolute right-0 top-0 h-full w-[45%] bg-purple-950/20 blur-3xl"></div>

        <div class="container">
            <div
                class="relative grid grid-cols-1 items-center justify-center gap-10 4xl:gap-15 lg:grid-cols-2 4xl:grid-cols-[610px_1fr]">
                <div class="flex justify-start gap-5 items-center">
                    {{-- Vertical ABOUT US --}}
                    <div class="hidden w-[90px] shrink-0 items-center justify-center lg:flex">
                        <div
                            class="text-[90px] 2xl:text-[119px] font-extrabold uppercase leading-[0.9] tracking-[-4px] [writing-mode:vertical-rl] rotate-180 bg-gradient-to-b from-primary via-purple-500 to-white bg-clip-text text-transparent font-monsterrat">
                            ABOUT US
                        </div>
                    </div>
                    <div class="hidden lg:block">
                        <img loading="lazy" src="{{ asset('assets/images/about1.webp') }}" alt="Our team" width="498"
                            height="599" class="h-auto object-cover">
                    </div>
                </div>

                <div class="relative">
                    <div class="flex gap-2 items-center justify-start mb-4 xl:mb-6">
                        <img loading="lazy" src="{{ asset('assets/images/icons/vector1.svg') }}" alt="vector icon"
                            class="w-auto h-auto" width="16" height="16">
                        <span class="sub-title">
                            About Us
                        </span>
                    </div>
                    <h2 class="section-title 4xl:text-[47px] max-w-[750px] text-start">
                        Innovative solutions for<br class="hidden xl:block"> modern
                        <span class="text-primary">
                            businesses
                        </span>
                    </h2>

                    {{-- Description --}}
                    <p class="xl:mt-8 max-w-[650px] text-sm xl:text-base leading-7 text-white">
                        Delivering cutting-edge technology and tailored solutions to
                        growth efficiency, and success in today’s fast-paced digital
                        world.
                    </p>

                    {{-- Features --}}
                    <div class="mt-7 space-y-4">

                        <div class="flex items-center gap-4">
                            <span
                                class="flex h-5 w-6 md:h-5 md:w-5 items-center justify-center rounded-full border-2 border-fuchsia-600">
                                <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                            </span>

                            <p class="text-xs 2xl:text-sm text-white mb-0 font-zen-dots">
                                Delivering Seamless Digital Experiences with User-Centric
                                Design
                            </p>
                        </div>

                        <div class="flex items-center gap-4">
                            <span
                                class="flex h-5 w-6 md:h-5 md:w-5 items-center justify-center rounded-full border-2 border-fuchsia-600">
                                <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                            </span>

                            <p class="text-xs 2xl:text-sm text-white mb-0 font-zen-dots">
                                Driving Success Through Agile Development and Cutting-Edge
                                Tools
                            </p>
                        </div>

                    </div>

                    {{-- Bottom Content --}}
                    <div class="mt-2 flex flex-col gap-8 sm:flex-row sm:items-end">

                        {{-- Support --}}
                        <div>
                            <span class="block text-[22px] font-bold text-primary font-monsterrat my-5">
                                24/7 Support
                            </span>

                            <p class="max-w-[360px] text-sm xl:text-base text-white">
                                Reliable 24/7 support ensure your business runs smoothly
                                anytime.
                            </p>

                            <div class="mt-5">
                                <x-banner-btn btnClass="btn-primary" />
                            </div>
                        </div>

                        {{-- Certification Card --}}
                        <div
                            class="w-full md:max-w-[230px] rounded-[20px] border border-fuchsia-700/70 bg-purple-950/10 px-6 py-7">
                            <img loading="lazy" src="{{ asset('assets/images/icons/icon1.svg') }}" alt="vector icon"
                                class="h-auto mb-6" width="40" height="40">
                            <span class="font-monsterrat text-sm xl:text-lg font-bold text-white">
                                We're Certified
                                <br>
                                Software Expert
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
 {{-- About Us Section End --}}

 <section class="viewport-section">
     <x-services />
 </section>



    {{-- Cta Section Start --}}
    {{-- <section class="py-0">
        <x-cta />
    </section> --}}
    {{-- Cta Section End --}}







    {{-- FAQ Section Start --}}
    {{-- <section class=" 4xl:py-[60px]">
        <x-faqs />
    </section> --}}
    {{-- FAQ Section End --}}


    {{-- Testimonilas Section Start --}}
    {{-- <section
        class="bg-primary bg-center bg-cover bg-no-repeat  lg:bg-[linear-gradient(0deg,rgba(255,255,255,1)_11%,rgba(43,42,108,1)_6%)] pb-0 pt-10">
        <x-testimonials />
    </section> --}}
    {{-- Testimonilas Section End --}}
@endsection
