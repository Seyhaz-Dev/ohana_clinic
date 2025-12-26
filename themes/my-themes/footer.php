<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_header(); ?>

<footer class="site-footer">
  <!-- Top subscribe bar -->
  <div class="footer-top">
    <div class="container footer-top-grid">
      <!-- Social -->
      <div class="footer-social">
        <h4>CONNECT WITH US</h4>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-telegram-plane"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- Newsletter -->
      <div class="footer-newsletter">
        <h4>SUBSCRIBE OUR NEWSLETTER</h4>
        <form class="newsletter-form">
          <input type="email" placeholder="Enter your email" required>
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </div>
  </div>

 
  <div class="footer-main">
    <div class="container footer-grid">
     
      <div class="footer-brand">
        <img src="http://ohana.test/wp-content/uploads/2025/12/Pasted-image.png" alt="Intercare Hospital">
        <h3>Ohana Clinic for health</h3>
      </div>

      
      <div class="footer-links">
        <h4>ABOUT INTERCARE</h4>
        <ul>
          <li><a href="#">Our Story</a></li>
          <li><a href="#">News & Events</a></li>
          <li><a href="#">Job Opportunities</a></li>
          <li><a href="#">CSR</a></li>
        </ul>
      </div>

  
     <div class="footer-contact">
        <h4>FIND US</h4>

        <p>
            <i class="fa-solid fa-location-dot"></i>
            Fujiki Building 4F, 1-12-8 Higashi-Ikebukuro, Toshima-ku, Tokyo 170-
        </p>

        <p>
            <i class="fa-solid fa-phone"></i>
            096 222 1351
        </p>

        <p>
            <i class="fa-solid fa-envelope"></i>
            info@intercarehospital.com
        </p>
     </div>

    </div>
  </div>

  <div class="footer-bottom">
    Copyright © 2024 Intercare Hospital. All right reserved
  </div>
</footer>
