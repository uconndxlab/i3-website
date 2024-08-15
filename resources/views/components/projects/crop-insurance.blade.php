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

<x-projects.template-modal modalId="{{ $modalId }}" title="Crop Insurance" :$badges>
    <p>Launching Soon!</p>
</x-projects.template-modal>