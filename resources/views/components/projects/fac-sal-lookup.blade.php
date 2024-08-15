@props(['modalId'])

@php
$badges = [
    [
        'type' => 'primary',
        'text' => 'Web Development',
    ]
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Faculty Salary Lookup Tool" :$badges>
    <p>Developed with the Office of the Provost, this tool displays a variety of faculty salary information depending on your role at the university.</p>
</x-projects.template-modal>