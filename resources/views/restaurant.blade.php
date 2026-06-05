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

          <h2 class="h1 hero-title"> Restaurants in Siem Reap</h2>

         
      

        </div>
      </section>






    <section class="package" id="package">
        <div class="container">

         

          <h2 class="h2 section-title">Popular Restaurants</h2>

          <p class="section-text">
            Restaurants which most people choose when they come to Siem Reap. These restaurants are the most famous and most visited in Siem Reap. 
            They are the most beautiful and most interesting restaurants in Siem Reap. They are the most popular restaurants in Siem Reap.
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Fumizen/fumizen6.jpg') }}" alt="Fumizen" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Fumizen Siem Reap</h3>

                  <p class="card-text">
                    Name: Fumizen Siem Reap (japanese food) <br>
                    Location: 9 Preah Sangreach Tep Vong St, Krong Siem Reap <br>
                    Phone:063 210 775 <br>
                    Opening Hours: 10 AM - 10 PM <br>
                    Nearby Sites: Pup Street <br>
                    Google Reviews: 4.6/5 <br>

                  </p>


                </div>

             
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.8697366601127!2d103.85212071159516!3d13.358374906224508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110172910a8b5ed%3A0xf7f0667d1c340494!2sFumizen%20Siem%20Reap!5e0!3m2!1sen!2skh!4v1780634514075!5m2!1sen!2skh" 
                 width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Soursdey Lumhae/soursdey_lumhae_resturant9.jpg') }}" alt="Soursdey Lumhae" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Soursdey Lumhae</h3>

                  <p class="card-text">
                    Name: Soursdey Lumhae Phnom Krom <br>
                    Location: 7RVP+5XV, Krong Siem Reap <br>
                    Phone: 089 838 459 <br>
                    Opening Hours: 7:00 AM to 7:00 PM <br>
                    Nearby Sites: Phnom Krom (mountain) <br>
                    Google Reviews: 4.6/5 <br>

                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2935.0074612352855!2d103.8354021809077!3d13.291610967177498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311019003ad00caf%3A0x866c397be51a72e4!2z4Z6f4Z694Z6f4Z-S4Z6P4Z64IOGem-GfhuGeoOGfguGel-GfkuGek-GfhuGegOGfkuGemuGfhOGemOKAiyAoU291cnNkZXkgTHVtaGFlIFBobm9tIEtyb20p!5e0!3m2!1sen!2skh!4v1780644817938!5m2!1sen!2skh" 
            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 

              </div>
            </li>
          <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Mesa Restaurant/mesa_restaurant3.jpg') }}" alt="Mesa Restaurant" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Mesa Restaurant</h3>

                  <p class="card-text">
                    Name: Mesa - Restaurant <br>
                    Location: 9V33+WRF, 17252 Road 2, Krong Siem Reap 17252 <br>
                    Phone: 069 389 966 <br>
                    Opening Hours: 11:00 AM to 12:00 PM <br>
                    Nearby Sites: in Pub Street <br>
                    Google Reviews: 4.9/5 <br>

                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.9279071183637!2d103.85184481159507!3d13.35475880630596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110171bcdb7580d%3A0x5e8779bfbcb24fb!2sMesa%20-%20Restaurant!5e0!3m2!1sen!2skh!4v1780644744782!5m2!1sen!2skh" 
            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
              </li>

              <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Polo Food/polo_food_restaurant_building.jpg') }}" alt="Polo Food" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Polo Food</h3>

                  <p class="card-text">
                    Name: Polo Food <br>
                    Location: Crocodile Road, Krong Siem Reap 12000 <br>
                    Phone: 069 389 966 <br>
                    Opening Hours: 11:00 AM to 12:00 PM <br>
                    Nearby Sites: pub street <br>
                    Google Reviews: 4.8/5 <br>


                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.0615982152635!2d103.85208041159505!3d13.346444406493266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311017216d7f8629%3A0x76635ce72093bfb1!2sPolo%20Food!5e0!3m2!1sen!2skh!4v1780644709548!5m2!1sen!2skh" 
            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
              </li>

              <li>
            
            <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('images/Mealea Watbo/mealea_watbo9.jpg') }}" alt="Mealea Watbo" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Mealea Watbo</h3>

                  <p class="card-text">
                    Name: Mealea Watbo <br>
                    Location: Street 26, Krong Siem Reap <br>
                    Phone: 069 892 999 <br>
                    Opening Hours: 11:00 AM to 11:00 PM <br>
                    Nearby Sites: River Side <br>
                    Google Reviews: 4.8/5 <br>

                  </p>


                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7763.9138953677175!2d103.85791445077152!3d13.352953172997168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311017006630b96b%3A0x27d94167559251f1!2sMealea%20Watbo!5e0!3m2!1sen!2skh!4v1780644673035!5m2!1sen!2skh" 
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



    </article>
  </main>

@endsection