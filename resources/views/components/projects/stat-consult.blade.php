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
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Stats Consulting Website" :$badges>
    <img loading="lazy" height="450" src="/img/work/scs.png" alt="Stats Consulting Website graphic" class="img-fluid mb-3">
    <p>Launching soon!</p>
</x-projects.template-modal>