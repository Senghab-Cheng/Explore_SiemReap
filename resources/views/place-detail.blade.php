@extends('layout')
@section('content')
<style>
  .detail-hero {
    position: relative;
    min-height: 350px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    background-position: center;
    overflow: hidden;
  }
  .detail-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.45);
  }
  .detail-hero h1 {
    position: relative;
    z-index: 2;
    color: #ffffff;
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 800;
    text-align: center;
    letter-spacing: 0.02em;
    text-transform: uppercase;
  }
  .detail-layout {
    max-width: 1200px;
    margin: 3rem auto;
    padding: 0 2rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: start;
  }
  .detail-left img {
    width: 100%;
    border-radius: 0.75rem;
    margin-bottom: 1.5rem;
  }
  .detail-left iframe {
    width: 100%;
    height: 320px;
    border: 0;
    border-radius: 0.75rem;
  }
  .detail-right .body-text {
    color: #6b7280;
    line-height: 1.8;
    margin-bottom: 2rem;
    font-size: 0.97rem;
  }
  .review-item {
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    padding: 1rem;
    margin-bottom: 1rem;
  }
  .review-author { font-weight: 600; margin-bottom: 0.25rem; color: #1A3C2E; }
  .review-comment { color: #6b7280; margin-top: 0.25rem; font-size: 0.9rem; }
  .section-divider {
    font-size: 1rem;
    font-weight: 700;
    color: #1A3C2E;
    margin: 1.5rem 0 1rem;
    letter-spacing: 0.04em;
  }
  .back-link {
    display: inline-block;
    margin-top: 1.5rem;
    color: #C9A96E;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    letter-spacing: 0.06em;
  }
  .back-link:hover { color: #1A3C2E; }
  @media (max-width: 768px) {
    .detail-layout { grid-template-columns: 1fr; gap: 1.5rem; }
  }
</style>

<main>
  <article>

    <div class="detail-hero"
      style="background-image: url('{{ asset($post->image_path) }}');">
      <h1>{{ $post->title }}</h1>
    </div>

    <div class="detail-layout">

      <div class="detail-left">
        <img src="{{ asset($post->image_path) }}" alt="{{ $post->title }}">
        @if($post->map_embed_url)
          <div class="section-divider">Location</div>
          <iframe src="{{ $post->map_embed_url }}"
            allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        @endif
      </div>

      <div class="detail-right">
        <p class="body-text">{!! nl2br(e($post->body)) !!}</p>

        <div class="section-divider">Reviews</div>
        @forelse($post->reviews as $review)
          <div class="review-item">
            <p class="review-author">{{ $review->user->name }}</p>
            <span class="text-warning">{!! str_repeat('&#9733;', $review->rating) !!}</span>
            <p class="review-comment">{{ $review->comment }}</p>
          </div>
        @empty
          <p style="color: #6b7280;">No reviews yet.</p>
        @endforelse

        @auth
          @if(! auth()->user()->isAdmin())
            <div class="section-divider">Write a Review</div>
            <form action="/places/{{ $post->id }}/reviews" method="POST">
              @csrf
              <select name="rating" class="form-control mb-2">
                <option value="5">5 stars</option>
                <option value="4">4 stars</option>
                <option value="3">3 stars</option>
                <option value="2">2 stars</option>
                <option value="1">1 star</option>
              </select>
              <textarea name="comment" class="form-control mb-2" rows="3"
                placeholder="Write your review"></textarea>
              <button class="btn btn-primary btn-sm">Submit Review</button>
            </form>
          @endif
        @else
          <p class="mt-3"><a href="/signup">Log in or sign up</a> to write a review.</p>
        @endauth

        <a href="javascript:history.back()" class="back-link">← Back</a>
      </div>

    </div>
  </article>
</main>

@endsection