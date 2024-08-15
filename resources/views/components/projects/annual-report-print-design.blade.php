@props(['modalId'])

@php
$badges = [
    [
        'type' => 'success',
        'text' => 'Print Production',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Annual Report Print Design" :$badges>
    <p>Coming soon.</p>
</x-projects.template-modal>