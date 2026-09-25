@extends('components.layouts.web.master')
@section('main-content')
    <section
        class="hero-banner min-h-auto lg:min-h-dvh relative flex flex-col justify-center items-center pb-0 bg-white lg:bg-[url('/assets/images/banners/home-banner.webp')] pt-[85px] pb-[105px]">
        <div class="container">
            <div class="row items-start justify-center">
                <div class="w-full lg:w-7/10 text-center ">

                    <h1 class="font-bold text-primary text-[clamp(28px,2.9vw,55px)] inline-block">
                        Thank You for Contacting OmniPaySol!
                    </h1>
                    <p><strong> Your request has been successfully received.</strong>
                    </p>

                    {{-- <span
                        class="text-[clamp(21px,2.5vw,40px)] lg:leading-10 block mb-2 after:content-[''] after:block after:w-full after:h-1 after:border-b-1 after:p-2 after:border-[#8BA49A]">for
                        small business, entrepreneurs, <br class="hidden lg:block">and established
                        enterprises.</span> --}}
                    <div class="max-w-3xl mx-auto">
                        <p>Thank you for reaching out to OmniPaySol. We've received your information, and one of our
                            payment
                            solutions specialists will review your inquiry and get back to you as soon as possible,
                            typically
                            within <strong>24 to 48 business hours.</strong>
                        </p>
                        <p>
                            If you need immediate assistance or would like to provide additional details, feel free to
                            contact us at <a href="mailto:{{ config('var.email') }}" class="font-bold">{{ config('var.email') }} </a>
                            or call <a href="tel:{{ config('var.phone') }}" class="font-bold">{{ config('var.phone') }}.</a>

                        </p>
                        <p>We appreciate the opportunity to support your business and look forward to helping you find the
                            right payment solution.
                        </p>
                    </div>
                    <x-banner-btn href="{{ route('home') }}" text="Back to Home" />
                </div>
            </div>

        </div>
    </section>
@endsection
