@props([
  'label',
  'name',
  'type' => 'text',
  'w' => 'w-full',
  'color' => 'black',
])

@php
  $defaults = [
      'type' => $type,
      'id' => $name,
      'name' => $name,
      'class' => 'text-black border border-light rounded-md bg-white px-3 py-1.5 duration-200 '.$w.' text-'.$color,
      'value' => old($name),
  ];
@endphp

<x-forms.field :$label :$name :$type>
  <input {{ $attributes($defaults) }}>
</x-forms.field>
