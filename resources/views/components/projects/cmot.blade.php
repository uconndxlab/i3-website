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

<x-projects.template-modal modalId="{{ $modalId }}" title="CMOT"  :$badges>
    <img src="/img/work/cmot.png" alt="CMOT graphic" class="img-fluid mb-3">
    <p>What if classroom evaluators had a tablet app for their in-class assessment? We built CMOT (Classroom Management Observation Tool) under the direction of Dr. Jen Freeman of the UConn Neag School of Education and her associated UConn REP (Research Excellence Program) grant. It allows observers to enter progress monitoring items, which have been validated for informing decisions about relative strengths/needs with positive and proactive classroom management. It also contains a checklist of empirically-supported practice features to periodically "look for".</p>
</x-projects.template-modal>