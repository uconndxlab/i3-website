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
        'url' => 'https://pandemic-journaling-project.chip.uconn.edu/featured-entries/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Pandemic Journaling Project" :$links :$badges>
    <p>I3 worked with the Pandemic Journaling Project to develop a search and filter interface for their featured entries.</p>
</x-projects.template-modal>