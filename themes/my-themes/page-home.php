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


<div id="hero" class="hero-section">
    <div class="hero-overlay"></div> 

    <div class="hero-content">
        <h2><?php _e('患者様お一人おひとりの気持ちを大切に', 'your-text-domain'); ?></h2>
        <p><?php _e('リラックスして不妊治療に臨めるよう丁寧な診療を提供します。', 'your-text-domain'); ?></p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary">
            <?php _e('お問い合わせ', 'your-text-domain'); ?>
        </a>
    </div>

    <div class="visual-content">
        <div class="swiper swiper-visual swiper-fade">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="http://ohana.test/wp-content/uploads/2025/12/cllinic-scaled.webp" alt="Clinic 1">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/visual_02.webp" alt="Clinic 2">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/visual_03.webp" alt="Clinic 3">
                </div>
            </div>
           
            <div class="swiper-pagination"></div>
           
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="visual-text">
            <div class="content">
                <div class="primary">
                    <?php _e('ការថែទាំវេជ្ជសាស្រ្តដ៏កក់ក្តៅដែល ទទួលស្គាល់ យ៉ាងពេញលេញ នូវអារម្មណ៍របស់អ្នកជំងឺម្នាក់ៗ', 'your-text-domain'); ?>
                </div>
                <div class="secondary">
                    <?php _e('យើងនឹងឆ្លើយសំណួររបស់អ្នកយ៉ាងហ្មត់ចត់ក្នុងអំឡុងពេលពិគ្រោះយោបល់របស់អ្នក ដូច្នេះ អ្នកអាចចាប់ផ្តើមការព្យាបាលភាពគ្មានកូនរបស់អ្នកក្នុងបរិយាកាសសម្រាកកាយ។', 'your-text-domain'); ?>
                </div>
            </div>
        </div>
     
    </div>


</div>
<div class="news-section">
    <div class="title">News</div>
    <h2>Notice</h2>

    <ul class="news-list">
        <li>
            <div class="news-date">December 12, 2025</div>
            <div class="news-content">Notice of New Year's holiday closure</div>
        </li>
        <li>
            <div class="news-date">October 20, 2025</div>
            <div class="news-content">Information on the expansion of PGT-A testing coverage under health insurance and the schedule of the IVF information session</div>
        </li>
        <li>
            <div class="news-date">October 20, 2025</div>
            <div class="news-content">Notice of change in clinic hours</div>
        </li>
    </ul>

    <a href="#" class="news-button">List of announcements →</a>
</div>

<a href="https://www.instagram.com/" class="instagram-btn">
    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
    慶愛クリニック 公式Instagram
</a>
   
   <section class="strengths">
    <div class="strengths-container">
        <h1 class="section-title">Our Strengths</h1>

        <div class="strengths-grid">

            <div class="strength-card">
                <div class="icon">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <h3>Easy to commute while working</h3>
                <p>
                    Close to the station. Open from 8am to 8pm
                    (Monday, Wednesday and Friday)
                </p>
                <a href="#">Learn more</a>
            </div>

            <div class="strength-card">
                <div class="icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <h3>Overwhelming experience and pregnancy results</h3>
                <p>
                    Pregnancy rate from 2022 to 2023:<br>
                    <strong>63.2%</strong> (frozen blastocyst transfer)
                </p>
                <p class="note">
                    * Percentage of positive pregnancy tests
                </p>
                <a href="#">Learn more</a>
            </div>

            <div class="strength-card">
                <div class="icon">
                    <i class="fa-solid fa-user-doctor"></i>
                </div>
                <h3>Examination by the same doctor</h3>
                <p>
                    There is no difference in the treatment plan or
                    explanation given by the doctor.
                </p>
                <a href="#">Learn more</a>
            </div>

        </div>
    </div>
</section>
 <section class="form-box">
    <div class="text-section">
      <div class="message-label">MESSAGE</div>
      <h1 class="headline">
        Warm medical care<br />
        <span>New technologies</span><strong> provides</strong>
      </h1>
      <p class="paragraph">
        Our clinic's philosophy is "More friendly infertility treatment" and it is our hope that patients, doctors, and staff can communicate and become friendly with each other to make infertility treatment, which can often be a gloomy experience, more cheerful. We also incorporate new tests, treatments, and techniques that are thought to be effective, and all staff members will do their best to support as many patients as possible so that they can have children.
      </p>
      <a href="#" class="btn">Director introduction &gt;</a>
    </div>
    <div class="photo-section">
      <img src="http://ohana.test/wp-content/uploads/2025/12/doctor.jpg" alt="Director Yuji Takehara" />
      <div class="photo-caption">Director <strong>Yuji SeyhaArayaka</strong></div>
    </div>
  </section>
 <section class="treatment-section">
        <div class="image-sidebar">
            <div class="header-text">
                <span class="label">TREATMENT</span>
                <h1>Medical<br>Information</h1>
            </div>
        </div>

        <div class="content-area">
            <div class="card-grid">
                
                <div class="card">
                    <h2>in vitro<br>fertilization</h2>
                    <p>This is a treatment in which eggs that have developed to the point of ovulation are removed from the body through egg retrieval surgery, fertilized with the partner's sperm, and the successfully fertilized and divided eggs are returned to the uterus to promote implantation.</p>
                    <a href="#" class="btn">Learn more</a>
                </div>

                <div class="card">
                    <h2>General<br>infertility treatment</h2>
                    <p>This is a treatment that aims to become pregnant using timing methods or artificial insemination, depending on the cause of infertility.</p>
                    <a href="#" class="btn">Learn more</a>
                </div>

                <div class="card">
                    <h2>Infertility<br>testing</h2>
                    <p>Infertility tests are tests to check your physical condition and fertility and to identify obstacles to conception.</p>
                    <a href="#" class="btn">Learn more</a>
                </div>

                <div class="card">
                    <h2>Infertility</h2>
                    <p>By testing and treating recurrent infertility, we can reduce the number of miscarriages and stillbirths and improve the live birth rate.</p>
                    <p class="small-note">*Only for patients currently receiving treatment at our hospital.</p>
                    <a href="#" class="btn">Learn more</a>
                </div>

            </div>
            
            <div class="footer-link">
                <a href="#">Other treatments and examinations &gt;</a>
            </div>
        </div>
    </section>
   

</body>
</html>
