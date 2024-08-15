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
        'url' => 'https://quantumct.org/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="QuantumCT" :$links :$badges>
    <p>QuantumCT is a public-private partnership accelerating the adoption of quantum technologies in Connecticut and working with a broad coalition of partners to lay the groundwork for expansive, equitable economic development.</p>
    <p>In partnership with the Office of the Vice President for Research, I3 designed and developed a WordPress website for the QauntumCT initiative.</p>
</x-projects.template-modal>