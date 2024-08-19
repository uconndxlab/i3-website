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
        'url' => 'https://werth.institute.uconn.edu/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Werth Institute for Entrepreneurship and Innovation" :$links :$badges>
    <img loading="lazy" src="/img/work/werth.png" alt="Werth Institute for Entrepreneurship and Innovation graphic" class="img-fluid mb-3">
    <p>i3 designed and developed the new primary website for the Werth Institute of Entrepreneurship and Innovation.</p>
</x-projects.template-modal>