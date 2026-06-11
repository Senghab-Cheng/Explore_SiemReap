<?php //layout.blade.php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temple to visit</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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

          

        </a>

        <a href="#" class="logo">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 120" width="100%" height="100%">
  <defs>
    <style>
      .brand-text {
        font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        font-size: 44px;
        font-weight: 500;
        fill: #cecbcb;
      }
      .compass-outline {
        fill: none;
        stroke: #cecbcb;
        stroke-width: 6;
        stroke-linecap: round;
        stroke-linejoin: round;
      }
      .center-ring {
        fill: #000000;
        stroke: #cecbcb;
        stroke-width: 6;
      }
    </style>
  </defs>

  <g transform="translate(10, 0)">

    <circle cx="60" cy="60" r="45" class="compass-outline" />
    
    <path d="M 37 83 L 53 53 L 83 37 L 67 67 Z" class="compass-outline" />
    
    <circle cx="60" cy="60" r="9" class="center-ring" />
  </g>

  <text x="135" y="74" class="brand-text">ExploreSR</text>
</svg>
        </a>

        <div class="header-btn-group">

          <button class="search-btn" aria-label="Search">
            <ion-icon name="search"></ion-icon>
          </button>

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
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

           <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-tiktok"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="{{ asset('images/logo-blue.svg') }}" alt="Tourly logo">
            </a>

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

        @auth
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-outline-danger">Logout</button>
            </form>
        @else
            <a href="/login" class="btn btn-primary">Login</a>
        @endauth

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
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 120" width="100%" height="100%">
  <defs>
    <style>
      .brand-text {
        font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        font-size: 44px;
        font-weight: 500;
        fill: #cecbcb;
      }
      .compass-outline {
        fill: none;
        stroke: #cecbcb;
        stroke-width: 6;
        stroke-linecap: round;
        stroke-linejoin: round;
      }
      .center-ring {
        fill: #000000;
        stroke: #cecbcb;
        stroke-width: 6;
      }
    </style>
  </defs>

  <!-- Compass Logo Mark -->
  <g transform="translate(10, 0)">
    <!-- Outer Ring -->
    <circle cx="60" cy="60" r="45" class="compass-outline" />
    
    <!-- Hollow Compass Needle pointed Northeast -->
    <path d="M 37 83 L 53 53 L 83 37 L 67 67 Z" class="compass-outline" />
    
    <!-- Central Ring overlay -->
    <circle cx="60" cy="60" r="9" class="center-ring" />
  </g>

  <!-- Typography -->
  <text x="135" y="74" class="brand-text">ExploreSR</text>
</svg>
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

              <a href="mailto:info.tourly.com" class="contact-link">ExploreSR.com</a>
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
          &copy; 2022 <a href="">Explore Siem Reap</a>. All rights reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Term & Condition</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">FAQ</a>
          </li>

        </ul>

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
  <script src="./assets/js/script.js"></script>

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
