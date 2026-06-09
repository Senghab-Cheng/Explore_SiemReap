<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function redirect()
    {
        if (! auth()->check()) {
            return redirect('/signup');
        }

        return auth()->user()->isAdmin()
            ? redirect('/admin/profile')
            : redirect('/user/profile');
    }

    public function admin()
    {
        if (! auth()->check()) {
            return redirect('/signup');
        }

        if (! auth()->user()->isAdmin()) {
            return redirect('/user/profile');
        }

        return view('profile', [
            'profileType' => 'admin',
            'userPlaces' => Post::withCount('reviews')->latest()->get(),
            'userReviews' => collect(),
            'userPostCount' => Post::count(),
            'totalPostCount' => Post::count(),
            'reviewCount' => Review::count(),
        ]);
    }

    public function user()
    {
        if (! auth()->check()) {
            return redirect('/signup');
        }

        if (auth()->user()->isAdmin()) {
            return redirect('/admin/profile');
        }

        return view('profile', [
            'profileType' => 'user',
            'userPlaces' => collect(),
            'userReviews' => Review::with('post')
                ->where('user_id', auth()->id())
                ->latest()
                ->get(),
            'userPostCount' => Review::where('user_id', auth()->id())->count(),
            'totalPostCount' => Post::count(),
            'reviewCount' => Review::where('user_id', auth()->id())->count(),
        ]);
    }

    public function updatePhoto(Request $request)
    {
        if (! auth()->check()) {
            return redirect('/signup');
        }

        $request->validate([
            'profile_photo' => 'required|image|max:4096',
        ]);

        $file = $request->file('profile_photo');
        $filename = Str::slug(auth()->user()->name) . '-' . auth()->id() . '-' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/profile-photos'), $filename);

        auth()->user()->update([
            'profile_photo_path' => 'images/profile-photos/' . $filename,
        ]);

        return back();
    }
}
