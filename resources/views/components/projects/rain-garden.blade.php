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
        'url' => 'https://rgapp.nemo.uconn.edu/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Rain Garden" :$links :$badges>
    <img loading="lazy" height="450" src="/img/work/rain-garden.png" alt="Rain Garden graphic" class="img-fluid mb-3">
    <p>During Fall '20, we were approached by new friend David Dickson of the CT NEMO Program. CT NEMO maintains Rain Garden App, a FREE PWA (Progressive Web App). Through video tutorials, diagrams, text, and tools, the App guides users through how to properly locate, size, install, plant, and maintain a rain garden to help protect local waterways.</p>
</x-projects.template-modal>