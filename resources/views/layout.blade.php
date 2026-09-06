<?php //layout.blade.php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Siemreap</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- 
    - custom css link
  -->
  @vite(['resources/css/style.css', 'resources/css/app.css', 'resources/js/app.js'])

  <!-- 
    - google font link
  -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="#" class="logo">
          <img class="brand-logo" src="{{ asset('images/angkor1.png') }}" alt="ExploreSR">
        </a>

        <div class="header-btn-group">

        @auth
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-outline-danger">Logout</button>
            </form>
        @else
            <a href="/login" class="btn btn-primary">Login</a>
        @endauth

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="https://www.facebook.com/share/1D3KfBdv2X/?mibextid=wwXIfr" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/ministry_of_tourismcambodia" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://youtube.com/@officialtourism.cambodia?si=uVs_ir35m_jbL0Pi" class="social-link" target="_blank" rel="noopener noreferrer">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">
            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

 <!-- 
    - #navigation 
  -->


          <ul class="navbar-list">

            <li>
              <a href="/" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="/hot_spot" class="navbar-link" data-nav-link>Hot Spots</a>
            </li>

            <li>
              <a href="/temple" class="navbar-link" data-nav-link>Temple</a>
            </li>

            <li>
              <a href="/hotel" class="navbar-link" data-nav-link>Hotel</a>
            </li>

            <li>
              <a href="/restaurant" class="navbar-link" data-nav-link>Restaurant</a>
            </li>

            <li>
              <a href="/cafe" class="navbar-link" data-nav-link>Café</a>
            </li>

            @auth
            <li>
              <a href="/profile" class="navbar-link" data-nav-link>Profile</a>
            </li>
            @endauth

          </ul>

        </nav>

      </div>
    </div>

  </header>




  <main>

    @yield('content')






    
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">
 <div class="footer-brand">








          <a href="#" class="logo">
            <img class="brand-logo" src="{{ asset('images/angkor1.png') }}" alt="ExploreSR">
          </a>

          <p class="footer-text">
           Let's go siem reap together and explore the beauty of this city. We are here to make your trip unforgettable and full of wonderful memories.
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Contact Us</h4>

          <p class="contact-text">
            Feel free to contact and reach us !!
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+01123456790" class="contact-link">+855 (16) 4567 90</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:info@exploresr.com" class="contact-link">ExploreSR.com</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>ParagonIU, Phnom Penh, Cambodia</address>
            </li>

          </ul>

        </div>


      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2026 <a href="">Explore Siem Reap</a>. All rights reserved
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	  @isset($hero_img)
	  <script>
	      const imgrotate = @json(array_map(fn($image) => asset($image), $hero_img));
	      const heroImages = Object.values(imgrotate);
	      let currentIndex = 0;
	      const heroSection = document.getElementById('home');
	  
	      function rotateimg() {
	        if (!heroSection || heroImages.length < 2) return;
	        currentIndex = (currentIndex + 1) % heroImages.length;
	        heroSection.style.backgroundImage = `url('${heroImages[currentIndex]}')`;
	      }
  
      setInterval(rotateimg, 2500);
  </script>
  @endisset
</body>

</html>
