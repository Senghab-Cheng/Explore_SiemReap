
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
        
        <h2>Create Post</h2>
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" class="auth-input" placeholder="Post Title">
                <textarea name="body" class="auth-input mt-2" placeholder="Body content..." rows="4"></textarea>
                <button type="submit" class="btn btn-primary my-2">Create Post</button>
            </form>
        </div>
 
        <h2>All Posts</h2>
        @foreach($posts as $post)
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <h3>{{ $post['title'] }} by {{ $post->user->name }}</h3>
            {{ $post['body'] }}
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
            <p>You are not logged in.</p>
            <a href="/signup" class="btn btn-primary">Login / Sign Up</a>
        </div>
        @endauth
        </div>
    </div>
</main>
@endsection