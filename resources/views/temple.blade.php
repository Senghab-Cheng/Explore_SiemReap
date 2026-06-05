@extends('layout')
@section('content')
  <main>


      <?php 
      $hero_img = [
        "img1" => "images/Angkor Wat/angkor_wat1.jpg",
        "img2" => "images/Bayon Temple/bayon1.jpg",
        "img3" => "images/Ta prohm Temple/ta_prohm1.jpg",
        "img4" => "images/Banteay Srei Temple/bantey_srei1.jpg",
        "img5" => "images/Preah Khan Temple/preah_Khan.jpg",
      ];
       ?>      

      <section class="hero" id="home"style="background-image: url('<?php echo $hero_img['img1']; ?>');">
        <div class="container">

          <h2 class="h1 hero-title"> Temples in Siem Reap</h2>

         
      

        </div>
      </section>






    <section class="package" id="package">
        <div class="container">

         

          <h2 class="h2 section-title">Popular Temples</h2>

          <p class="section-text">
            Temples which most people visit when they come to Siem Reap. These temples are the most famous and most visited temples in Siem Reap. 
            They are the most beautiful and most interesting temples in Siem Reap. They are the most popular temples in Siem Reap.
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Angkor Wat/angkor_wat2.jpg') }}" alt="Angkor Wat" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Angkor Wat</h3>

                  <p class="card-text">
                    Location: Angkor Archaeological Park, Siem Reap, Cambodia <br>
                    Travel Time: 10–15 minutes <br>
                    Entrance Fee: 1-Day Pass: $37 USD <br>
                    Opening Hours: 5:00 AM – 5:30 PM <br>
                    Tour Guide Available: Yes <br>
                    Tour Guide Cost: $15–30 USD <br>

                  </p>


                </div>

             
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.9977005731057!2d103.8669857!3d13.412469300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110168aea9a272d%3A0x3eaba81157b0418d!2sAngkor%20Wat!5e0!3m2!1sen!2skh!4v1780580886692!5m2!1sen!2skh"
                  width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Bayon Temple/bayon1.jpg') }}" alt="Bayon Temple" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Bayon Temple</h3>

                  <p class="card-text">
                    Location: Angkor Thom, Siem Reap, Cambodia <br>
                    Travel Time: 15–20 minutes <br>
                    Entrance Fee: Included in Angkor Pass <br>
                    Opening Hours: 7:30 AM – 5:30 PM <br>
                    Tour Guide Available: Yes <br>
                    Tour Guide Cost: $15–30 USD <br>
                  </p>


                </div>

             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.5317073693072!2d103.8563233115959!3d13.441288304350444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110142eaef23a95%3A0xa956c7b5e1b19d63!2sBayon%20Temple!5e0!3m2!1sen!2skh!4v1780581013980!5m2!1sen!2skh"
              width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 

              </div>
            </li>
          <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Ta Prohm temple/ta_prohm2.jpg') }}" alt="Ta Prohm Temple" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Ta Prohm Temple</h3>

                  <p class="card-text">
                    Location: Angkor Archaeological Park, Siem Reap, Cambodia <br>
                    Travel Time: 20–25 minutes <br>
                    Entrance Fee: Included in Angkor Pass <br>
                    Opening Hours: 7:30 AM – 5:30 PM <br>
                    Tour Guide Available: Yes <br>
                    Tour Guide Cost: $15–30 USD <br>

                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.636717868916!2d103.88672381159583!3d13.4347993044974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311015dfb229a5df%3A0xcfb9459e2f62051e!2sTa%20Prohm%20Temple!5e0!3m2!1sen!2skh!4v1780581660571!5m2!1sen!2skh"
             width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
              </li>

              <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Banteay Srei Temple/bantey_srei2.jpg') }}" alt="Bantey Srei Temple" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Bantey Srei</h3>

                  <p class="card-text">
                    Location: Banteay Srei District, Siem Reap, Cambodia <br>
                    Travel Time: 35–45 minutes <br>
                    Entrance Fee: Included in Angkor Pass <br>
                    Opening Hours: 7:30 AM – 5:30 PM <br>
                    Tour Guide Available: Yes <br>
                    Tour Guide Cost: $15–30 USD <br>

                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31023.538516630237!2d103.94888135595835!3d13.600335412528459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311043d9a8f504af%3A0x42ecca32e9086c44!2sBanteay%20Srei!5e0!3m2!1sen!2skh!4v1780581616199!5m2!1sen!2skh"
             width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
              </li>

              <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Preah Khan Temple/preah_khan2.jpg') }}" alt="Preah Khan Temple" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Preah Khan Temple</h3>

                  <p class="card-text">
                    Location: Angkor Archaeological Park, Siem Reap, Cambodia <br>
                    Travel Time: 20–25 minutes <br>
                    Entrance Fee: Included in Angkor Pass <br>
                    Opening Hours: 7:30 AM – 5:30 PM <br>
                    Tour Guide Available: Yes <br>
                    Tour Guide Cost: $15–30 USD <br>
                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.1979379413438!2d103.86900141159609!3d13.461892803882998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311015b38b60a611%3A0xac2aec7536309927!2sPreah%20Khan%20Temple!5e0!3m2!1sen!2skh!4v1780581127353!5m2!1sen!2skh"
             width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
              </li>

                  </ul>

                </div>

                

              </div>
            </li>

          </ul>
        </div>
      </section>

    <article>



      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo's From Travellers</h2>

          <p class="section-text">
            
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Preah Khan Temple/preah_khan3.jpg') }}">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Preah Khan Temple/preah_khan4.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Angkor Wat/angkor_wat3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Angkor Wat/angkor_wat4.jpg') }}">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Angkor Wat/angkor_wat5.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Banteay Srei Temple/bantey_srei3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Banteay Srei Temple/bantey_srei4.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Bayon Temple/bayon3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Bayon Temple/bayon4.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Preah Khan Temple/preah_khan3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Preah Khan Temple/preah_khan4.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Ta Prohm Temple/ta_prohm3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Ta Prohm Temple/ta_prohm4.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Ta Prohm Temple/ta_prohm5.jpg') }}" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>



    </article>
  </main>

@endsection