@extends('layout')
@section('main-class', 'bg-whitesmoke')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="nav nav-pills mb-3">
                    <li class="nav-item">
                        <a @class([
                            'nav-link',
                            'active' => !request()->has('comments') && !request()->has('upvoted')])
                            aria-current="page" href="{{ route('profile') }}">Posted</a>
                    </li>
                    <li class="nav-item">
                        <a @class(['nav-link', 'active' => request()->has('comments')])
                        href="{{ route('profile') }}?comments">Commented</a>
                    </li>
                    <li class="nav-item">
                        <a @class(['nav-link', 'active' => request()->has('upvoted')]) href="{{ route('profile') }}?upvoted">Upvoted</a>
                    </li>
                </ul>

                {{ $posts->links() }}

                @foreach($posts as $post)
                    <x-post-card :post="$post" />
                @endforeach

                {{ $posts->links() }}

                @if ( $posts->count() == 0 )
                <p class="mt-6 text-center">No posts here yet.</p>
                @endif
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">University Metadata</div>
                    <div class="card-body">
                        <p><strong>NetID:</strong> {{ $user->netid }}</p>
                        <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
                        <p><strong>Affiliation:</strong> {{ $user->affiliation ? Str::headline($user->affiliation) : '(No Affiliation)' }}</p>
                        <p><strong>Created:</strong> {{ $user->created_at->format('m/d/Y') }}</p>
                        <p><strong>Last Synced:</strong> {{ $user->updated_at->format('m/d/Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection