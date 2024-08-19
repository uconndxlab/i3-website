@props(['modalId'])

@php
$badges = [
    [
        'type' => 'primary',
        'text' => 'Web Development',
    ],
    [
        'type' => 'primary',
        'text' => 'Mobile PWA',
    ],
    [
        'type' => 'primary',
        'text' => 'UX Design',
    ]
];
$links = [
    [
        'url' => 'https://sourceryapp.org',
        'text' => 'View App',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Sourcery" :$links :$badges>
    <img loading="lazy" src="/img/work/sourcery.png" alt="Sourcery graphic" class="img-fluid mb-3">
    <p>Sourcery emerged from the design process of Greenhouse Studios and from the project team's past work and ongoing interests in research software for the humanities.<p>
    <p>Working with Greenhouse Studios, we developed an application that gives researchers access to documents that can't be found online by paying other researchers to find them.</p>
</x-projects.template-modal>