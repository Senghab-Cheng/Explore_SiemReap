<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    private array $categories = ['hot_spot', 'temple', 'hotel', 'restaurant', 'cafe'];

    public function createPost(Request $request){
        if (! auth()->check() || ! auth()->user()->isAdmin()) {
            return redirect('/');
        }

        
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required|in:' . implode(',', $this->categories),
            'image' => 'required|image|max:4096',
            'map_embed_url' => 'required',
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body'], '<br>');
        $incomingFields['map_embed_url'] = $this->normalizeMapUrl($incomingFields['map_embed_url']);
        $incomingFields['image_path'] = $this->storePublicImage($request);
        $incomingFields['user_id'] = auth()->id();
        unset($incomingFields['image']);

        Post::create($incomingFields);
        return redirect('/admin/profile');
    }

    public function showEditScreen(Post $post){
        if(! auth()->check() || ! auth()->user()->isAdmin()){
            return redirect('/');
        }
        return view('edit-post', ['post' => $post]);
    }

    public function updatePost(Post $post, Request $request){
        if(! auth()->check() || ! auth()->user()->isAdmin()){
            return redirect('/admin/profile');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required|in:' . implode(',', $this->categories),
            'image' => 'nullable|image|max:4096',
            'map_embed_url' => 'required',
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body'], '<br>');
        $incomingFields['map_embed_url'] = $this->normalizeMapUrl($incomingFields['map_embed_url']);

        if ($request->hasFile('image')) {
            $incomingFields['image_path'] = $this->storePublicImage($request);
        }

        unset($incomingFields['image']);

        $post->update($incomingFields);
        return redirect('/admin/profile');
    }

    public function deletePost(Post $post){
        if(auth()->check() && auth()->user()->isAdmin()){
            $post->delete();
        }
        return redirect('/admin/profile');
    }

    private function storePublicImage(Request $request): string
    {
        $file = $request->file('image');
        $filename = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '-' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/admin-posts'), $filename);

        return 'images/admin-posts/' . $filename;
    }

    private function normalizeMapUrl(string $mapInput): string
    {
        if (preg_match('/src=["\']([^"\']+)["\']/', $mapInput, $matches)) {
            $mapInput = $matches[1];
        }

        $mapUrl = trim(strip_tags($mapInput));

        if (! Str::startsWith($mapUrl, ['https://www.google.com/maps/embed', 'https://maps.google.com/maps'])) {
            throw ValidationException::withMessages([
                'map_embed_url' => 'Please paste a Google Maps embed URL or iframe.',
            ]);
        }

        return $mapUrl;
    }
}
