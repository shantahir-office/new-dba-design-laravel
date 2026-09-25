@props([
    'subtitle' => 'SERVICES',
    'title' => 'Comprehensive services your',
    'highlight' => 'digital needs',
    'description' =>
        'Our comprehensive services cover every aspect of your digital journey, offering innovative solutions for software development.',
    'services' => [
        [
            'title' => 'Visual Branding',
            'description' =>
                'Crafting cohesive and memorable brand identities that reflect your values, connect with your audience.',
            'icon' => 'assets/images/icons/icon2.svg',
            'url' => '#',
            'button' => 'Read More',
        ],
        [
            'title' => 'Website Development',
            'description' =>
                'Building modern, responsive, and high-performing websites tailored to your business needs.',
            'icon' => 'assets/images/icons/icon3.svg',
            'url' => '#',
            'button' => 'Read More',
        ],
        [
            'title' => 'App Development',
            'description' => 'Creating intuitive and engaging digital experiences that keep your users connected.',
            'icon' => 'assets/images/icons/icon4.svg',
            'url' => '#',
            'button' => 'Read More',
        ],
        [
            'title' => 'Video Animation',
            'description' => 'Developing scalable mobile applications designed for performance and usability.',
            'icon' => 'assets/images/icons/icon5.svg',
            'url' => '#',
            'button' => 'Read More',
        ],
        [
            'title' => 'Product Design',
            'description' =>
                'Helping your brand reach the right audience through effective digital marketing strategies.',
            'icon' => 'assets/images/icons/icon6.svg',
            'url' => '#',
            'button' => 'Read More',
        ],
        [
            'title' => 'Digital Marketing',
            'description' => 'Delivering custom software solutions that solve complex business challenges efficiently.',
            'icon' => 'assets/images/icons/icon7.svg',
            'url' => '#',
            'button' => 'Read More',
        ],
    ],
])

<div class="container 4xl:max-w-[1332px]!">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-end justify-between 4xl:gap-[75px] mb-20">

        <div>
            <div class="flex gap-2 items-center justify-start mb-4 xl:mb-6">
                <img loading="lazy" src="{{ asset('assets/images/icons/vector1.svg') }}" alt="vector icon"
                    class="w-auto h-auto" width="16" height="16">

                <span class="sub-title">
                    {{ $subtitle }}
                </span>
            </div>

            <h2 class="section-title max-w-[750px] text-start">
                {{ $title }}
                <span class="text-primary">
                    {{ $highlight }}
                </span>
            </h2>
        </div>

        <div class="flex flex-col justify-end">
            <p class="text-sm xl:text-base text-white">
                {{ $description }}
            </p>

            <div>
                <x-banner-btn btnClass="btn-primary" />
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 justify-between">

        @foreach ($services as $service)
            <div
                class="rounded-[30px] border-white border p-8 hover:bg-[#222020] flex flex-col justify-between hover:transform hover:scale-105 transition duration-300">

                <div class="mb-6 2xl:mb-10">
                    <span class="font-zen-dots text-lg xl:text-[22px] font-normal block mb-3">
                        {{ $service['title'] }}
                    </span>

                    <p>
                        {{ $service['description'] }}
                    </p>
                </div>


                <div class="flex items-center justify-between gap-4 border-t pt-6 2xl:pt-10 border-gray-900">

                    {{-- Service Icon --}}
                    <img loading="lazy" src="{{ asset($service['icon'] ?? 'assets/images/icons/icon2.svg') }}"
                        alt="{{ $service['title'] }}" class="w-[45px] h-[45px] object-scale-down shrink-0"
                        width="45" height="45">

                    {{-- Read More Button --}}
                    <a href="{{ $service['url'] ?? '#' }}"
                        class="inline-flex items-center justify-center gap-1.5 whitespace-nowrap shrink-0 bg-secondary text-primary 4xl:text-lg text-base rounded-[10px] font-bold px-4 py-2 hover:bg-white transition-all duration-300">
                        <span>
                            {{ $service['button'] ?? 'Read More' }}
                        </span>

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0">
                            <path
                                d="M16.1826 9.29233L7.91994 17.555L6.5625 16.1976L14.8242 7.93489H7.54266V6.01489H18.1026V16.5749H16.1826V9.29233Z"
                                fill="#A800D5" />
                        </svg>
                    </a>

                </div>

            </div>
        @endforeach

    </div>
</div>
