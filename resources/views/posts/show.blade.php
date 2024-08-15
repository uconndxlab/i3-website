@extends('layout')
@section('main-class', 'bg-whitesmoke')

@section('content')
<div class="py-5">
    <div class="container">

        <div class="mb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('posts') }}">All Discussions</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Discussion</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-12 col-md-3 mb-3">
                <div class="card rounded-0 mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="badge text-bg-uconn-blue py-3 mb-3 d-block">{{ Str::headline($post->status) ?? 'Created' }}</span>
                            <span>Created by <em>{{ $post->author->affiliation ? Str::headline($post->author->affiliation) : 'University Member' }}</em></span>
                        </div>
                        
                        <div class="mb-3">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <form action="{{ route('posts.vote', $post) }}" method="post">
                                        @csrf
                                        <button @class([
                                            'btn btn-link px-1',
                                            'text-warning' => $post->votes->where('user_id', Auth::user()->id ?? null)->count() > 0,
                                        ]) type="submit"><i class="bi-arrow-up-square fs-4"></i></button>
                                    </form>
                                </div>
                                <div class="col">
                                    <p class="mb-0">{{ $post->votes_count }}</p>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

                @if ( Auth::user() && (Auth::user()->id === $post->user_id || Auth::user()->admin) )
                    <div class="card">
                        <div class="card-header">Delete Post</div>
                        <div class="card-body">
                            <p>The post will no longer be available for public viewing or appear in search.  Some data will still be retained.</p>
                            <form action="{{ route('posts.delete', $post) }}" method="post">
                                @csrf
                                <button class="btn btn-danger">Delete Post</button>
                            </form>
                        </div>
                    </div>
                @endif


                @if ( Auth::user()->admin ?? false )
                    <div class="card mt-4">
                        <div class="card-header">Admin Actions</div>
                        <div class="card-body">
                            <form action="{{ route('posts.admin-update', $post) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-select">
                                        <option value="proposed" @selected($post->status === 'proposed')>Proposed</option>
                                        <option value="approved" @selected($post->status === 'approved')>Approved</option>
                                        <option value="rejected" @selected($post->status === 'rejected')>Rejected</option>
                                        <option value="deleted" @selected($post->status === 'deleted')>Deleted</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary">Update Status</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-12 col-md-9">
                @if (session('success'))
                    <div class="alert alert-success">
                        <p class="mb-1">{{ session('success') }}</p>
                    </div>
                @endif

                <div class="card rounded-0 pt-2 pb-4">
                    <div class="card-body">
                        <h1 class="fs-2">{{ $post->title }}</h1>
                        <p class="text-muted">{{ $post->created_at->format('m/d/Y') }}</p>
                        <div>
                            {!! nl2br(e($post->content)) !!}
                        </div>
                    </div>
                </div>

                <div class="mt-9">
                    <h2 class="fs-4" id="comments">Comments</h2>

                    @error('content')
                        <div class="alert alert-danger">
                            <p class="mb-1">{{ $message }}</p>
                        </div>
                    @enderror

                    <div class="card rounded-0 mb-4">
                        <div class="card-header">Add Comment</div>
                        <div class="card-body">
                            <form action="{{ route('posts.comment', $post) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <textarea name="content" id="commentContent" rows="2" class="form-control"></textarea>
                                </div>
                                <p><em>Only your university affiliation will be shared publicly with your comment.</em></p>
                                <button class="btn btn-primary">Add Comment</button>
                            </form>
                        </div>
                    </div>


                    <div class="card rounded-0">
                        <div class="card-body">
                            {{ $comments->links() }}
                            @if ( $comments->count() )
                                @foreach($comments as $index => $comment)
                                <div @class([
                                    'border-bottom mb-3 pb-3' => $index !== $comments->count() - 1
                                ])>
                                    <p class="text-primary mb-2"><strong>{{ $comment->author->affiliation ? Str::headline($comment->author->affiliation) : 'University Member' }}</strong>
                                        @if ( $comment->author->admin )
                                            <span class="badge text-bg-primary">Admin</span>
                                        @endif

                                        @if ( $comment->author->id === $post->user_id )
                                            <span class="badge text-bg-uconn-blue">Author</span>
                                        @endif
                                    </p>
                                    <p class="mb-1">{{ $comment->content }}</p>
                                    <small class="text-muted fst-italic">{{ $comment->created_at->format('m/d/Y') }}</small>
                                </div>
                                @endforeach
                            @else
                                <p>No comments have been created yet.</p>
                            @endif
                            {{ $comments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection