@props([
'variant' => 'primary',
'href' => null,
])

@php

$variants = [

'primary' => 'btn btn-primary',

'secondary' => 'btn btn-secondary',

'outline' => 'btn btn-outline',

'danger' => 'btn btn-danger',

];

@endphp

@if ($href)

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => $variants[$variant]
    ]) }}>

    {{ $slot }}

</a>

@else

<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => $variants[$variant]
    ]) }}>

    {{ $slot }}

</button>

@endif