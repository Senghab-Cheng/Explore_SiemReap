<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Post $post, Request $request)
    {
        if (! auth()->check()) {
            return redirect('/signup');
        }

        if (auth()->user()->isAdmin()) {
            return back()->withErrors(['review' => 'Admin accounts cannot submit user reviews.']);
        }

        $fields = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|min:3|max:1000',
        ]);

        $fields['comment'] = strip_tags($fields['comment']);
        $fields['post_id'] = $post->id;
        $fields['user_id'] = auth()->id();

        Review::create($fields);

        return back();
    }
        public function destroy(Review $review)
    {
        if (! auth()->check()) {
            return redirect('/login');
        }

        $user = auth()->user();

        if ($user->id !== $review->user_id && ! $user->isAdmin()) {
            abort(403);
        }

        $review->delete();

        return back();
    }
}
