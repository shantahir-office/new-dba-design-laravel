<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.layouts.web.head')
    @stack('styles')
</head>

<body class="loading">
    @include('components.layouts.web.header')
    @endif

    <main>
        @yield('main-content')
    </main>

    @include('components.layouts.web.footer')
    @endif

    @include('components.layouts.web.scripts')
    @stack('scripts')
</body>

</html>
