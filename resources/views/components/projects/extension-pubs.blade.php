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
$links = [
    [
        'url' => 'https://publications.extension.uconn.edu/publications/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="CAHNR Extension Publications" :$links :$badges>
    <p>I3 designed and developed the publication search template used in the College of Agriculture, Health and Natural Resources - Extension News and Publications website.</p>
</x-projects.template-modal>