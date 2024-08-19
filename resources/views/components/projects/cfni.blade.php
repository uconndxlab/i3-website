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
        'url' => 'https://uconnruddcenter.org/cfni/',
        'text' => 'View Site',
        'class' => 'btn btn-primary',
    ],
];
@endphp

<x-projects.template-modal modalId="{{ $modalId }}" title="Charitable Food Nutrition Index Calculator" :$links :$badges>
    <img loading="lazy" height="450" src="/img/work/cfni.png" alt="Charitable Food Nutrition Index Calculator graphic" class="img-fluid mb-3">
    <p>The UConn Rudd Center uses the CFNI to help food banks summarize the overall nutritional quality of a foods into a single score. We built them this web-based calculator to help make that easier.</p>
</x-projects.template-modal>