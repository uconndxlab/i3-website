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
        'url' => 'https://stamforddatascience.com/index.html',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="UConn Stamford Data Science Initiative" :$links :$badges>
    <img loading="lazy" src="/img/work/sdsi.png" alt="UConn Stamford Data Science Initiative graphic" class="img-fluid mb-3">
    <p>Under the leadership of Creative Director, DMD Professor Samantha Olschan, our team designed and built the website for UConn's new Stamford Data Science Initiative. The web design and development was led by Emily Ha with Faculty Support from Brian Daley, Joel Salisbury, and Mike Vertefeuille.</p>
</x-projects.template-modal>