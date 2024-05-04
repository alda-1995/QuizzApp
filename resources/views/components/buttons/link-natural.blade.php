@props(['url' => '', 'label' => ''])

<a href="{{ route($url) }}" {{ $attributes->merge(['class' => 'title-btn text-base-100']) }}>{{ $label }}</a>