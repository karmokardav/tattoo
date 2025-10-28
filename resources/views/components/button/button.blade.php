<!-- @props([
    'text' => 'Click Me',
    'link' => '#',
    'type' => 'primary',
])

@php
    $baseClasses = "px-6 py-3 rounded-lg font-semibold transition duration-200 inline-block";

    if ($type === 'primary') {
        $classes = "$baseClasses bg-yellow-500 hover:bg-yellow-600 text-black";
    } elseif ($type === 'outline') {
        $classes = "$baseClasses border border-yellow-500 text-yellow-400 hover:bg-yellow-500 hover:text-black";
    } elseif ($type === 'dark') {
        $classes = "$baseClasses bg-gray-800 hover:bg-gray-700 text-white";
    } else {
        $classes = "$baseClasses bg-gray-500 text-white";
    }
@endphp

<a href="{{ $link }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $text }}
</a> -->

<!-- 
use like this

<x-button text="Book Now" link="/book" type="primary" />
<x-button text="View Gallery" link="/gallery" type="outline" />
<x-button text="Dark Button" link="#" type="dark" />
 -->

 <!-- 
 icons use
 
 <x-button type="primary" link="/book">
    <i class="fa-solid fa-calendar-check mr-2"></i> Book Now
</x-button>
-->

