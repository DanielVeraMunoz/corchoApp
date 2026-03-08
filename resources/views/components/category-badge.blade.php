@php
$colors = [
    'red' => ['bg' => '#fecaca', 'text' => '#7f1d1d'],
    'green' => ['bg' => '#bbf7d0', 'text' => '#166534'],
    'blue' => ['bg' => '#bfdbfe', 'text' => '#1e40af'],
    'pink' => ['bg' => '#fbcfe8', 'text' => '#9d174d'],
    'cyan' => ['bg' => '#a5f3fc', 'text' => '#155e75'],
    'yellow' => ['bg' => '#fef08a', 'text' => '#854d0e'],
    'purple' => ['bg' => '#ede9fe', 'text' => '#5b21b6'],
    'orange' => ['bg' => '#ffedd5', 'text' => '#9a3412'],
];
$color = $colors[$category->color] ?? ['bg' => '#e5e7eb', 'text' => '#374151'];
@endphp
<span style="background-color: {{ $color['bg'] }}; color: {{ $color['text'] }};" class="px-2 py-1 rounded-full text-xs font-semibold inline-block mb-2">
    {{ $category->name }}
</span>