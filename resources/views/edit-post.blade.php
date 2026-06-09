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

<section class="hero" id="home" style="background-image: url('<?php echo asset($hero_img['img1']); ?>'); background-size: cover; background-position: center; min-height: 350px;">
  <div class="container">
    <h2 class="h1 hero-title">Edit Post</h2>
  </div>
</section>
        <div class="container">
        <div class="row">
            @auth
                @if(auth()->user()->isAdmin())
                <form action="/edit-post/{{$post->id}}" method="POST" class="p-3" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="text" name="title" value="{{$post->title}}" class="auth-input">
                    <select name="category" class="auth-input">
                        <option value="hot_spot" @selected($post->category === 'hot_spot')>Hot Spots</option>
                        <option value="temple" @selected($post->category === 'temple')>Temple</option>
                        <option value="hotel" @selected($post->category === 'hotel')>Hotel</option>
                        <option value="restaurant" @selected($post->category === 'restaurant')>Restaurant</option>
                        <option value="cafe" @selected($post->category === 'cafe')>Cafe</option>
                    </select>
                    @if($post->image_path)
                        <img src="{{ asset($post->image_path) }}" alt="{{ $post->title }}" class="mt-3" style="width: 220px; height: 140px; object-fit: cover; border-radius: 6px;">
                    @endif
                    <input type="file" name="image" class="auth-input" accept="image/*">
                    <textarea name="body" class="auth-input mt-3" rows="5">{{$post->body}}</textarea>
                    <textarea name="map_embed_url" class="auth-input mt-3" rows="3">{{$post->map_embed_url}}</textarea>
                    <button type="submit" class="btn btn-primary my-2">Save Changes</button> 
                </form>
                @endif
            @else


             @endauth
        </div>

    </main>
@endsection
