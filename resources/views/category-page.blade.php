@extends('layout')
@section('content')
<?php
$hero_img = [
  "hot_spot" => "images/Pub Street/pub_street4.jpg",
  "temple" => "images/Angkor Wat/angkor_wat1.jpg",
  "hotel" => "images/Lotus Blanc/lotus_blanc_resort1.jpg",
  "restaurant" => "images/Mesa Restaurant/mesa_restaurant1.jpg",
  "cafe" => "images/bean_embassy.jpg",
];
?>

<section class="hero" id="home" style="background-image: url('{{ asset($hero_img[$category] ?? $hero_img['hot_spot']) }}');">
  <div class="container">
    <h2 class="h1 hero-title">{{ $heroTitle }}</h2>
  </div>
</section>

<section class="package" id="package">
  <div class="container">
    <h2 class="h2 section-title">{{ $sectionTitle }}</h2>
    <p class="section-text">
      Places posted by the admin are loaded from the database. Details, images, and Google Maps embeds are managed from the dashboard.
    </p>

    @if($places->isEmpty())
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary text-center">
        <h3 class="h3">No places posted yet.</h3>
        <p class="mb-0">Admin can add places from the dashboard.</p>
      </div>
    @else
      <ul class="package-list">
        @foreach($places as $place)
          <li>
            <div class="package-card">
              <figure class="card-banner">
                <img src="{{ asset($place->image_path) }}" alt="{{ $place->title }}" loading="lazy">
              </figure>

              <div class="card-content">
                <h3 class="h3 card-title">{{ $place->title }}</h3>
                <p class="card-text">{!! nl2br(e($place->body)) !!}</p>

                <div class="mt-4">
                  <h4 class="h5">Reviews</h4>
                  @forelse($place->reviews as $review)
                    <div class="border-top pt-2 mt-2">
                      <strong>{{ $review->user->name }}</strong>
                      <span class="text-warning">{!! str_repeat('&#9733;', $review->rating) !!}</span>
                      <p class="mb-0">{{ $review->comment }}</p>
                    </div>
                  @empty
                    <p class="mb-0">No reviews yet.</p>
                  @endforelse

                  @auth
                    @if(! auth()->user()->isAdmin())
                      <form action="/places/{{ $place->id }}/reviews" method="POST" class="mt-3">
                        @csrf
                        <select name="rating" class="form-control mb-2">
                          <option value="5">5 stars</option>
                          <option value="4">4 stars</option>
                          <option value="3">3 stars</option>
                          <option value="2">2 stars</option>
                          <option value="1">1 star</option>
                        </select>
                        <textarea name="comment" class="form-control mb-2" rows="3" placeholder="Write your review"></textarea>
                        <button class="btn btn-primary btn-sm">Submit Review</button>
                      </form>
                    @endif
                  @else
                    <p class="mt-3"><a href="/signup">Log in or sign up</a> to write a review.</p>
                  @endauth
                </div>
              </div>

              @if($place->map_embed_url)
                <iframe src="{{ $place->map_embed_url }}" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              @endif
            </div>
          </li>
        @endforeach
      </ul>
    @endif
  </div>
</section>
@endsection
