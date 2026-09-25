<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ $title ?? '' }}</title>
<meta name="description" content="{{ $description ?? '' }}">
<meta name="keywords" content="{{ $keywords ?? '' }}">
<link rel="icon" type="images/jpg" href="{{ asset('assets/images/logo/favicon/favicon.ico') }}">
<link rel="icon" type="image/png" href="{{ asset('assets/images/logo/favicon/favicon-96x96.png') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/logo/favicon/favicon.svg') }}" />
<link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon/favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo/favicon/apple-touch-icon.png') }}" />
<link rel="manifest" href="{{ asset('assets/images/logo/favicon/site.webmanifest') }}" />



{{-- Preload Hero Banner Image --}}
<link rel="preload" as="image" href="{{ asset('assets/images/banners/hero-img.webp') }}" type="image/webp"
    fetchpriority="high" imagesizes="100vw">

<link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</noscript>
{{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet"> --}}


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="preload" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" as="style"
    onload="this.onload=null;this.rel='stylesheet'">

<noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
</noscript>

<script>
    (function() {
        let fontsLoaded = false;

        function loadFonts() {
            if (fontsLoaded) return;
            fontsLoaded = true;

            // Poppins
            const poppins = document.createElement('link');
            poppins.rel = 'stylesheet';
            poppins.href =
                'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap';
            document.head.appendChild(poppins);
        }

        // First user interaction  load
        ['scroll', 'mousemove', 'touchstart', 'keydown', 'click'].forEach(event => {
            window.addEventListener(event, loadFonts, {
                once: true,
                passive: true
            });
        });

        // Fallback: 
        setTimeout(loadFonts, 10000);
    })();
</script>

<noscript>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap">
</noscript>

{{-- intelinput CDN --}}
<link rel="preload" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.min.css"
    as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.min.css">
</noscript>

@vite('resources/css/app.css')
