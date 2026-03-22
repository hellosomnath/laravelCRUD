@props(['listing'])

@php
$tags = explode(',', $listing->tags);
@endphp

@foreach ($tags as $tag)
    <span class="badge bg-secondary rounded-pill">{{ $tag }}</span>
@endforeach
