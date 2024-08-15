<div class="card posts-card mb-5">
    <div class="card-body py-4">
        <div class="row">
            <div class="col-auto">
                <form action="{{ route('posts.vote', $post) }}" method="post">
                    @csrf
                    <button @class([
                        'btn btn-link',
                        'text-warning' => $post->votes->where('user_id', Auth::user()->id ?? null)->count() > 0,
                    ]) type="submit"><i class="bi-arrow-up-square fs-4"></i></button>
                </form>
            </div>
            <div class="col">
                <h4 class="card-title normal fw-bold">{{ $post->title }}</h4>
                <p>{{ Str::limit($post->content, 300, '...') }}</p>
                <div class="d-flex align-items-center">
                    <small class="text-muted">{{ $post->created_at->format('m/d/Y') }}</small>
                    <div class="px-4 small">
                        <i class="bi-chat"></i>
                        <span>{{ $post->comments()->count() }}</span>
                    </div>
                    <div class="px-4 small">
                        <span>Created by <em>{{ $post->author->affiliation ? Str::headline($post->author->affiliation) : 'University Member' }}</em></span>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <span class="badge text-bg-uconn-blue pt-2">{{ Str::headline($post->status) ?? 'Created' }}</span>
            </div>
        </div>

        <div class="row">
            <div class="col text-end">
                <a href="{{ route('posts.show', $post) }}" class="btn btn-link">View</a>
                <a href="{{ route('posts.show', $post)}}#comments" class="btn btn-link">Comment</a>
            </div>
        </div>
    </div>
</div>