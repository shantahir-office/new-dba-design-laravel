@extends('components.layouts.web.master')
@section('main-content')
    {{-- Hero Banner Section Start --}}
    <section
        class="hero-banner min-h-auto lg:min-h-[calc(100dvh-85px)] 4xl:min-h-[calc(100dvh-107px)] relative flex flex-col justify-center items-center py-15 lg:py-5">
        <div class="container">
            <div class="row items-center justify-between">
                <div class="w-full xl:w-6/12 4xl:w-5/12">
                    <h1
                        class="font-normal text-black text-[25px] xl:text-[50px] 4xl:text-[92px] inline-block max-w-[683px] mb-3 leading-[1]">
                        Contact <br class="hidden 4xl:block">
                        <span class="text-primary">OMni</span><span class="text-secondary">paysol</span>
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
                    <img fetchpriority="High" src="{{ asset('assets/images/banners/contact-hero.webp') }}" alt="Hero Image"
                        class="w-[40vw] 4xl:w-[1123px] h-auto absolute bottom-0 4xl:-bottom-0 right-0 min-[1921px]:right-auto"
                        width="1123" height="793">
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






    {{-- Contact Us Section Start --}}
    <section class="">
        <div class="container 4xl:max-w-[1362px]!">
            <div class="grid lg:grid-cols-2 xl:grid-cols-[556px_1fr] grid-cols-1 items-center gap-15">


                <div class="bg-[#FDF0D1] rounded-[26px] px-7 py-10 lg:px-[38px] lg:py-[68px] max-w-[556px]">
                    <form class="contact-form mx-auto">
                        <div class="flex flex-col gap-2 lg:gap-[16px]">
                            <div class="div">
                                <input type="text"
                                    class="name bg-white h-[40px] xl:h-[60px] 2xl:h-[80px] w-full rounded-[10px] text-black placeholder:text-black text-sm 4xl:placeholder:text-[18px] font-light pl-[28px]"
                                    placeholder="Your Name" name="name" required>
                            </div>
                            <div class="div">
                                <input type="email"
                                    class="email bg-white h-[40px] xl:h-[60px] 2xl:h-[80px] w-full rounded-[10px] text-black placeholder:text-black text-sm 4xl:placeholder:text-[18px] font-light pl-[28px]"
                                    placeholder="Your Email" name="email">
                            </div>
                            <div class="div">
                                <input type="tel"
                                    class="phone bg-white h-[40px] xl:h-[60px] 2xl:h-[80px] w-full rounded-[10px] text-black placeholder:text-black text-sm 4xl:placeholder:text-[18px] font-light pl-[28px]"
                                    placeholder="Your Phone" name="phone">
                            </div>
                            <div class="div">
                                <textarea
                                    class="message bg-white h-[140px] xl:h-[179px] w-full rounded-[10px] text-black placeholder:text-black text-sm 4xl:placeholder:text-[18px] font-light p-3 lg:p-[28px]"
                                    placeholder="Your Message" name="message" required></textarea>
                            </div>
                        </div>
                        <div class=" border-1 border-danger my-2 bg-white p-1 rounded-2 text-danger mb-3 w-100"
                            style="display:none" id="errormsg"></div>
                        <div class="mt-3 lg:mt-[24px]">
                            <x-banner-btn btnClass="btn-primary contactformsubmit" text="SUBMIT"
                                href="javascript:void(0)" />
                        </div>

                    </form>
                </div>

                <div class="max-w-[744px]">
                    <div class="border-b border-black pb-4 mb-7">
                        <span class="font-bebas-neue text-[30px] 4xl:text-[42px] block text-black">Call Us:</span>
                        <p class="font-poppins font-light 4xl:text-lg leading-[1.7] max-w-[697px]">Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar
                            dapibus leo.</p>
                        <div class="group">
                            <a href="tel:{{ config('var.phone') }}" aria-label="call icon"
                                class="flex items-center text-[25px] 4xl:text-[30px] font-bebas-neue gap-4">
                                <span
                                    class="flex justify-center items-center size-[50px] bg-transparent border-primary border rounded-lg group-hover:bg-primary">
                                    <img loading="lazy" src="{{ asset('assets/images/icons/call1.svg') }}" alt="call icon"
                                        class="h-auto group-hover:transform group-hover:scale-105 transition-all duration-300 group-hover:brightness-0 group-hover:invert"
                                        width="26" height="26">
                                </span>
                                {{ config('var.phone') }}
                            </a>
                        </div>
                    </div>
                    <div class="border-b border-black pb-4 mb-7">
                        <span class="font-bebas-neue text-[30px] 4xl:text-[42px] block text-black">Visit Us:</span>
                        <p class="font-poppins font-light 4xl:text-lg leading-[1.7] max-w-[697px]">Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar
                            dapibus leo.</p>
                        <div class="group flex items-center text-[25px] 4xl:text-[30px] font-bebas-neue gap-4">
                            <span
                                class="flex justify-center items-center size-[50px] bg-transparent border-primary border rounded-lg group-hover:bg-primary">
                                <img loading="lazy" src="{{ asset('assets/images/icons/map.svg') }}" alt="address icon"
                                    class="h-auto group-hover:transform group-hover:scale-105 transition-all duration-300 group-hover:brightness-0 group-hover:invert"
                                    width="26" height="26">
                            </span>
                            {{ config('var.address') }}
                        </div>
                    </div>
                    <div class="">
                        <span class="font-bebas-neue text-[30px] 4xl:text-[42px] block text-black">Live Chat:</span>
                        <p class="font-poppins font-light 4xl:text-lg leading-[1.7] max-w-[697px]">Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar
                            dapibus leo.</p>
                        <div class="group flex items-center text-[25px] 4xl:text-[30px] font-bebas-neue gap-4" onclick="openChatWidget()">
                            <span
                                class="flex justify-center items-center size-[50px] bg-transparent border-primary border rounded-lg group-hover:bg-primary">
                                <img loading="lazy" src="{{ asset('assets/images/icons/chat.svg') }}" alt="chat icon"
                                    class="h-auto group-hover:transform group-hover:scale-105 transition-all duration-300 group-hover:brightness-0 group-hover:invert"
                                    width="26" height="26">
                            </span>
                            START CHAT
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact Us Section End --}}

    <section class="pt-0">
        <div class="container 4xl:max-w-[1451px]!">
            <div class="w-full">
                <iframe src="{{ config('var.address_iframe') }}" class="w-full h-[400px] 2xl:h-[610px] grayscale hover:grayscale-0 rounded-[26px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </div>
    </section>
@endsection
