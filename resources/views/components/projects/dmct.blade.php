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
$links = [
    [
        'url' => 'https://digitalmediact.com/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="DMCT" :$links :$badges>
    <img loading="lazy" height="450" src="/img/work/dmct.png" alt="DMCT graphic" class="img-fluid mb-3">
    <p>The DX Group built and maintains an ever-growing digital presence to serve as the central source of Information about Connecticut's Digital Media Industry and Education scene. We created a digital platform to serve as the central hub for Digital Media Education and Industry in the state of CT.</p>
</x-projects.template-modal>