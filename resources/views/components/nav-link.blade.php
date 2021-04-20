@props(['active'])

@php
$classes = $active ?? false ? 'inline-flex items-center  font-bold text-lg' : 'inline-flex items-center  font-bold text-lg';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
