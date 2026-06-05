@extends('layout')
@section('content')
  <main>


      <?php 
      $hero_img = [
        "img1" => "images/Bayon.webp",
        "img2" => "images/Bayon.webp",
        "img3" => "images/Taprohm.webp",
        "img4" => "images/angkor_night.jpg",
        "img5" => "images/angkor_day.avif"
      ];
       ?>      

      <section class="hero" id="home"style="background-image: url('<?php echo $hero_img['img1']; ?>');">
        <div class="container">

          <h2 class="h1 hero-title"> Café in Siem Reap</h2>

         
      

        </div>
      </section>






    <section class="package" id="package">
        <div class="container">

         

          <h2 class="h2 section-title">Popular Cafés</h2>

          <p class="section-text">
            Cafés which most people visit when they come to Siem Reap. These cafés are the most famous and most visited cafés in Siem Reap. 
            They are the most beautiful and most interesting cafés in Siem Reap. They are the most popular cafés in Siem Reap.
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/fern.jpg') }}" alt="Fern Café" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Fern Café</h3>

                  <p class="card-text">

                   Opening Hours: 7:30 AM to 7:00 PM


                  </p>


                </div>

             
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1941.1622575707252!2d103.84186451419062!3d13.330078453926067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311019eba5676911%3A0xf857dbee759cd207!2sFern%20Cafe%20Siemreap!5e0!3m2!1sen!2skh!4v1780388399698!5m2!1sen!2skh" 
                width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

 

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/bean_embassy.jpg') }}"alt="The Bean Embassy Roastery & Specialty Coffee" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">The Bean Embassy Roastery & Specialty Coffee</h3>

                  <p class="card-text">
                    Opening Hours: 6:00 AM To 9:00 PM
                  </p>


                </div>

             
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.006098716711!2d103.86102249999999!3d13.349896600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110176b9b2c51f7%3A0x3e80376fb490e5!2sThe%20Bean%20Embassy%20Roastery%20%26%20Specialty%20Coffee!5e0!3m2!1sen!2skh!4v1780388967484!5m2!1sen!2skh" 
                  width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 

              </div>
            </li>
          <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/footprint.jpg') }}" alt="Footprint Café" loading="lazy">
                  
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Footprint Café</h3>

                  <p class="card-text">
                    Opening Hours: 7:00 AM to 8:00 PM
                  </p>


                </div>

             
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.937035124427!2d103.85578307508305!3d13.354191286997494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110177a90d2f5e7%3A0x2f08b283577ff5b3!2sFootprint%20Cafes!5e0!3m2!1sen!2skh!4v1780389326077!5m2!1sen!2skh" 
                 width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 

              </div>
              </li>

               <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/sbov.webp') }}" alt="Sbov Coffee   " loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Sbov Coffee</h3>

                  <p class="card-text">
                    Opening Hours: 8:00 AM to 9:00 PM
                  </p>


                </div>

             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.94597265915!2d103.8550056750831!3d13.35363558699801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110175344e4e861%3A0xc0696d4e2cddfb71!2sSbov%20caf%C3%A9!5e0!3m2!1sen!2skh!4v1780389568361!5m2!1sen!2skh"
              width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 

              </div>
              </li>
              <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/BROWN.jpg') }}" alt="BROWN Coffee | Treeline" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">BROWN Coffee | Treeline</h3>

                  <p class="card-text">
                    Opening Hours: 6:30 AM to 9:00 PM
                  </p>


                </div>

             
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d970.4780130517136!2d103.85783072852362!3d13.355744504018073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311017706fc1e793%3A0xf5a7647db7b56581!2sBROWN%20Coffee%20%7C%20Treeline!5e0!3m2!1sen!2skh!4v1780630932971!5m2!1sen!2skh" 
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




    </article>
  </main>


@endsection