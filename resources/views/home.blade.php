@extends('layout')
@section('content')
  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <?php 
      $hero_img = [
        "img1" => "images/Bayon.webp",
        "img2" => "images/angkor_night.jpg",
        "img3" => "images/Taprohm.webp",
        "img4" => "images/angkor_day.avif",
        "img5" => "images/b1.webp",
        "img6" => "images/b2.webp",
        "img7" => "images/b3.webp"
      ];
       ?>       

      <section class="hero" id="home" style="background-image: url('<?php echo $hero_img['img1']; ?>');">
        <div class="container">
         
          <h2 class="h1 hero-title">Explore Siem Reap</h2>

          <p class="hero-text">
            Siem Reap is a city in northwestern Cambodia known for its proximity to the Angkor Wat temple complex, a UNESCO World Heritage Site. The city is a popular tourist destination, 
            offering a mix of ancient history, vibrant culture, and modern amenities. Visitors can explore the stunning temples,
             experience local markets, and enjoy the lively nightlife. Siem Reap also serves as a gateway to the nearby Tonle Sap Lake, where visitors can take boat tours to see floating villages and diverse wildlife.
          </p>

      
        </div>
      </section>





      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">

          <p class="section-subtitle">Uncover place</p>

          <h2 class="h2 section-title">Popular Places In Siem Reap</h2>

        

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="{{ asset('images/angkor_night.jpg') }}" alt="SiemReap,Angkor Wat" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Siem Reap</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Angkor Wat at night</a>
                  </h3>

                  <p class="card-text">
                   When Life hurts, Siem Reap heals!
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="{{ asset('images/TaProhm.webp') }}" alt="Ta Prohm Temple" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Siem Reap</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Ta Prohm Temple</a>
                  </h3>

                  <p class="card-text">
                    When Life hurts, Siem Reap heals!
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="{{ asset('images/Bayon.webp') }}" alt="Bayon Temple" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Siem Reap</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Bayon Temple</a>
                  </h3>

                  <p class="card-text">
                   Siem Reap is the best. 
                  </p>

                </div>

              </div>
            </li>

              <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="{{ asset('images/angkor_day.avif') }}" alt="Angkor Wat" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Siem Reap</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Angkor Wat</a>
                  </h3>

                  <p class="card-text">
                   Siem Reap is the best. 
                  </p>

                </div>

              </div>
            </li>
             <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="{{ asset('images/Pub-street-in-Siem-Reap.webp') }}" alt="Pub Street" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Siem Reap</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Pub Street</a>
                  </h3>

                  <p class="card-text">
                   Siem Reap is the best. 
                  </p>

                </div>

              </div>
            </li>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="{{ asset('images/Pub-street-in-Siem-Reap.webp') }}" alt="Pub Street" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Siem Reap</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Pub Street</a>
                  </h3>

                  <p class="card-text">
                   Siem Reap is the best. 
                  </p>

                </div>

              </div>
            </li>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="{{ asset('images/Pub-street-in-Siem-Reap.webp') }}" alt="Pub Street" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Siem Reap</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Pub Street</a>
                  </h3>

                  <p class="card-text">
                   Siem Reap is the best. 
                  </p>

                </div>

              </div>
            </li>
            
             <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="{{ asset('images/Pub-street-in-Siem-Reap.webp') }}" alt="Pub Street" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Siem Reap</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Pub Street</a>
                  </h3>

                  <p class="card-text">
                   Siem Reap is the best. 
                  </p>

                </div>

              </div>
            </li>
            
            

          </ul>

          <button class="btn btn-primary">More Places</button>

        </div>
      </section>








      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo's From Travellers</h2>

          <p class="section-text">
            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
            Sit ornare
            mollitia tenetur, aptent.
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Bayon.webp') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Pub-street-in-Siem-Reap.webp') }}" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>





      

    </article>
  </main>

@endsection