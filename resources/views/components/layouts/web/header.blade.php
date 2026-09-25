{{-- Menu Json Data --}}
@php
    $currentRoute = Route::currentRouteName();
    $menuItems = [
        ['title' => 'Home', 'route' => 'home'],
         ['title' => 'About Us', 'route' => 'about'],

        [
            'title' => 'Services',
            'route' => 'home',
            // 'dropdown' => [
            //     [
            //         'title' => 'Accounting Tools',
            //         'route' => 'accounting-tools',
            //         'items' => [
            //             // ['title' => 'Accept payments', 'route' => 'empty'],
            //         ],
            //     ],
            //     [
            //         'title' => 'POS (Point-of-Sale)',
            //         'route' => 'pos-point-of-sale',
            //         'items' => [
            //             ['title' => 'Peripheral Devices', 'route' => 'peripheral-devices'],
            //             ['title' => 'Clover', 'route' => 'clover'],
            //             ['title' => 'PAX', 'route' => 'pax'],
            //             ['title' => 'NRS', 'route' => 'nrs'],
            //             ['title' => 'Dejavoo', 'route' => 'dejavoo'],
            //             ['title' => 'Valor', 'route' => 'valor'],
            //         ],
            //     ],
            //     [
            //         'title' => 'In-Store ATMs',
            //         'route' => 'in-store-atms',
            //         'items' => [
            //             // ['title' => 'Rewards Programs', 'route' => 'empty'],
                       
            //         ],
            //     ],
            // ],
        ],
       
       
        ['title' => 'Contact Us', 'route' => 'contact'],
    ];
    // Updated Active route checker to handle submenus
    function isActiveRoute($route, $currentRoute, $dropdown = null)
    {
        if ($currentRoute === $route) {
            return true;
        }

        if ($dropdown) {
            foreach ($dropdown as $d) {
                if (isset($d['route']) && $currentRoute === $d['route']) {
                    return true;
                }

                if (isset($d['items'])) {
                    foreach ($d['items'] as $subItem) {
                        if ($currentRoute === $subItem['route']) {
                            return true;
                        }
                    }
                }

                if (isset($d['submenu'])) {
                    foreach ($d['submenu'] as $submenuItem) {
                        if ($currentRoute === $submenuItem['route']) {
                            return true;
                        }
                    }
                }
            }
        }

        return false;
    }
@endphp


{{-- header --}}
<div class="w-full nav-bar absolute top-0 left-0 z-50 border-b border-gray-500/30">
    <div class="container 4xl:max-w-[1483px]!">
        <nav class="relative z-11 flex w-full flex-nowrap items-center justify-between xl:flex-wrap xl:justify-start xl:py-3 4xl:py-[23px] px-[12px]"
            data-twe-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between gap-2 pt-2 pb-2 xl:pt-0 xl:pb-0">
                <!-- Logo + Hamburger -->
                <div class="flex w-full items-center justify-between xl:w-auto xl:justify-start xl:gap-4">
                    <!-- Logo Left -->
                    <a class="text-xl text-white" href="{{ route('home') }}">
                        <img loading="lazy" src="{{ asset('assets/images/logo/logo-white.png') }}" alt="logo white"
                            width="254" height="47" class="object-contain w-[clamp(200px,14vw,300px)] h-auto">
                    </a>
                    <!-- Hamburger Right for Mobile -->
                    <button class="block border-0 bg-transparent px-0 xl:hidden" type="button"
                        data-twe-offcanvas-toggle href="#offcanvasExample" role="button" aria-label="Open menu"
                        aria-controls="offcanvasExample" data-twe-ripple-init data-twe-ripple-color="light">
                        <span class="[&>svg]:w-12 [&>svg]:stroke-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" class="object-contain">
                                <path d="M4 6H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                <path d="M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                <path d="M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="!visible mb-2 xl:mb-0 hidden flex-grow basis-[100%] items-center gap-[90px] xl:mt-0 xl:!flex xl:basis-auto bg-primary xl:bg-transparent p-4 xl:p-0 rounded-md"
                    id="navbarSupportedContent1" data-twe-collapse-item>
                    <ul class="list-style-none menu-items xl:ms-auto flex flex-col ps-0 xl:flex-row gap-4 xl:gap-10 xl:gap-7 xl:items-baseline"
                        data-twe-navbar-nav-ref>
                        @foreach ($menuItems as $item)
                            @if (isset($item['dropdown']))
                                <li class="relative group">

                                    <a href="{{ route($item['route']) }}"
                                        class="flex items-center gap-1 p-0 transition-all duration-200 hover:ease-in-out hover:text-black text-sm 2xl:text-lg {{ isActiveRoute($item['route'], $currentRoute, $item['dropdown']) ? '!text-primary font-bold' : 'text-black font-normal' }}"
                                        data-twe-nav-link-ref>

                                        {{ $item['title'] }}

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </a>

                                    <!-- Main Dropdown -->
                                    <div
                                        class="absolute left-0 top-full pt-3 z-50
    invisible opacity-0 translate-y-2
    transition-all duration-300
    group-hover:visible
    group-hover:opacity-100
    group-hover:translate-y-0">

                                        <div
                                            class="w-[320px] rounded-xl bg-primary/90 p-4">

                                            <ul class="space-y-2">

                                                @foreach ($item['dropdown'] as $dropdown)
                                                    <li class="relative group/submenu">

                                                        <a href="{{ route($dropdown['route']) }}"
                                                            class="flex items-center justify-between px-3 py-2 rounded hover:bg-white/10 text-white">

                                                            {{ $dropdown['title'] }}

                                                            @if (count($dropdown['items']))
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M9 5l7 7-7 7" />
                                                                </svg>
                                                            @endif
                                                        </a>

                                                        @if (count($dropdown['items']))
                                                            <ul
                                                                class="absolute left-full top-0 ml-2 w-[240px]
                            rounded-xl bg-primary/90 p-3
                            invisible opacity-0
                            transition-all duration-300
                            group-hover/submenu:visible
                            group-hover/submenu:opacity-100">

                                                                @foreach ($dropdown['items'] as $subItem)
                                                                    <li>
                                                                        <a href="{{ route($subItem['route']) }}"
                                                                            class="block px-3 py-2 rounded hover:bg-white/10 text-white">
                                                                            {{ $subItem['title'] }}
                                                                        </a>
                                                                    </li>
                                                                @endforeach

                                                            </ul>
                                                        @endif

                                                    </li>
                                                @endforeach

                                            </ul>

                                        </div>

                                    </div>

                                </li>
                            @else
                                <li class="relative" data-twe-nav-item-ref>
                                    <a class="p-0 transition-all duration-200 hover:ease-in-out hover:text-primary text-white text-sm 2xl:text-base font-zen-dots {{ $currentRoute === $item['route'] ? '!text-primary font-bold' : 'font-normal' }}"
                                        href="{{ route($item['route']) }}" data-twe-nav-link-ref>
                                        {{ $item['title'] }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    {{-- <div class="flex items-center justify-center">
                        <x-live-chat-button text="Contact Us" tag="a" href="{{ route('contact') }}"  />
                    </div> --}}
                </div>
            </div>
        </nav>
    </div>
</div>


<!-- Mobile offcanvas menu -->
<div class="fixed top-0! left-0 z-[1045] flex w-[250px] h-full -translate-x-full flex-col border-none bg-white bg-clip-padding text-primary shadow-sm outline-none transition duration-300 ease-in-out [&[data-twe-offcanvas-show]]:translate-x-0 xl:hidden"
    tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" data-twe-offcanvas-init>
    <div class="flex items-center justify-between p-4 border-gray-200 border-b">
        <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="logo white" width="150" height="80"
            class="object-contain h-auto" loading="lazy">
        <button type="button"
            class="box-content rounded-none border-none text-black hover:text-black hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none"
            data-twe-offcanvas-dismiss aria-label="Close">
            <span class="[&>svg]:h-6 [&>svg]:w-6 [&>svg]:w-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </span>
        </button>
    </div>
    <div class="flex-grow p-4 h-auto overflow-y-auto header_overflow">
        <ul class="list-style-none menu-items xl:mx-auto flex flex-col ps-0 xl:flex-row relative xl:gap-28 [&>li]:pb-3 [&>li]:mb-3 [&>li]:border-b-gray-800/10 [&>li]:border-b"
            data-twe-navbar-nav-ref>
            @foreach ($menuItems as $item)
                @if (isset($item['dropdown']))
                    <li class="relative border-b border-gray-800/10 pb-3 mb-3 text-base text-black">
                        <details>
                            <summary class="flex items-center justify-between cursor-pointer list-none"
                                onclick="event.preventDefault()">
                                <a href="{{ route($item['route']) }}" onclick="event.stopPropagation()"
                                    class="{{ isActiveRoute($item['route'], $currentRoute, $item['dropdown']) ? '!font-bold text-primary' : 'text-black' }}">
                                    {{ $item['title'] }}
                                </a>
                                <button type="button"
                                    onclick="event.stopPropagation(); const details = this.closest('details'); details.open = !details.open;"
                                    class="flex items-center justify-center p-1 text-primary"
                                    aria-label="Toggle solutions submenu">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </summary>
                            <ul class="pl-1 mt-3 space-y-3">
                                @foreach ($item['dropdown'] as $dropdown)
                                    @if (!in_array($dropdown['title'], ['Integrations', 'Industries', 'More Industries']))
                                        <li class="space-y-1">
                                            <a href="{{ route($dropdown['route']) }}"
                                                class="text-[13px] font-semibold text-slate-900 transition hover:text-secondary block mb-3">
                                                {{ $dropdown['title'] }}
                                            </a>
                                            <ul class="pl-2 space-y-2">
                                                @foreach ($dropdown['items'] as $subItem)
                                                    <li>
                                                        <a href="{{ route($subItem['route']) }}"
                                                            class="block text-xs text-primary">
                                                            {{ $subItem['title'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        @foreach ($dropdown['items'] as $subItem)
                                            <li>
                                                <a href="{{ route($subItem['route']) }}"
                                                    class="block text-xs text-primary">
                                                    {{ $subItem['title'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                @endforeach
                            </ul>
                        </details>
                    </li>
                @else
                    <li class="relative" data-twe-nav-item-ref>
                        <a class="p-0 transition-all duration-200 hover:ease-in-out hover:text-black text-light text-base! {{ $currentRoute === $item['route'] ? '!text-black !font-bold' : '' }}"
                            href="{{ route($item['route']) }}" data-twe-nav-link-ref>
                            {{ $item['title'] }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
