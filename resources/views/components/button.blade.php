@props(['href'=>null, 'block'=>null, 'outline'=>null, 'info'=>null, 'ghost'=>null])

@php
    $tag = $href ? 'a' : 'button'
@endphp

<{{ $tag }} {{ $href ? "href=$href" : ''}} 
{{ $attributes->class([
    'btn btn-primary mt-2',
    'btn-wide' => $block,
    'btn-outline' => $outline,
    'btn-info' => $info,
    'btn-ghost' => $ghost,
]) }}>
    {{ $slot }}
</{{ $tag }}>