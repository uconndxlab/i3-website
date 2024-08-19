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
        'url' => 'https://hiring-maps-63410.web.app/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Hiring Maps" :$links :$badges>
    <img loading="lazy" src="/img/work/hiring-maps.png" alt="Hiring Maps graphic" class="img-fluid mb-3">
    <p>In partnership with the UConn Department of Agriculture & Resource Economics and the Digital Experience Group, the Hiring Maps project is a go-to resource for navigating Connecticut's job market. On this website you can explore counties and wages, track monthly job postings, and discover related jobs & occupations to make informed career decisions.</p>
</x-projects.template-modal>