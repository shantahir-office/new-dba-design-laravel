@props([
    'text' => "Get Started",
    'href' => null,

    // Main classes
    'btnClass' => 'btn-secondary',
    'linkClass' => 'btn-link',
    'textClass' => 'btn-text',
    'iconClass' => 'btn-icon',
    'svgClass' => 'size-5',

    'ariaLabel' => null,
    'function' => null,
    'showIcon' => true,
])

<div class="{{ $btnClass }}">
    <a href="{{ $href ?? route('contact') }}" class="{{ $linkClass }}" aria-label="{{ $ariaLabel ?? $text }}"
        @if ($function) onclick="{{ $function }}" @endif>
        <span class="{{ $textClass }}">
            {{ $text }}
        </span>

        @if ($showIcon)
            <span class="{{ $iconClass }}">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.1826 9.29233L7.91994 17.555L6.5625 16.1976L14.8242 7.93489H7.54266V6.01489H18.1026V16.5749H16.1826V9.29233Z"
                        fill="white" />
                </svg>

            </span>
        @endif
    </a>
</div>
{{-- <a href="#" class="{{ $btnClass }}" aria-label="{{ $ariaLabel }}">
    {{ $text }}
</a> --}}
