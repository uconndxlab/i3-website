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
        'url' => 'https://covid-testing.uconn.edu/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Covid Surveillance Testing" :$links :$badges>
    <img loading="lazy" src="/img/work/covid-testing.png" alt="Covid Surveillance Testing graphic" class="img-fluid mb-3">
    <p>Along with the Institute for Systems Genomics, the DX Group received an award from UConn's COVID-19 Rapid Seed Funding (COVID-RSF) Program for creation of a website and dynamic dashboard to showcase the University's response to COVID-19 titled "An Integrated Surveillance Program for Improved Detection, Containment and Mitigation of COVID-19."</p>
</x-projects.template-modal>