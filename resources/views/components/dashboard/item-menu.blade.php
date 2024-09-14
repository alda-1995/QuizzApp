@props(['url' => '', 'label' => ''])
<a {{ $attributes->merge(['class' => 'text-[1rem ] h-12 px-6 text-gray-800 flex items-center group/link']) }} href="{{ route($url) }}">
    <div class="text-gray-800 text-xl mr-2">
        {{ $icon }}
    </div>
    {{ $label }}
</a>