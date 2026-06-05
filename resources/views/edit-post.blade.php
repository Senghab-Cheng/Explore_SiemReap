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
                <form action="/edit-post/{{$post->id}}" method="POST" class="p-3 ">
                    @csrf
                    @method('PUT')
                    <input type="text" name="title" value="{{$post->title}}" class="auth-input">
                    <textarea name="body" class="auth-input mt-3">{{$post->body}}</textarea>
                    <button type="submit" class="btn btn-primary my-2">Save Changes</button> 
                </form>
            @else


             @endauth
        </div>

    </main>
@endsection
