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

          <h2 class="h1 hero-title"> Hotels in Siem Reap</h2>

         
      

        </div>
      </section>






    <section class="package" id="package">
        <div class="container">

         

          <h2 class="h2 section-title">Popular Hotels</h2>

          <p class="section-text">
            Hotels which most people choose when they come to Siem Reap. These hotels are the most famous and most visited hotels in Siem Reap. 
            They are the most beautiful and most interesting hotels in Siem Reap. They are the most popular hotels in Siem Reap.
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Lotus Blanc/lotus_blanc_resort1.jpg') }}" alt="Lotus Hotel" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Lotus Blanc Resort</h3>

                  <p class="card-text">
                    Location: National Road No. 6, Krous Village, Svay Dangkum, Siem Reap, Cambodia <br>
                    Travel Time: 5–10 minutes <br>
                    Price Range: $58–340+ USD per night <br>
                    Airport Transfer Available: Yes <br>
                    Best For: Families, Couples, Business Travelers, and Leisure Travelers <br>
                  </p>


                </div>

             
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52712.86767926364!2d103.84817896464219!3d13.361015336098628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110173ef46ceccb%3A0x8f77faf8dca75372!2sLotus%20Blanc%20Resort!5e0!3m2!1sen!2skh!4v1780633706839!5m2!1sen!2skh"
                  width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Park Hyatt/park_hyatt1.jpg') }}" alt="Park Hyatt" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Park Hyatt</h3>

                  <p class="card-text">
                    Location: Sivutha Boulevard, Siem Reap, Cambodia <br>
                    Travel Time: 2–5 minutes <br>
                    Price Range: $180–300+ USD per night <br>
                    Airport Transfer Available: Yes <br>
                    Best For: Luxury Travelers <br>
                  </p>


                </div>

             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.8679347232082!2d103.85137871159523!3d13.35848690622196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110176e536156bb%3A0x9ca2b82b4eb14552!2sPark%20Hyatt%20Siem%20Reap!5e0!3m2!1sen!2skh!4v1780633739477!5m2!1sen!2skh" 
             width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 

              </div>
            </li>
          <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Raffles Grand/raffles_grand1.jpg') }}" alt="Raffles Grand" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Raffles Grand</h3>

                  <p class="card-text">
                    Location: Charles de Gaulle Avenue, Siem Reap, Cambodia <br>
                    Travel Time: 5 minutes <br>
                    Price Range: $250–400+ USD per night <br>
                    Airport Transfer Available: Yes <br>
                    Best For: Heritage & Luxury Experience <br>

                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.773131932285!2d103.8572787115952!3d13.36437810608916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31101773200f9833%3A0x6efb26ded6b0ea23!2sRaffles%20Grand%20Hotel%20d&#39;Angkor!5e0!3m2!1sen!2skh!4v1780633780637!5m2!1sen!2skh" 
            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
              </li>

              <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Sofitel Angkor/sofitel_angkor1.jpg') }}" alt="Sofitel Angkor" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Sofitel Angkor</h3>

                  <p class="card-text">
                    Location: Charles de Gaulle Avenue, Siem Reap, Cambodia <br>
                    Travel Time: 10 minutes <br>
                    Price Range: $150–250+ USD per night <br>
                    Airport Transfer Available: Yes <br>
                    Best For: Families and Resort Lovers <br>

                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.620652113655!2d103.85802191159526!3d13.373848105875533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110177135a20591%3A0x64da80821f25433e!2sSofitel%20Angkor%20Phokeethra%20Golf%20%26%20Spa%20Resort!5e0!3m2!1sen!2skh!4v1780633817734!5m2!1sen!2skh" 
            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
              </li>

              <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Sokha Angkor/sokha_angkor1.jpg') }}" alt="Sokha Angkor" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Sokha Angkor</h3>

                  <p class="card-text">
                    Location: National Road No. 6 & Sivatha Road, Siem Reap, Cambodia <br>
                    Travel Time: 5 minutes <br>
                    Price Range: $50–120+ USD per night <br>
                    Airport Transfer Available: Yes <br>
                    Best For: Mid-range and Family Travelers <br>

                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.7796296921247!2d103.85326521159514!3d13.36397440609818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110176d7ccaf6f5%3A0x70e45970ea5ff6ae!2sSokha%20Angkor%20Resort!5e0!3m2!1sen!2skh!4v1780633850674!5m2!1sen!2skh" 
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
              <p>Lotus Blanc Resort</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Lotus Blanc/lotus_blanc_resort2.jpg') }}">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Lotus Blanc Resort</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Lotus Blanc/lotus_blanc_resort3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Lotus Blanc Resort</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Lotus Blanc/lotus_blanc_resort4.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Park Hyatt</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Park Hyatt/park_hyatt2.jpg') }}">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Park Hyatt</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Park Hyatt/park_hyatt3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Park Hyatt</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Park Hyatt/park_hyatt4.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Park Hyatt</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Park Hyatt/park_hyatt5.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Raffles Grand</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Raffles Grand/raffles_grand2.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Raffles Grand</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Raffles Grand/raffles_grand3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Raffles Grand</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Raffles Grand/raffles_grand4.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Raffles Grand</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Raffles Grand/raffles_grand5.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Sofitel Angkor</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Sofitel Angkor/sofitel_angkor2.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Sofitel Angkor</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Sofitel Angkor/sofitel_angkor3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Sofitel Angkor</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Sofitel Angkor/sofitel_angkor4.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Sofitel Angkor</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Sofitel Angkor/sofitel_angkor5.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Sokha Angkor</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Sokha Angkor/sokha_angkor2.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Sokha Angkor</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Sokha Angkor/sokha_angkor3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <p>Sokha Angkor</p>
              <figure class="gallery-image">
                <img src="{{ asset('images/Sokha Angkor/sokha_angkor4.jpg') }}" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>



    </article>
  </main>

@endsection