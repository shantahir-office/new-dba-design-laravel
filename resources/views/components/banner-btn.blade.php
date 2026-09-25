@props([
    'text' => "Let's Get Started",
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
    <a href="{{ $href ?? route('Web_Sequence_1') }}" class="{{ $linkClass }}" aria-label="{{ $ariaLabel ?? $text }}"
        @if ($function) onclick="{{ $function }}" @endif>
        <span class="{{ $textClass }}">
            {{ $text }}
        </span>

        @if ($showIcon)
            <span class="{{ $iconClass }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                    stroke-linejoin="round" class="{{ $svgClass }}">
                    <polyline points="3 17 10 10 14 14 21 6"></polyline>
                    <polyline points="15 6 21 6 21 12"></polyline>
                </svg>
            </span>
        @endif
    </a>
</div>
{{-- <a href="#" class="{{ $btnClass }}" aria-label="{{ $ariaLabel }}">
    {{ $text }}
</a> --}}
