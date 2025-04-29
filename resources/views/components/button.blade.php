@props([
    'type' => 'button',
    'variant' => 'primary'
    ])

    @php
    $classes = match($variant){
    'primary' => 'btn btn-primary',
    'secondary' => 'btn btn-secondary',
    'defblue' => 'btn btn-defblue',
    'defyellow' => 'btn btn-defyellow'
    };
    @endphp

    <button type="{{ $type }}" class="{{ $classes }}">
        {{ $slot }}
    </button>