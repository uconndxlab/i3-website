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
        'url' => 'https://wellscan.io',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="WellSCAN" :$links :$badges>
    <img loading="lazy" src="/img/work/wellscan.png" alt="WellSCAN graphic" class="img-fluid mb-3">
    <p>What if food banks could better know the quality of their inventory? In collaboration with UConn's Rudd Center on Food Policy and Obesity, and with support from Partnership For Healthier America, Feeding America, and others, the DX Lab has developed a suite of web/mobile applications product for use by food banks, food pantries, and other organizations for ranking the nutritional quality of their inventory.</p>
    <p>This application is housed, licensed and serviced at the University of Connecticut, and includes the WellScan Global nutrition database, WellScan Connect API, WelScan Mini scanning app</p>
</x-projects.template-modal>