
@extends('layout')
@section('content')
<style>
    .auth-input {
        display: block;
        width: 100%;
        padding: 10px 14px;
        margin-top: 8px;
        border: 1px solid #ced4da;
        border-radius: 6px;
        font-size: 15px;
        color: #333;
        background: #fff;
        box-sizing: border-box;
        font-family: inherit;
    }
    .auth-input:focus {
        outline: none;
        border-color: #0d6efd;
        box-shadow: 0 0 0 3px rgba(13,110,253,0.15);
    }
</style>
 
<main>
     <?php
$hero_img = [
  "img1" => "images/Bayon.webp",
  "img2" => "images/angkor_night.jpg",
  "img3" => "images/Taprohm.webp",
];
?>
    <section class="hero" id="home" style="background-image: url('<?php echo $hero_img['img1']; ?>'); background-size: cover; background-position: center; min-height: 350px;">
      <div class="container">
        <h2 class="h1 hero-title">Dashboard</h2>
      </div>
    </section>
    <div class="container">
    <div class="row">
        @auth
        <div class="mt-4 mb-4">
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-outline-danger">Logout</button>
            </form>
        </div>
        
        @if(auth()->user()->isAdmin())
        <h2>Create Place</h2>
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <form action="/create-post" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" class="auth-input" placeholder="Place name" value="{{ old('title') }}">
                <select name="category" class="auth-input">
                    <option value="hot_spot">Hot Spots</option>
                    <option value="temple">Temple</option>
                    <option value="hotel">Hotel</option>
                    <option value="restaurant">Restaurant</option>
                    <option value="cafe">Cafe</option>
                </select>
                <input type="file" name="image" class="auth-input" accept="image/*">
                <textarea name="body" class="auth-input mt-2" placeholder="Details, location, opening hours, prices..." rows="5">{{ old('body') }}</textarea>
                <textarea name="map_embed_url" class="auth-input mt-2" placeholder="Paste Google Maps embed URL or iframe code..." rows="3">{{ old('map_embed_url') }}</textarea>
                <button type="submit" class="btn btn-primary my-2">Create Place</button>
            </form>
        </div>
 
        <h2>All Places</h2>
        @foreach($posts as $post)
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <h3>{{ $post['title'] }} <span class="badge bg-secondary">{{ str_replace('_', ' ', $post->category) }}</span></h3>
            @if($post->image_path)
                <img src="{{ asset($post->image_path) }}" alt="{{ $post->title }}" style="width: 180px; height: 120px; object-fit: cover; border-radius: 6px;">
            @endif
            <p class="mt-3">{!! nl2br(e($post['body'])) !!}</p>
            <p><a href="/edit-post/{{ $post->id }}">Edit</a></p>
            <form action="/delete-post/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm mt-2">Delete</button>
            </form>
        </div>
        @endforeach
        @else
        <div class="text-center py-5">
            <p>You are logged in as a user. Admin CRUD is only available to Xiang Yu.</p>
        </div>
        @endif
 
        @else
        <div class="text-center py-5">
            <p>You are not logged in.</p>
            <a href="/signup" class="btn btn-primary">Login / Sign Up</a>
        </div>
        @endauth
        </div>
    </div>
</main>
@endsection
