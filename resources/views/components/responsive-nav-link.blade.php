@props(['active'])

@php
$classes = ($active ?? false)
? 'block border-l-4 border-navy-400'
: 'block border-l-4 border-transparent text-white font-medium text-white-600'
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>