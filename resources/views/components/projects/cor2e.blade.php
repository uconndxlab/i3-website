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
        'url' => 'https://core.uconn.edu/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Center for Open Research Resources and Equipment (COR²E)" :$links :$badges>
    <img loading="lazy" height="450" src="/img/work/core.png" alt="Center for Open Research Resources and Equipment (COR²E) graphic" class="img-fluid mb-3">
    <p>i3 designed, developed, and maintains the primary website for the Center for Open Research Resources and Equipment (COR<sup>2</sup>).</p>
</x-projects.template-modal>