@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center pink font-bold'
: 'inline-flex items-center pink font-bold'
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>