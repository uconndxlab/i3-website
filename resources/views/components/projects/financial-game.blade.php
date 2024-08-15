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
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Financial Game" :$badges>
    <img src="/img/work/financial-game.png" alt="Financial Game graphic" class="img-fluid mb-3">
    <p>Launching soon!</p>
</x-projects.template-modal>