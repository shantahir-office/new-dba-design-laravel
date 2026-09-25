@props([
    'text' => 'Live Chat',
    'btnClass' => 'btn-outline-primary',
    'tag' => 'button',
    'href' => '#',
])

@if ($tag === 'a')
    <a href="{{ $href }}" class="{{ $btnClass }}">
        {{ $text }}
    </a>
@else
    <button type="button" class="{{ $btnClass }}" onclick="openChatWidget()">
        {{ $text }}
    </button>
@endif
