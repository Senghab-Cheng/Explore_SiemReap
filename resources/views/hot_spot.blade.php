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

          <h2 class="h1 hero-title"> Popular places to visit in Siem Reap</h2>

         
      

        </div>
      </section>






    <section class="package" id="package">
        <div class="container">

         

          <h2 class="h2 section-title">Popular places to visit</h2>

          <p class="section-text">
            Places which most people visit when they come to Siem Reap. These places are the most famous and most visited in Siem Reap. 
            They are the most beautiful and most interesting places in Siem Reap. They are the most popular places in Siem Reap.
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Pub Street/pub_street4.jpg') }}" alt="Pub Street" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Pub Street</h3>

                  <p class="card-text">
                    Location: Downtown Siem Reap, Cambodia <br>
                    Travel Time: 3–5 minutes <br>
                    Entrance Fee: Free <br>
                    Best Time to Visit: Evening (6:00 PM – 11:00 PM) <br>
                    Photos: Night Market, Restaurants, Street Performers


                  </p>


                </div>

             
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.9270787712185!2d103.85215481159508!3d13.354810306304804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110176565345cf5%3A0x8b34e613032754ea!2sStreet%2008%2C%20Krong%20Siem%20Reap!5e0!3m2!1sen!2skh!4v1780646051728!5m2!1sen!2skh" 
                width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/អាកោត្នោតព្រះដាក់/អាកោត្នោតព្រះដាក់1.jpg') }}" alt="Bayon Temple" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">អាកោត្នោតព្រះដាក់</h3>

                  <p class="card-text">
                    Location: 810, Preah Dak, Krong Siem Reap <br>
                    Opening Hours: 7:00 AM To 6:00 PM <br>
                    Google Reviews: 4.5/5 (339) <br>

                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56022.68526771663!2d103.90472447935939!3d13.444117450915682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31103fe7311d968d%3A0x3157fd786aedcbaf!2z4Z6i4Z624Z6A4Z-E4Z6P4Z-S4Z6T4Z-E4Z6P4Z6W4Z-S4Z6a4Z-H4Z6K4Z624Z6A4Z-LIOGen-GfgOGemOGemuGetuGelA!5e0!3m2!1sen!2skh!4v1780645907368!5m2!1sen!2skh" 
            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 

              </div>
            </li>
          <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Angkor National Museum/angkor_museum1.jpg') }}" alt="Angkor National Museum" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Angkor National Museum</h3>

                  <p class="card-text">
                    Location: Charles de Gaulle Road, Siem Reap, Cambodia <br>
                    Travel Time: 5–10 minutes <br>
                    Entrance Fee: $12 USD <br>
                    Best Time to Visit: Morning or Afternoon <br>
                    Photos: Khmer Artifacts, Ancient Sculptures, Historical Exhibits <br>


                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.739753233035!2d103.85753921159514!3d13.366451706042335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110170ccc06c39f%3A0x9f46043c5565afe3!2sAngkor%20National%20Museum!5e0!3m2!1sen!2skh!4v1780645947940!5m2!1sen!2skh" 
            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
              </li>

              <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Angkor Night Market/angkor_night_market2.jpg') }}" alt="Angkor Night Market" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Angkor Night Market</h3>

                  <p class="card-text">
                    Location: Sivatha Boulevard, Siem Reap, Cambodia <br>
                    Travel Time: 5 minutes <br>
                    Entrance Fee: Free <br>
                    Best Time to Visit: Evening (6:00 PM – 10:00 PM) <br>
                    Photos: Souvenir Shops, Local Handicrafts, Street Food <br>


                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.9430902463173!2d103.84887811159517!3d13.353814806327254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311017642b8fef1f%3A0xf6c504a18c4a250!2sAngkor%20Night%20Market%20St%2C%20Krong%20Siem%20Reap!5e0!3m2!1sen!2skh!4v1780646091350!5m2!1sen!2skh" 
            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
              </li>

              <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Cambodian Cultural Village/cambodian_cultural_village2.jpg') }}" alt="Cambodian Cultural Village" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Cambodian Cultural Village</h3>

                  <p class="card-text">
                    Location: National Road No. 6, Siem Reap, Cambodia <br>
                    Travel Time: 10–15 minutes <br>
                    Entrance Fee: Approximately $15 USD <br>
                    Best Time to Visit: Morning <br>
                    Photos: Traditional Khmer Houses, Cultural Performances, Miniature Landmarks <br>

                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.561723359856!2d103.82828741159535!3d13.377506205792987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31101730dd7f9803%3A0x257b3fe85103a683!2sAngkor%20Green%20Gardens%20Park%20by%20Dara!5e0!3m2!1sen!2skh!4v1780646180669!5m2!1sen!2skh"
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
                <img src="{{ asset('images/Pub Street/pub_street2.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Pub Street/pub_street1.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/អាកោត្នោតព្រះដាក់/អាកោត្នោតព្រះដាក់2.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/អាកោត្នោតព្រះដាក់/អាកោត្នោតព្រះដាក់3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Angkor National Museum/angkor_museum2.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Angkor National Museum/angkor_museum3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Angkor National Museum/angkor_museum4.jpg') }}" alt="Gallery image">
              </figure>
            </li>


            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Angkor Night Market/angkor_night_market1.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Angkor Night Market/angkor_night_market3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Angkor Night Market/angkor_night_market4.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Angkor Night Market/angkor_night_market5.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Cambodian Cultural Village/cambodian_cultural_village1.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Cambodian Cultural Village/cambodian_cultural_village3.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Cambodian Cultural Village/cambodian_cultural_village4.jpg') }}" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="{{ asset('images/Cambodian Cultural Village/cambodian_cultural_village5.jpg') }}" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>



    </article>
  </main>


  @endsection