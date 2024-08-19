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
        'url' => 'https://access2ag.com',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Access2Ag" :$links :$badges>
    <img loading="lazy" src="/img/work/access2ag.png" alt="Access2Ag graphic" class="img-fluid mb-3">
    <p>Access2Ag is an initiative of Connecticut Resource Conservation and Development (CT RC&amp;D) in which they plan to use their close working relationships with agriculture producers and partner organizations to address the critical need of bringing nutrient-rich and healthy foods to at-risk members of the Eastern Connecticut community.</p>
    <p>This is a collaboration with Connecticut Resource Conservation and Development (CT RC&amp;D), Digital Experience (DX) Group, and the Center for Open Research Resources and Equipment (COR<sup>2</sup>E).</p>
</x-projects.template-modal>