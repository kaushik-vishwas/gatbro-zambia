<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gatbro</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<style>
  #background-video {
    position: relative;
    width: 100%;
    height: 87vh;
    /* Adjust the height as needed */
    object-fit: cover;
    z-index: 1;
  }


  .button-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }

  .button {
    margin: 0 10px;
  }

  #text-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
    text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8);
    font-size: 4vw;
    /* You can adjust the font size based on your preference */
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    z-index: 3;
  }

  @media screen and (max-width: 600px) {
    #text-overlay {
      font-size: 10vw;
      /* Adjust the font size for smaller screens */
    }

    #mainLine {
      font-size: 4vw;
      /* Adjust the font size for smaller screens */
    }

  }




  .carousel-item img {
    height: 87vh;
    /* Adjust this value to decrease the height */
    object-fit: cover;
    /* This property ensures the image covers the entire area */
  }
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Gatbro</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About Us</a></li>
          <li><a class="nav-link scrollto" href="gallery.php">Gallery</a></li>
          <li><a class="nav-link scrollto" href="news.php">News</a></li>
          <li><a class="nav-link scrollto" href="activities.php">Activities</a></li>
          <li><a class="nav-link scrollto" href="career.php">Career</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
          <li><a class="getstarted scrollto" href="shop">Shop Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <div class="video-container" style="position: relative; z-index: 1">
    <video id="background-video" autoplay loop muted playsinline preload="auto" loading="lazy">
      <source src="assets/img/bg-video.mp4" type="video/mp4">
    </video>

    <div id="text-overlay">
      <!-- Welcome to Gatbro -->
      <h6 id="mainLine">Amidst the quiet fields, let's amplify the Basic Human Needs. Together, we create
        echoes of hope and vitality.</h6>
    </div>

  </div>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>We Are Leading Distributors</h1>
          <h2>Fast Moving Consumer Goods</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Who We Are?</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            GATBRO International Zambia has been in operation for 12 years now and has grown immensely driven by its
            passion to give back to the community.
          </p>
          <p>
            We maintain our absolute commitment to client relationships and satisfaction, integrity and transparency.
            We work extraordinarily hard to maintain presence in both Modern trade and General trade leaving an open
            dialogue with our clients to ensure that we continue to deliver the products and services that you value.
          </p>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>GATBRO boasts of a vast distribution network paired with skilled key Account Managers with an experienced
            sales team and a Marketing team which are essential for the growth of any FMCG Business.</p>

          <a href="#" class="btn-learn-more">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->




  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

          <div class="content">
            <h3>Geographical <strong>Coverage</strong></h3>
            <p>
              We proudly serve a broad geographical area, delivering our high-quality FMCG products to customers across
              multiple regions, ensuring accessibility and satisfaction wherever you are.


            </p>
          </div>

          <div class="accordion-list">
            <ul>
              <li>
                <a><span>01</span>
                  Headquater <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div>
                  <p>
                    Lusaka
                  </p>
                </div>
              </li>

              <li>
                <a><span>02</span>
                  Branch Office<i class="bx bx-chevron-down icon-show"></i><i
                    class="bx bx-chevron-up icon-close"></i></a>
                <div>
                  <p>
                    CopperBelt
                  </p>
                </div>
              </li>

              <li>
                <a><span>03</span>
                  Sub Distribution Offices <i class="bx bx-chevron-down icon-show"></i><i
                    class="bx bx-chevron-up icon-close"></i></a>
                <div>
                  <p>
                    Chipata, Mongu, Livingstone, Solwezi, Kasama, Choma
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>

        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
          style='background-image: url("assets/img/location.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;
        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->


  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Our Partners</h2>
        </div>

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/ti.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/rfg.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/reckitt.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/coca.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/uni.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/oce.jpeg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/nat.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/ras.webp" class="img-fluid" alt="">
          </div>
          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/ald.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/silver.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/mam.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/all.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/fresh.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/gold.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/soft.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->



    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <!-- <div class="content">
              <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
            </div> -->

            <div class="accordion-list">
              <ul>
                <li>
                  <a><span>01</span>
                    Our Mission <i class="bx bx-chevron-down icon-show"></i><i
                      class="bx bx-chevron-up icon-close"></i></a>
                  <div>
                    <p>
                      Our Mission is to ensure all our products have a lasting impression on each consumer and
                      household, not only through our dedicated service but also our relationship with our customers. We
                      Strive for continuous improvement and we are committed to building and developing brands.
                    </p>
                  </div>
                </li>

                <li>
                  <a><span>02</span>
                    Our Vision<i class="bx bx-chevron-down icon-show"></i><i
                      class="bx bx-chevron-up icon-close"></i></a>
                  <div>
                    <p>
                      To become the Leading Distributors of fast moving consumer goods (FMCG). Our aspirations for the
                      future is to expand our line of business and be recognised as the best consumer distributor in the
                      African region.

                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
            style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Our Capacity</h3>
            <p class="fst-italic">
              With state-of-the-art facilities and a dedicated team, we efficiently handle large-scale production to
              meet diverse FMCG demands, ensuring timely delivery and exceptional quality.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">PALLET CAPACITY <i class="val">75000+</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">SKILLED EMPLOYEES <i class="val">2000+</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">GLOBAL BRANDS <i class="val">100+</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">WARE HOUSES <i class="val">10</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->







    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Shop Now</h3>
            <p> Explore our latest FMCG products for high-quality, everyday essentials. Stay connected and discover
              what’s new! </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="shop">Shop Now</a>
          </div>
        </div>

      </div>
    </section>








    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>News</h2>
          <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto
            accusamus fugit aut qui distinctio</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <div style="padding-bottom: 20px">
              <img src="assets/img/logo.png" width="50%" alt="">
            </div>
            <p>
              No. 35285-7, O Off Mwembeshi Road, <br> Chinika Industrial Area P.O. Box 39478, Lusaka, Zambia<br>
              <strong>Tel:</strong> +260 211 846 925/6<br>
              <strong>Email:</strong> info@gatbrozambia.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">News</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Activities</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Career</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="shop">Shopping</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Stay updated with exclusive content, early video access, and the latest news. Connect with us and be part
              of our community!

            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright 2024 <strong><span>Gatbro</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">Kaushik Vishwas,</a> Maitreya Digital
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>