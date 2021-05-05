@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300
focus:border-navy focus:ring focus:ring-navy focus:ring-opacity-50']) !!}>