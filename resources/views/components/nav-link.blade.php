@props(['active'])

@php
$classes = $active ?? false ? 'inline-flex items-center text-base nav-link fw-bold' : 'inline-flex items-center pink-hover nav-link fw-bold'; 
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
