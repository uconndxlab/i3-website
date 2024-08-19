@props(['modalId'])

@php
$badges = [
    [
        'type' => 'success',
        'text' => 'Illustration',
    ],
    [
        'type' => 'success',
        'text' => 'Print Production',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Connecticut State Museum of Natural History Shark Illustrations" :$badges>
    <img loading="lazy" src="/img/work/shark-illustration.jpg" alt="Shark Illustration" class="img-fluid mb-3">
    <p>i3 worked with the Connecticut State Museum of Natural History to illustrate sharks and print them large enough to become a wall display.</p>
</x-projects.template-modal>