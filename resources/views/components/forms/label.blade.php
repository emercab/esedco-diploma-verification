@props(['name', 'label', 'labelColor' => 'white'])

<div class="inline-flex items-center gap-x-2">
  <label class="text-xl text-{{ $labelColor }}" for="{{ $name }}">{{ $label }}</label>
</div>
