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
        'url' => 'https://travelfunds.core.uconn.edu/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Faculty Travel Funding" :$links :$badges>
    <p>This website allows the submission and management of UConn Faculty travel fund requests.</p>
</x-projects.template-modal>