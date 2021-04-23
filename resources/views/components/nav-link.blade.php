@props(['active'])

@php
$classes = $active ?? false ? 'inline-flex items-center nav-link fw-bold text-lg' : 'inline-flex items-center text-lg pink-hover nav-link fw-bold'; 
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
