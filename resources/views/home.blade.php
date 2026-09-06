@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<main>
  <article>
    <section class="hero" id="home">
      <div class="hero-bg" style="background-image: url('{{ asset("images/Angkor Wat/angkor_wat1.jpg") }}');"></div>
      <div class="hero-overlay"></div>

      <div class="hero-content">
        <div class="hero-eyebrow">Siem Reap, Cambodia</div>
        <h1 class="hero-title">Where Ancient<br><span>Temples</span> Meet<br>Living Culture</h1>
        <p class="hero-text">
          Step into a world where thousand-year-old temple complexes rise from the jungle, riverside markets overflow with colour, and every turn reveals a story carved in stone. Siem Reap is not just a destination, it is an experience that stays with you.
        </p>
        <div class="hero-cta-group">
          <a href="#hotspots" class="btn-primary">Explore Hotspots</a>
          <a href="#destination" class="btn-outline">View All Places</a>
        </div>
      </div>

      <div class="hero-scroll">Scroll</div>
    </section>

    <div id="hotspots">
      <div class="hotspots-intro" style="padding: 5rem 2rem 3rem;">
        <p class="section-label">Discover Siem Reap</p>
        <h2 class="section-heading" style="text-align:center;">Check out Hotspots<br>Worth Your Every Step</h2>
        <p style="color: var(--text-muted); font-size: 0.97rem; line-height: 1.8; text-align: center; margin-top: 0.75rem;">
          From temple corridors to buzzing night markets and rooftop coffee these are the places that define a Siem Reap journey.
        </p>
      </div>
    </div>


    <div class="hotspot-split">
      <div class="split-img">
        <img src="{{ asset('images/Angkor Wat/angkor_wat1.jpg') }}" alt="Angkor Wat Temple Complex">
        <span class="split-badge">Temples</span>
      </div>
      <div class="split-content">
        <p class="section-label">Ancient Wonders</p>
        <h2 class="section-heading">Sacred Temple<br>Complexes</h2>
        <p class="split-desc">
          The Angkor Archaeological Park is the soul of Siem Reap. Wander the grand causeway of Angkor Wat at sunrise, discover the serene stone faces of Bayon, and feel the jungle reclaim Ta Prohm's vine-wrapped towers. Each temple tells a chapter of the Khmer Empire's extraordinary story.
        </p>
        <div class="split-meta">
          <span>20+ temples</span>
          <span>UNESCO Heritage Site</span>
          <span>9th–15th century</span>
        </div>
        <a href="/temple" class="split-link">Explore Temples</a>
      </div>
    </div>

    <div class="hotspot-split reverse">
      <div class="split-img">
        <img src="{{ asset('images/Sokha Angkor/sokha_angkor5.jpg') }}" alt="Luxury hotels in Siem Reap">
        <span class="split-badge">Hotels</span>
      </div>
      <div class="split-content bg-green">
        <p class="section-label">Rest &amp; Comfort</p>
        <h2 class="section-heading">Handpicked<br>Stays</h2>
        <p class="split-desc">
          From intimate boutique guesthouses tucked in the old French quarter to luxurious resort pools that mirror the jungle canopy Siem Reap's accommodations are as memorable as the temples themselves. Wake up refreshed and ready for your next adventure.
        </p>
        <div class="split-meta">
          <span>Boutique &amp; Luxury</span>
          <span>Central &amp; Riverside</span>
          <span>All budgets</span>
        </div>
        <a href="/hotel" class="split-link">Browse Hotels</a>
      </div>
    </div>

    <div class="hotspot-split">
      <div class="split-img">
        <img src="{{ asset('images/Mesa Restaurant/mesa_restaurant2.jpg') }}" alt="Restaurants and Khmer cuisine">
        <span class="split-badge">Restaurants</span>
      </div>
      <div class="split-content">
        <p class="section-label">Khmer Flavours</p>
        <h2 class="section-heading">Dine Like a<br>Local &amp; Beyond</h2>
        <p class="split-desc">
          Khmer cuisine is a revelation fragrant amok curries, crispy lok lak beef, and tangy papaya salads burst with fresh herbs and lemongrass. Beyond traditional cooking, Siem Reap's restaurant scene spans international kitchens, riverside terraces, and street-food alleyways that come alive after dark.
        </p>
        <div class="split-meta">
          <span>Khmer cuisine</span>
          <span>Street food</span>
          <span>Fine dining</span>
        </div>
        <a href="/restaurant" class="split-link">Find Restaurants</a>
      </div>
    </div>


    <div class="hotspot-split reverse">
      <div class="split-img">
        <img src="{{ asset('images/bean_embassy.jpg') }}" alt="Cafes in Siem Reap">
        <span class="split-badge">Cafés</span>
      </div>
      <div class="split-content bg-green">
        <p class="section-label">Slow Mornings</p>
        <h2 class="section-heading">Café Culture<br>in the Tropics</h2>
        <p class="split-desc">
          Siem Reap's café scene has flourished into something wonderful. Sip Cambodian drip coffee under a slowly turning fan, discover social enterprises training at risk youth through barista craft, or find a shaded courtyard garden perfect for writing postcards you'll never quite send.
        </p>
        <div class="split-meta">
          <span>Cambodian coffee</span>
          <span>Courtyard gardens</span>
          <span>Social enterprises</span>
        </div>
        <a href="/cafe" class="split-link">Discover Cafés</a>
      </div>
    </div>

    <section class="popular-section" id="destination">
      <div class="inner">
        <div class="popular-header">
          <div>
            <p class="section-label">Top Picks</p>
            <h2 class="section-heading" style="margin-bottom:0;">Popular Places</h2>
          </div>
          <a href="/hot_spot" class="btn-primary" style="white-space:nowrap;">More Places</a>
        </div>

        <div class="popular-grid">

          <a href="/temple" class="place-card">
            <div class="place-card-img">
              <img src="{{ asset('images/angkor_night.jpg') }}" alt="Angkor Wat at Night" loading="lazy">
              <div class="place-card-rating">5.0</div>
            </div>
            <div class="place-card-body">
              <p class="place-card-tag">Temple</p>
              <h3 class="place-card-title">Angkor Wat at Night</h3>
              <p class="place-card-desc">The great temple by moonlight torchlit reflections shimmer across the moat in an unforgettable stillness.</p>
            </div>
          </a>

          <a href="/temple" class="place-card">
            <div class="place-card-img">
              <img src="{{ asset('images/Bayon.webp') }}" alt="Bayon Temple" loading="lazy">
              <div class="place-card-rating">4.9</div>
            </div>
            <div class="place-card-body">
              <p class="place-card-tag">Temple</p>
              <h3 class="place-card-title">Bayon Temple</h3>
              <p class="place-card-desc">Two hundred serene stone faces gaze in every direction from this captivating 12th-century mountain temple.</p>
            </div>
          </a>

          <a href="/temple" class="place-card">
            <div class="place-card-img">
              <img src="{{ asset('images/angkor_day.avif') }}" alt="Angkor Wat" loading="lazy">
              <div class="place-card-rating">5.0</div>
            </div>
            <div class="place-card-body">
              <p class="place-card-tag">Temple</p>
              <h3 class="place-card-title">Angkor Wat</h3>
              <p class="place-card-desc">The world's largest religious monument a spiritual and architectural masterpiece that simply must be seen.</p>
            </div>
          </a>

          <a href="/hot_spot" class="place-card">
            <div class="place-card-img">
              <img src="{{ asset('images/b1.webp') }}" alt="Night Market" loading="lazy">
              <div class="place-card-rating">4.8</div>
            </div>
            <div class="place-card-body">
              <p class="place-card-tag">Market</p>
              <h3 class="place-card-title">Artisan Night Market</h3>
              <p class="place-card-desc">Hand-woven silks, and silver jewellery made by local the perfect place for mindful souvenirs.</p>
            </div>
          </a>

        </div>
      </div>
    </section>

    <section class="gallery-section" id="gallery">
      <div class="inner">
        <div class="gallery-header">
          <p class="section-label">Photo Gallery</p>
          <h2 class="section-heading">Through the Travellers' Lens</h2>
          <p style="color: rgba(255,255,255,0.6); max-width: 500px; margin: 0.75rem auto 0; font-size: 0.95rem; line-height: 1.75;">
            Real moments, real light, real Siem Reap captured by those who fell in love with this place and came home changed.
          </p>
        </div>

        <div class="gallery-grid">
          <div class="g-item tall">
            <img src="{{ asset('images/Angkor Wat/angkor_wat1.jpg') }}" alt="Angkor Wat">
          </div>
          <div class="g-item">
            <img src="{{ asset('images/Bayon.webp') }}" alt="Bayon Temple">
          </div>
          <div class="g-item wide">
            <img src="{{ asset('images/angkor_night.jpg') }}" alt="Angkor at Night" style="min-height:220px;">
          </div>
           <div class="g-item">
            <img src="{{ asset('images/Mesa Restaurant/mesa_restaurant2.jpg') }}" alt="Pub Street">
          </div>
          <div class="g-item">
            <img src="{{ asset('images/Angkor National Museum/angkor_museum1.jpg') }}" alt="Pub Street">
          </div>
          <div class="g-item">
            <img src="{{ asset('images/sbov.webp') }}" alt="Pub Street">
          </div>
          <div class="g-item">
            <img src="{{ asset('images/b1.webp') }}" alt="Pub Street">
          </div>
          <div class="g-item">
            <img src="{{ asset('images/preahkhan.webp') }}" alt="Pub Street">
          </div>
        </div>
      </div>
    </section>

  </article>
</main>
@endsection
