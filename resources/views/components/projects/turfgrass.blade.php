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
    ]
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="TurfGrass / Athletic Field Assessment Tool" :$badges>
    <img loading="lazy" src="/img/work/turfgrass.png" alt="TurfGrass App graphic" class="img-fluid mb-3">
    <p>Launching soon!</p>
</x-projects.template-modal>