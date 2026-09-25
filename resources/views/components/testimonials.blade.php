{{-- @php
    $testimonials = [
        [
            'title' => 'Everything Works Seamlessly',
            'quote' =>
                'Implementing this POS solution has completely transformed the way we manage our business. From faster checkout and accurate inventory tracking to detailed sales reporting, everything works seamlessly.',
            'name' => 'Michael R.',
            'role' => 'Retail Business Owner',
            'image' => 'assets/images/testimonoilas/client_1.webp',
        ],
        [
            'title' => 'Improved Overall Customer Experience',
            'quote' =>
                'We were looking for a dependable payment solution that could handle high customer traffic. The wireless terminals have made tableside and counter payments incredibly convenient, while the system’s reliability has improved the overall customer experience.',
            'name' => 'Sarah L.',
            'role' => 'Restaurant Manager',
            'image' => 'assets/images/testimonoilas/client_2.webp',
        ],
        [
            'title' => 'Gain Visibility into Key Operations',
            'quote' =>
                'Managing payments across multiple locations used to be challenging, but this platform has simplified everything. The integrated POS, accounting tools, and real-time reporting give us complete visibility into our operations.',
            'name' => 'David P.',
            'role' => 'Multi-Location Business Owner',
            'image' => 'assets/images/testimonoilas/client_3.webp',
        ],
    ];
@endphp --}}

<div class="w-full ">
    <div class="container 4xl:max-w-[1738px]!">
        <div class="mx-auto mb-10 max-w-5xl text-center lg:mb-10 4xl:mb-8">
            <h2 class="section-title mb-4 !text-center !text-white lg:mb-2">
                What Our Clients Says.
            </h2>
            <p class="mb-0 text-sm leading-relaxed text-white font-poppins xl:text-base 4xl:text-xl">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper.
            </p>
        </div>

        <div class="relative">
            <div class="swiper testimonialSwiper w-full !pb-9">
                <div class="swiper-wrapper items-stretch">
                    {{-- Card 1 --}}
                    <div class="swiper-slide h-auto">
                        <div
                            class="group relative flex h-full max-w-[552px] flex-col rounded-[26.67px] bg-white p-6 text-primary shadow-xl transition-all duration-300 hover:bg-secondary hover:text-primary 4xl:p-9">

                            <div class="mt-auto flex items-start gap-3">
                                <img loading="lazy" src="{{ asset('assets/images/testimonoilas/client_1.webp') }}"
                                    alt="John H." width="63" height="63"
                                    class="size-[63px] shrink-0 rounded-full object-cover">

                                <div class="flex flex-col text-start">
                                    <span
                                        class="font-poppins text-sm font-semibold text-primary xl:text-base 4xl:text-[24px]">
                                        John H.
                                    </span>

                                    <small class="font-poppins text-xs text-primary/90 xl:text-sm 4xl:text-base">
                                        Online Merchandise Seller
                                    </small>

                                    <div class="my-2 flex items-center gap-1">
                                        <x-stars rating="5" />
                                    </div>
                                </div>
                            </div>

                            <div class="mt-[28px]">
                                <span class="font-bebas-neue text-[18px] text-primary xl:text-[22px] 4xl:text-[32px]">
                                    You have right place
                                </span>

                                <p
                                    class="mt-2 font-normal text-sm leading-relaxed xl:text-base 4xl:text-lg max-w-[458px]">
                                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>

                            <img loading="lazy" src="{{ asset('assets/images/icons/quote.svg') }}" alt="Quote"
                                width="171" height="171"
                                class="absolute right-5 top-0 object-cover 2xl:w-[171px] h-auto w-[120px]">
                        </div>
                    </div>
                    {{-- Card 1 --}}
                    <div class="swiper-slide h-auto">
                        <div
                            class="group relative flex h-full max-w-[552px] flex-col rounded-[26.67px] bg-white p-6 text-primary shadow-xl transition-all duration-300 hover:bg-secondary hover:text-primary 4xl:p-9">

                            <div class="mt-auto flex items-start gap-3">
                                <img loading="lazy" src="{{ asset('assets/images/testimonoilas/client_1.webp') }}"
                                    alt="John H." width="63" height="63"
                                    class="size-[63px] shrink-0 rounded-full object-cover">

                                <div class="flex flex-col text-start">
                                    <span
                                        class="font-poppins text-sm font-semibold text-primary xl:text-base 4xl:text-[24px]">
                                        John H.
                                    </span>

                                    <small class="font-poppins text-xs text-primary/90 xl:text-sm 4xl:text-base">
                                        Online Merchandise Seller
                                    </small>

                                    <div class="my-2 flex items-center gap-1">
                                        <x-stars rating="5" />
                                    </div>
                                </div>
                            </div>

                            <div class="mt-[28px]">
                                <span class="font-bebas-neue text-[18px] text-primary xl:text-[22px] 4xl:text-[32px]">
                                    You have right place
                                </span>

                                <p
                                    class="mt-2 font-normal text-sm leading-relaxed xl:text-base 4xl:text-lg max-w-[458px]">
                                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>

                            <img loading="lazy" src="{{ asset('assets/images/icons/quote.svg') }}" alt="Quote"
                                width="171" height="171"
                                class="absolute right-5 top-0 object-cover 2xl:w-[171px] h-auto w-[120px]">
                        </div>
                    </div>
                    {{-- Card 1 --}}
                    <div class="swiper-slide h-auto">
                        <div
                            class="group relative flex h-full max-w-[552px] flex-col rounded-[26.67px] bg-white p-6 text-primary shadow-xl transition-all duration-300 hover:bg-secondary hover:text-primary 4xl:p-9">

                            <div class="mt-auto flex items-start gap-3">
                                <img loading="lazy" src="{{ asset('assets/images/testimonoilas/client_1.webp') }}"
                                    alt="John H." width="63" height="63"
                                    class="size-[63px] shrink-0 rounded-full object-cover">

                                <div class="flex flex-col text-start">
                                    <span
                                        class="font-poppins text-sm font-semibold text-primary xl:text-base 4xl:text-[24px]">
                                        John H.
                                    </span>

                                    <small class="font-poppins text-xs text-primary/90 xl:text-sm 4xl:text-base">
                                        Online Merchandise Seller
                                    </small>

                                    <div class="my-2 flex items-center gap-1">
                                        <x-stars rating="5" />
                                    </div>
                                </div>
                            </div>

                            <div class="mt-[28px]">
                                <span class="font-bebas-neue text-[18px] text-primary xl:text-[22px] 4xl:text-[32px]">
                                    You have right place
                                </span>

                                <p
                                    class="mt-2 font-normal text-sm leading-relaxed xl:text-base 4xl:text-lg max-w-[458px]">
                                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>

                            <img loading="lazy" src="{{ asset('assets/images/icons/quote.svg') }}" alt="Quote"
                                width="171" height="171"
                                class="absolute right-5 top-0 object-cover 2xl:w-[171px] h-auto w-[120px]">
                        </div>
                    </div>
                    {{-- Card 1 --}}
                    <div class="swiper-slide h-auto">
                        <div
                            class="group relative flex h-full max-w-[552px] flex-col rounded-[26.67px] bg-white p-6 text-primary shadow-xl transition-all duration-300 hover:bg-secondary hover:text-primary 4xl:p-9">

                            <div class="mt-auto flex items-start gap-3">
                                <img loading="lazy" src="{{ asset('assets/images/testimonoilas/client_1.webp') }}"
                                    alt="John H." width="63" height="63"
                                    class="size-[63px] shrink-0 rounded-full object-cover">

                                <div class="flex flex-col text-start">
                                    <span
                                        class="font-poppins text-sm font-semibold text-primary xl:text-base 4xl:text-[24px]">
                                        John H.
                                    </span>

                                    <small class="font-poppins text-xs text-primary/90 xl:text-sm 4xl:text-base">
                                        Online Merchandise Seller
                                    </small>

                                    <div class="my-2 flex items-center gap-1">
                                        <x-stars rating="5" />
                                    </div>
                                </div>
                            </div>

                            <div class="mt-[28px]">
                                <span class="font-bebas-neue text-[18px] text-primary xl:text-[22px] 4xl:text-[32px]">
                                    You have right place
                                </span>

                                <p
                                    class="mt-2 font-normal text-sm leading-relaxed xl:text-base 4xl:text-lg max-w-[458px]">
                                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>

                            <img loading="lazy" src="{{ asset('assets/images/icons/quote.svg') }}" alt="Quote"
                                width="171" height="171"
                                class="absolute right-5 top-0 object-cover 2xl:w-[171px] h-auto w-[120px]">
                        </div>
                    </div>
                    {{-- Card 1 --}}
                    <div class="swiper-slide h-auto">
                        <div
                            class="group relative flex h-full max-w-[552px] flex-col rounded-[26.67px] bg-white p-6 text-primary shadow-xl transition-all duration-300 hover:bg-secondary hover:text-primary 4xl:p-9">

                            <div class="mt-auto flex items-start gap-3">
                                <img loading="lazy" src="{{ asset('assets/images/testimonoilas/client_1.webp') }}"
                                    alt="John H." width="63" height="63"
                                    class="size-[63px] shrink-0 rounded-full object-cover">

                                <div class="flex flex-col text-start">
                                    <span
                                        class="font-poppins text-sm font-semibold text-primary xl:text-base 4xl:text-[24px]">
                                        John H.
                                    </span>

                                    <small class="font-poppins text-xs text-primary/90 xl:text-sm 4xl:text-base">
                                        Online Merchandise Seller
                                    </small>

                                    <div class="my-2 flex items-center gap-1">
                                        <x-stars rating="5" />
                                    </div>
                                </div>
                            </div>

                            <div class="mt-[28px]">
                                <span class="font-bebas-neue text-[18px] text-primary xl:text-[22px] 4xl:text-[32px]">
                                    You have right place
                                </span>

                                <p
                                    class="mt-2 font-normal text-sm leading-relaxed xl:text-base 4xl:text-lg max-w-[458px]">
                                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>

                            <img loading="lazy" src="{{ asset('assets/images/icons/quote.svg') }}" alt="Quote"
                                width="171" height="171"
                                class="absolute right-5 top-0 object-cover 2xl:w-[171px] h-auto w-[120px]">
                        </div>
                    </div>
                    {{-- Card 1 --}}
                    <div class="swiper-slide h-auto">
                        <div
                            class="group relative flex h-full max-w-[552px] flex-col rounded-[26.67px] bg-white p-6 text-primary shadow-xl transition-all duration-300 hover:bg-secondary hover:text-primary 4xl:p-9">

                            <div class="mt-auto flex items-start gap-3">
                                <img loading="lazy" src="{{ asset('assets/images/testimonoilas/client_1.webp') }}"
                                    alt="John H." width="63" height="63"
                                    class="size-[63px] shrink-0 rounded-full object-cover">

                                <div class="flex flex-col text-start">
                                    <span
                                        class="font-poppins text-sm font-semibold text-primary xl:text-base 4xl:text-[24px]">
                                        John H.
                                    </span>

                                    <small class="font-poppins text-xs text-primary/90 xl:text-sm 4xl:text-base">
                                        Online Merchandise Seller
                                    </small>

                                    <div class="my-2 flex items-center gap-1">
                                        <x-stars rating="5" />
                                    </div>
                                </div>
                            </div>

                            <div class="mt-[28px]">
                                <span class="font-bebas-neue text-[18px] text-primary xl:text-[22px] 4xl:text-[32px]">
                                    You have right place
                                </span>

                                <p
                                    class="mt-2 font-normal text-sm leading-relaxed xl:text-base 4xl:text-lg max-w-[458px]">
                                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>

                            <img loading="lazy" src="{{ asset('assets/images/icons/quote.svg') }}" alt="Quote"
                                width="171" height="171"
                                class="absolute right-5 top-0 object-cover 2xl:w-[171px] h-auto w-[120px]">
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="swiper-pagination testimonial-swiper-pagination !relative !bottom-0 !top-auto mt-8">
            </div> --}}
        </div>
    </div>
</div>
