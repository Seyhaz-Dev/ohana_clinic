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


<section class="page-header">
    
    <h1>Access and Consultation Hours</h1>
         <div class="breadcrumb">
            <a href="/">Home</a>
            <span class="separator">›</span>
            <span class="current">Access and Consultation Hours</span>
    </div>

  </section>


    <section class="access-section">
        <h1 class="main-title">access</h1>
        <div class="header-accent"></div>
        
        <table class="access-table">
            <tr>
                <th>name</th>
                <td>Ohana Clinic</td>
            </tr>
            <tr>
                <th>address</th>
                <td>
                    4th floor, Fujiki Building, 1-12-8 Higashi-Ikebukuro, Toshima-ku, Tokyo 170-0013<br>
                    <a href="https://www.google.com/maps/place/Japan/@32.9660973,126.5587139,3344124m/data=!3m1!1e3!4m6!3m5!1s0x34674e0fd77f192f:0xf54275d47c665244!8m2!3d36.204824!4d138.252924!16zL20vMDNfM2Q?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoASAFQAw%3D%3D" class="map-link">📍 Google Maps</a>
                </td>
            </tr>
            <tr>
                <th>telephone number</th>
                <td><a href="tel:0339873090" class="tel-link">03-3987-3090</a></td>
            </tr>
            <tr>
                <th>access</th>
                <td>1 minute walk from Ikebukuro Station Exit 35.</td>
            </tr>
        </table>
    </section>

    <section class="directions">
  <h2 class="directions-title">Directions</h2>

  <div class="directions-wrapper">
   
    <div class="direction-card">
      <div class="image-box">
        <span class="step-number">1</span>
        <img src="http://ohana.test/wp-content/uploads/2025/12/access_03.webp" alt="Ikebukuro Station Exit 35">
      </div>
      <p class="caption">Exit from Ikebukuro Station, Exit 35.</p>
    </div>

    
    <div class="direction-card">
      <div class="image-box">
        <span class="step-number">2</span>
        <img src="http://ohana.test/wp-content/uploads/2025/12/access_04-768x543-1.webp" alt="Sunshine 60 Street">
      </div>
      <p class="caption">Walk towards Sunshine 60 Street.</p>
    </div>

  </div>
  <div class="directions-wrapper" >
   
    <div class="direction-card">
      <div class="image-box">
        <span class="step-number">3</span>
        <img src="http://ohana.test/wp-content/uploads/2025/12/68.jpg" alt="Ikebukuro Station Exit 35">
      </div>
      <p class="caption">Exit from Ikebukuro Station, Exit 35.</p>
    </div>

    
    <div class="direction-card">
      <div class="image-box">
        <span class="step-number">4</span>
        <img src="http://ohana.test/wp-content/uploads/2025/12/69.jpg" alt="Sunshine 60 Street">
      </div>
      <p class="caption">Walk towards Sunshine 60 Street.</p>
    </div>

  </div>
  
  
</section>
<section class="consultation">
  <h2 class="consultation-title">Consultation hours</h2>

  <p class="consultation-text">
    We ask that you make an appointment in advance whenever possible.<br>
    We appreciate your understanding and cooperation.
  </p>

  <div class="table-wrapper">
    <table class="consultation-table">
      <thead>
        <tr>
          <th></th>
          <th>month</th>
          <th>fire</th>
          <th>water</th>
          <th>tree</th>
          <th>gold</th>
          <th>soil</th>
          <th>Sundays/holidays</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>8:00–12:00</td>
          <td>Takehara<br>Tanaka (Mamoru) *1</td>
          <td>Takehara</td>
          <td>Takehara<br>Muraki</td>
          <td>Takehara</td>
          <td>Takehara<br>Muraki<br>Bridge *2</td>
          <td>/</td>
          <td>/</td>
        </tr>
        <tr>
          <td>9:00–12:00</td>
          <td>/</td>
          <td>/</td>
          <td>/</td>
          <td>/</td>
          <td>/</td>
          <td>Takehara</td>
          <td>Takehara</td>
        </tr>
        <tr>
          <td>18:00–20:00</td>
          <td>Takehara<br>Sasaki</td>
          <td>/</td>
          <td>Takehara<br>Muraki</td>
          <td>/</td>
          <td>Takehara<br>Tokuoka</td>
          <td>/</td>
          <td>/</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="notes">
    <p class="red">Reservations are required.</p>
    <p>*1 2nd and 4th Mondays</p>
    <p>*2 2nd and 4th Fridays</p>
    <p class="red">*Director Takehara may not be present on Monday afternoons.</p>
  </div>
</section>


<?php get_footer(); ?>