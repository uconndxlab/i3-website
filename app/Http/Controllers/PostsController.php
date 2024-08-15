<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index(Request $request) {
        $posts = Post::popular()->with([
            'author',
            'votes' => function($query) {
                $query->where('user_id', Auth::user()->id ?? null);
            }
        ])
            ->whereNot('status', 'deleted')
            ->orderBy('created_at', 'desc');

        if ( $request->has('s') ) {
            // @TODO - Add a much more intuitive search
            $posts->where('title', 'like', '%' . $request->s . '%');
        }

        $posts = $posts->paginate(20);
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = Auth::user()->id;
        $post->save();

        return redirect()->route('posts')->with('success', 'Post created successfully.');
    }


    public function vote(Request $request, $id) {
        $post = Post::find($id);
        $user = Auth::user();

        $saved_upvote = $post->votes()->where('user_id', $user->id)->first();

        if ( $saved_upvote ) {
            $saved_upvote->delete();
        } else {
            $post->votes()->create([
                'user_id' => $user->id
            ]);
        }

        return back()->with('success', 'Submitted a vote.');
    }


    public function show(Request $request, $id) {
        $post = Post::with([
            'author',
            'votes' => function($query) {
                $query->where('user_id', Auth::user()->id ?? null);
            },
        ])->withCount('votes')->find($id);

        $comments = $post->comments()->with('author')->paginate();

        return view('posts.show', compact('post', 'comments'));
    }

    public function comment(Request $request, $id) {
        $request->validate([
            'content' => 'required'
        ]);

        $post = Post::find($id);

        $post->comments()->create([
            'content' => $request->content,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('posts.show', $id)->with('success', 'Comment created successfully.');
    }


    public function delete(Request $request, $id) {
        $post = Post::find($id);
        $user = Auth::user();

        if ( $post->user_id !== $user->id && !$user->admin ) {
            return redirect()->route('posts')->with('error', 'You do not have permission to delete this post.');
        }
        $post->status = 'deleted';
        $post->save();

        return redirect()->route('posts')->with('success', 'Post deleted successfully.');
    }


    public function admin_update(Request $request, $id) {
        $post = Post::find($id);
        $user = Auth::user();

        if ( !$user->admin ) {
            return redirect()->route('posts')->with('error', 'You do not have permission to update this post.');
        }

        $post->update($request->all());

        return redirect()->route('posts.show', $post)->with('success', 'Post updated successfully.');
    }
}
