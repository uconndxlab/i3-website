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
        'url' => 'https://syllabus.uconn.edu/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Syllabus Repository" :$links :$badges>
    <p>The goal of this website is to create a single location for students to search and view syllabi. This should save time for students, staff, and faculty whom are often put in the time consuming position of having to track down old syllabi from instructors that are no longer affiliated with the university. The repository aims to collect syllabi for all courses offered at the university.</p>
</x-projects.template-modal>