@props(['modalId'])

@php
$badges = [
    [
        'type' => 'primary',
        'text' => 'UX Design',
    ]
];
$links = [
    [
        'url' => 'https://nrca.uconn.edu/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="UConn Natural Resources Conservation Academy" :$links :$badges>
    <img src="/img/work/nrca.png" alt="UConn Natural Resources Conservation Academy graphic" class="img-fluid mb-3">
    <p>The DX Group redesigned and launched the UConn NRCA website to engage diverse teen and adult participants in natural resources conservation.</p>
</x-projects.template-modal>