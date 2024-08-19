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
        'url' => 'https://voiceswitch.sfa.uconn.edu/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Voice Switch/Brain Switch" :$links :$badges>
    <img loading="lazy" height="450" src="/img/work/brain-switch.png" alt="Voice Switch/Brain Switch graphic" class="img-fluid mb-3">
    <p>Voice Switch/Brain Switch is an interdisciplinary study run by a language scientist and a theatre dialect coach. In Summer 2021, we designed and launched the website for this project. Branding Design provided by Digital Media & Design professor Ting Zhou.</p>
</x-projects.template-modal>