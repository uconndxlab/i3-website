<?php

namespace App\View\Components\i3;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Post;

class PostCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Post $post) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card');
    }
}
