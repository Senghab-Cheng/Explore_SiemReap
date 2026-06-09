@extends('layout')
@section('content')
<?php
$hero_img = [
  "img1" => "images/Bayon.webp",
  "img2" => "images/angkor_night.jpg",
  "img3" => "images/Taprohm.webp",
];
?>
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<script src="{{ asset('js/profile.js') }}" defer></script>

<section class="hero" id="home" style="background-image: url('{{ asset($hero_img['img1']) }}'); min-height: 350px;">
  <div class="container">
    <h2 class="h1 hero-title">{{ $profileType === 'admin' ? 'Admin Profile' : 'My Profile' }}</h2>
  </div>
</section>

<div class="profile-page">
  <div class="profile-header">
    <div class="container">
      <div class="profile-header-inner">
        <div class="profile-avatar">
          @if(auth()->user()->profile_photo_path)
            <img src="{{ asset(auth()->user()->profile_photo_path) }}" alt="{{ auth()->user()->name }}">
          @else
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
          @endif
        </div>
        <div class="profile-header-info">
          <div class="profile-name">{{ auth()->user()->name }}</div>
          <div class="profile-email">{{ auth()->user()->email }}</div>
          <span class="profile-badge">{{ $profileType === 'admin' ? 'Admin' : 'Member' }}</span>
          <form action="/profile/photo" method="POST" enctype="multipart/form-data" class="profile-photo-form">
            @csrf
            <label for="profilePhotoInput" class="profile-photo-label">Upload Photo</label>
            <input id="profilePhotoInput" type="file" name="profile_photo" accept="image/*" onchange="this.form.submit()">
          </form>
        </div>
      </div>

      <nav class="profile-tabs">
        <button class="tab-btn active" onclick="showTab('overview', this)">
          <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
          <span>Overview</span>
        </button>

        @if($profileType === 'admin')
          <button class="tab-btn" onclick="showTab('places', this)">
            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            <span>Places</span>
          </button>
          <button class="tab-btn" onclick="showTab('new-place', this)">
            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
            <span>New Place</span>
          </button>
        @else
          <button class="tab-btn" onclick="showTab('reviews', this)">
            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M21 15a4 4 0 0 1-4 4H7l-4 4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/></svg>
            <span>Reviews</span>
          </button>
        @endif

        <form action="/logout" method="POST" style="margin:0; margin-left:auto;">
          @csrf
          <button type="submit" class="tab-btn logout-tab">
            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
            <span>Log out</span>
          </button>
        </form>
      </nav>
    </div>
  </div>

  <div class="profile-body">
    <div class="container">
      <div id="tab-overview" class="tab-panel active">
        <div class="overview-stats">
          <div class="stat-card">
            <div class="stat-icon">
              <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M3 11l9-8 9 8"/><path d="M5 10v10h14V10"/></svg>
            </div>
            <div>
              <div class="stat-num">{{ $userPostCount }}</div>
              <div class="stat-label">{{ $profileType === 'admin' ? 'Places' : 'My Reviews' }}</div>
            </div>
          </div>
          <div class="stat-card">
            <div class="stat-icon">
              <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            </div>
            <div>
              <div class="stat-num">{{ $totalPostCount }}</div>
              <div class="stat-label">Total Places</div>
            </div>
          </div>
          <div class="stat-card">
            <div class="stat-icon">
              <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M21 15a4 4 0 0 1-4 4H7l-4 4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/></svg>
            </div>
            <div>
              <div class="stat-num">{{ $reviewCount }}</div>
              <div class="stat-label">{{ $profileType === 'admin' ? 'Site Reviews' : 'Reviews Written' }}</div>
            </div>
          </div>
        </div>

        <div class="welcome-card">
          <svg width="26" height="26" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          <div>
            <div class="wc-title">Welcome back, {{ auth()->user()->name }}.</div>
            <div class="wc-sub">You joined on {{ auth()->user()->created_at->format('F j, Y') }}.</div>
          </div>
        </div>
      </div>

      @if($profileType === 'admin')
        <div id="tab-places" class="tab-panel">
          <div class="panel-card">
            <div class="panel-card-header">
              <h3>Places</h3>
              <span class="panel-count">{{ $userPostCount }} place{{ $userPostCount != 1 ? 's' : '' }}</span>
            </div>
            <div class="post-list">
              @forelse($userPlaces as $post)
                <div class="post-item">
                  <div>
                    <div class="post-item-title">{{ $post->title }}</div>
                    <div class="post-item-meta">{{ str_replace('_', ' ', $post->category) }} | {{ $post->reviews_count }} review{{ $post->reviews_count != 1 ? 's' : '' }}</div>
                  </div>
                  <div class="post-actions">
                    <a href="/edit-post/{{ $post->id }}" class="btn-xs edit">Edit</a>
                    <form action="/delete-post/{{ $post->id }}" method="POST" style="margin:0;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn-xs del">Delete</button>
                    </form>
                  </div>
                </div>
              @empty
                <p style="color:#9ca3af; text-align:center; padding:2.5rem 0;">No places posted yet.</p>
              @endforelse
            </div>
          </div>
        </div>

        <div id="tab-new-place" class="tab-panel">
          <div class="panel-card">
            <div class="panel-card-header">
              <h3>New Place</h3>
            </div>
            @if($errors->any())
              <div class="error-box">
                @foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach
              </div>
            @endif
            <form action="/create-post" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-field">
                <label>Place Name</label>
                <input type="text" name="title" placeholder="Angkor Wat" value="{{ old('title') }}" required>
              </div>
              <div class="form-field">
                <label>Category</label>
                <select name="category" required>
                  <option value="hot_spot">Hot Spots</option>
                  <option value="temple">Temple</option>
                  <option value="hotel">Hotel</option>
                  <option value="restaurant">Restaurant</option>
                  <option value="cafe">Cafe</option>
                </select>
              </div>
              <div class="form-field">
                <label>Image</label>
                <input type="file" name="image" accept="image/*" id="profileImageInput" required>
                <div id="profileImagePreview" style="display:none; margin-top:0.75rem;">
                  <img id="profilePreviewImg" src="" alt="Preview" style="max-height:200px; border-radius:10px; object-fit:cover;">
                </div>
              </div>
              <div class="form-field">
                <label>Details</label>
                <textarea name="body" placeholder="Location, opening hours, price, travel time..." required>{{ old('body') }}</textarea>
              </div>
              <div class="form-field">
                <label>Google Maps Embed</label>
                <textarea name="map_embed_url" placeholder="Paste Google Maps embed URL or iframe code" required>{{ old('map_embed_url') }}</textarea>
              </div>
              <button type="submit" class="publish-btn">Publish Place</button>
              <div style="clear:both;"></div>
            </form>
          </div>
        </div>
      @else
        <div id="tab-reviews" class="tab-panel">
          <div class="panel-card">
            <div class="panel-card-header">
              <h3>My Reviews</h3>
              <span class="panel-count">{{ $reviewCount }} review{{ $reviewCount != 1 ? 's' : '' }}</span>
            </div>
            <div class="post-list">
              @forelse($userReviews as $review)
                <div class="post-item">
                  <div>
                    <div class="post-item-title">{{ optional($review->post)->title ?? 'Deleted place' }}</div>
                    <div class="post-item-meta">{{ $review->rating }}/5 | {{ $review->created_at->diffForHumans() }}</div>
                    <div class="post-item-meta">{{ $review->comment }}</div>
                  </div>
                </div>
              @empty
                <p style="color:#9ca3af; text-align:center; padding:2.5rem 0;">You have not reviewed any places yet.</p>
              @endforelse
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
</div>
@endsection
