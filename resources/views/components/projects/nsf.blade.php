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
        'url' => 'https://nsf-grants.core.uconn.edu/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="NSF Grant Map" :$links :$badges>
    <img src="/img/work/nsf.png" alt="NSF Grant Map graphic" class="img-fluid mb-3">
    <p>Visualization of NSF grants obtained by businesses and higher education institutions within the state of Connecticut between the 2011 and 2022 fiscal years distributed by municipality.</p>
</x-projects.template-modal>