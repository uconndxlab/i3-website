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
        'url' => 'https://pnb.uconn.edu/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="UConn Physiology and Neurobiology" :$links :$badges>
    <img loading="lazy" height="450" src="/img/work/PNB.png" alt="UConn Physiology and Neurobiology graphic" class="img-fluid mb-3">
    <p>During Summer 2021, we redesigned and launched the website for the UConn Physiology & Neurobiology department.</p>
</x-projects.template-modal>