@props(['active'])

@php
$classes = $active ?? false ? 'inline-flex items-center pink-hover nav-link fw-bold text-lg' : 'inline-flex text-lg'; 
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
