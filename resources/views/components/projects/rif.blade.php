@props(['modalId'])

@php
$badges = [
    [
        'type' => 'primary',
        'text' => 'Web Development',
    ]
];
$links = [
    [
        'url' => 'https://rif.core.uconn.edu',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Research Insights for Faculty" :$links :$badges>
    {{-- <img src="/img/work/rif.png" alt="Research Insights for Faculty graphic" class="img-fluid mb-3"> --}}
    <p>Developed with the Office of the Vice President for Research, this application is designed to provide UConn faculty and their staff with monthly financial reports and other tools to help them review and manage their sponsored project accounts.</p>
</x-projects.template-modal>