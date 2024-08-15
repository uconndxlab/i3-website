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
        'url' => 'https://nexus.uconn.edu/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Nexus" :$links :$badges>
    <p>Nexus, a University of Connecticut engagement and retention platform, places actionable data in the hands of the advising community to foster student success. Nexus complements the university's student support services and enhances information sharing between students, staff, and faculty. Tools include dashboards, appointment scheduling, note sharing, event registration, and more.</p>
</x-projects.template-modal>