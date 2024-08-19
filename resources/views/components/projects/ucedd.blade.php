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
        'url' => 'https://uconnucedd.org/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="UConn Center for Excellence in Developmental Disabilities Education, Research and Service" :$links :$badges>
    <img loading="lazy" src="/img/work/ucedd.png" alt="UConn Center for Excellence in Developmental Disabilities Education, Research and Service graphic" class="img-fluid mb-3">
    <p>UCEDD has assisted in the advancement of early intervention, health care, community-based services, inclusive and meaningful education, child care, transition from school to work, employment, recreation and quality assurance, housing, assistive technology, transportation, and/or family support. The DX Group redesigned and developed this website with special care in ensuring it is accessible and inclusive to all.</p>
</x-projects.template-modal>