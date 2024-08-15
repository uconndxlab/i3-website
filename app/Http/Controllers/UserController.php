<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class UserController extends Controller
{
    public function profile(Request $request) {
        $user = Auth::user();

        $posts = collect();

        if ( $request->has('comments') ) {
            $posts = Post::with(['comments' => function($query) use ($user) {
                $query->where('user_id', $user->id);
            }])->whereHas('comments', function($query) use ($user) {
                $query->where('user_id', $user->id);
            })->whereNot('status', 'deleted')->paginate(20);
        } else if ( $request->has('upvoted') ) {
            $posts = Post::whereHas('votes', function($query) use ($user) {
                $query->where('user_id', $user->id);
            })->whereNot('status', 'deleted')->paginate(20);
        } else {
            $posts = Post::where('user_id', $user->id)->whereNot('status', 'deleted')->paginate(20);
        }

        return view('profile', compact('user', 'posts'));
    }
}
