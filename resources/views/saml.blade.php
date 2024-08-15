@extends('layout')

@section('content')
<div class="section-padded">
    <div class="container">
        @dump($auth)

        @dump($auth->getNameId())

        @dump($auth->getAttributesWithFriendlyName())

        @dump($auth->getLastRequestId())

        @dump($saml_user)

        @dump($relay)

        @dump($relay_route_match)

        @dump(request()->session()->all())
    </div>
</div>
@endsection