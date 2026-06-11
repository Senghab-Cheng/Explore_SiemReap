@extends('layout')
@section('content')

<?php
$heroImagesByCategory = [
  "hot_spot" => [
    "images/Pub Street/pub_street4.jpg",
    "images/Angkor Night Market/angkor_night_market2.jpg",
    "images/Angkor National Museum/angkor_museum1.jpg",
    "images/Cambodian Cultural Village/cambodian_cultural_village2.jpg",
    "images/អាកោត្នោតព្រះដាក់/អាកោត្នោតព្រះដាក់1.jpg",
  ],
  "temple" => [
    "images/Angkor Wat/angkor_wat1.jpg",
    "images/Bayon Temple/bayon1.jpg",
    "images/Ta Prohm Temple/ta_prohm1.jpg",
    "images/Banteay Srei Temple/bantey_srei1.jpg",
    "images/Preah Khan Temple/preah_Khan.jpg",
  ],
  "hotel" => [
    "images/Lotus Blanc/lotus_blanc_resort1.jpg",
    "images/Park Hyatt/park_hyatt1.jpg",
    "images/Raffles Grand/raffles_grand1.jpg",
    "images/Sofitel Angkor/sofitel_angkor1.jpg",
    "images/Sokha Angkor/sokha_angkor1.jpg",
  ],
  "restaurant" => [
    "images/Fumizen/fumizen6.jpg",
    "images/Soursdey Lumhae/soursdey_lumhae_resturant9.jpg",
    "images/Mesa Restaurant/mesa_restaurant3.jpg",
    "images/Polo Food/polo_food_restaurant_building.jpg",
    "images/Mealea Watbo/mealea_watbo9.jpg",
  ],
  "cafe" => [
    "images/fern.jpg",
    "images/bean_embassy.jpg",
    "images/footprint.jpg",
    "images/sbov.webp",
    "images/BROWN.jpg",
  ],
];

$hero_img = $heroImagesByCategory[$category] ?? $heroImagesByCategory['hot_spot'];
?>
<style>
  .review-more-btn {
    margin-top: 0.75rem;
    padding: 0;
    border: 0;
    background: transparent;
    color: #0d6efd;
    font-weight: 600;
    cursor: pointer;
  }
  .review-more-btn:hover {
    text-decoration: underline;
  }
  .review-item.is-hidden {
    display: none;
  }
</style>
<section class="hero" id="home" style="background-image: url('{{ asset($hero_img[0]) }}');">
  <div class="container">
    <h2 class="h1 hero-title">{{ $heroTitle }}</h2>
  </div>
</section>

<section class="package" id="package">
  <div class="container">
    <h2 class="h2 section-title">{{ $sectionTitle }}</h2>
    <p class="section-text">
      Places posted by the admin are loaded from the database. Details, images, and Google Maps embeds are managed from the admin profile.
    </p>

    @if($places->isEmpty())
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary text-center">
        <h3 class="h3">No places posted yet.</h3>
        <p class="mb-0">Admin can add places from the profile page.</p>
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
                <a href="/places/{{ $place->id }}" style="text-decoration: none; color: inherit;">
                  <h3 class="h3 card-title" style="cursor: pointer;">{{ $place->title }}</h3>
                </a>

                <p class="card-text">{!! nl2br(e($place->body)) !!}</p>

                <div class="mt-4">
                  <h4 class="h5">Reviews</h4>
                  @if($place->reviews->isEmpty())
                    <p class="mb-0">No reviews yet.</p>
                  @else
                    <div class="review-list" data-review-list>
                      @foreach($place->reviews as $reviewIndex => $review)
                        <div class="review-item border-top pt-2 mt-2 {{ $reviewIndex > 0 ? 'is-hidden' : '' }}">
                          <strong>{{ $review->user->name }}</strong>
                          <span class="text-warning">{!! str_repeat('&#9733;', $review->rating) !!}</span>
                          <p class="mb-0">{{ $review->comment }}</p>
                        </div>
                      @endforeach
                    </div>
                    @if($place->reviews->count() > 1)
                      <button type="button" class="review-more-btn" data-review-more>See more reviews</button>
                    @endif
                  @endif

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
<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-review-more]').forEach((button) => {
      button.addEventListener('click', () => {
        const reviewList = button.previousElementSibling;
        if (!reviewList) return;

        const hiddenReviews = reviewList.querySelectorAll('.review-item.is-hidden');
        hiddenReviews.forEach((review, index) => {
          if (index < 4) {
            review.classList.remove('is-hidden');
          }
        });

        if (!reviewList.querySelector('.review-item.is-hidden')) {
          button.remove();
        }
      });
    });
  });
</script>
@endsection
