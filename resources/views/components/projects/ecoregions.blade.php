@props(['modalId'])

@php
$badges = [
    [
        'type' => 'primary',
        'text' => 'Web Development',
    ],
    [
        'type' => 'primary',
        'text' => 'UX Design',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Ecoregions" :$badges>
    <p>Launching soon!</p>
</x-projects.template-modal>