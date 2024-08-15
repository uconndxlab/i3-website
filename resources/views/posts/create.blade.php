@extends('layout')
@section('main-class', 'bg-whitesmoke')

@section('content')
<div class="py-7">
    <div class="container">
        <div class="mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('posts') }}">All Discussions</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Discussion</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h2 class="mb-4">Submit a new discussion</h2>
                <p class="readable-width">While your name and identifiable information will be hidden, your role or relationship to the University will be present on all discussions and comments you create.</p>

                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="postContent" class="form-label">Content</label>
                        <textarea name="content" id="postContent" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary rounded-3">Submit</button>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection