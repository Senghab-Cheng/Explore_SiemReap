<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PlaceController extends Controller
{

    private array $categoryTitles = [
        'hot_spot' => ['Popular places to visit in Siem Reap', 'Popular places to visit'],
        'temple' => ['Temples in Siem Reap', 'Popular Temples'],
        'hotel' => ['Hotels in Siem Reap', 'Popular Hotels'],
        'restaurant' => ['Restaurants in Siem Reap', 'Popular Restaurants'],
        'cafe' => ['Cafes in Siem Reap', 'Popular Cafes'],
    ];

    public function show($id)
{
    $post = Post::findOrFail($id);
    return view('place-detail', compact('post'));
}

    public function index(string $category)
    {
        abort_unless(array_key_exists($category, $this->categoryTitles), 404);

        $places = Post::with(['reviews.user'])
            ->where('category', $category)
            ->latest()
            ->get();

        return view('category-page', [
            'category' => $category,
            'heroTitle' => $this->categoryTitles[$category][0],
            'sectionTitle' => $this->categoryTitles[$category][1],
            'places' => $places,
        ]);
    }
}
