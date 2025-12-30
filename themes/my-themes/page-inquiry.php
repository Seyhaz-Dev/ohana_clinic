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
  <h1>Inquiry</h1>
  <div class="breadcrumb">
    <a href="/">Home</a>
    <span class="separator">›</span>
    <span class="current">Inquiry</span>
  </div>
</section>


<section class="inquiry-section">
  <header class="inquiry-1">
    <h1 class="main-title">inquiry</h1>
    <div class="header-accent"></div>
    <p class="intro-text">
      We accept inquiries by phone or through the inquiry form below.<br>
      If your inquiry is urgent, please contact us by phone.
    </p>
    <div class="phone-box">
      <span class="phone-icon"><i class="fa-solid fa-phone"></i></span> 03-3987-3090
    </div>
  </header>

  <section class="form-section">
    <h2 class="section-title">Contact form</h2>
    <div class="section-accent"></div>

    <form class="contact-form">
      <div class="form-group">
        <label>Type of inquiry <span class="badge-required">Required</span></label>
        <div class="input-container">
          <select>
            <option>About medical treatment</option>
            <option>Aboutservations </option>
            <option>Sales and advertsing</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label>Name <span class="badge-required">Required</span></label>
        <div class="input-container">
          <input type="text">
        </div>
      </div>

      <div class="form-group">
        <label>Furigana <span class="badge-required">Required</span></label>
        <div class="input-container">
          <input type="text">
        </div>
      </div>

      <div class="form-group">
        <label>email address <span class="badge-required">Required</span></label>
        <div class="input-container">
          <input type="email">
        </div>
      </div>

      <div class="form-group">
        <label>telephone number <span class="badge-required">Required</span></label>
        <div class="input-container">
          <input type="tel">
        </div>
      </div>

      <div class="form-group">
        <label>Inquiry details <span class="badge-required">Required</span></label>
        <div class="input-container">
          <textarea rows="6"></textarea>
        </div>
      </div>
    </form>
  </section>

   <div class="form-group submit-group">
    <a href="#" class="btn-submit">To the comfirmation </a>
   </div>

</section>

<?php get_footer(); ?>
