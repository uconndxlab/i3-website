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
    <img loading="lazy" height="450" src="/img/work/ecoregions.png" alt="Ecoregions graphic" class="img-fluid mb-3">
    <p>Launching soon!</p>
</x-projects.template-modal>