@extends('layout')
@section('main-class', 'bg-whitesmoke')

@section('content')
<div class="py-7">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">

                {{ $posts->links() }}

                @if ( !$posts->count() )
                    <p>No discussions have been created yet.</p>
                @endif
                @foreach($posts as $post)
                    <x-post-card :$post />
                @endforeach

                {{ $posts->links() }}
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <p>We're always looking for new ideas and problems to solve at UConn.  Seek help and collaboration from your peers by <a href="{{ route('posts.create') }}">creating a new discussion</a>.</p>
                        
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">Search &amp; Filter</div>
                    <div class="card-body">
                        <form action="{{ route('posts') }}" method="get">

                            <div class="mb-2">
                                <input type="text" name="s" class="form-control" placeholder="Search..." value="{{ request()->s }}">
                            </div>
                            

                            <div class="d-flex">
                                <button class="btn btn-primary" type="submit">Filter</button>
                                @if ( request()->s )
                                <a href="{{ route('posts') }}" class="btn btn-link">Clear</a>
                                @endif
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection