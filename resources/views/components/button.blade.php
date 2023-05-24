@props([
    'color' => 'primary',
    'value',
])

<button class="btn btn-{{ $color }}">
    {{ $value }}
</button>
