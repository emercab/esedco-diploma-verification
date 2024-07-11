@props(['h' => 'h1', 'color' => 'color3'])

@php
  if ($h == 'h1') {
    $size = '4xl';
  } elseif ($h == 'h2') {
    $size = '3xl';
  } elseif ($h == 'h3') {
    $size = '2xl';
  } elseif ($h == 'h4') {
    $size = 'xl';
  } elseif ($h == 'h5') {
    $size = 'lg';
  } else {
    $size = 'md';
  }
@endphp

<{{ $h }} class="text-{{ $color }} text-{{ $size }} font-bold">
  {{ $slot }}
</{{ $h }}>