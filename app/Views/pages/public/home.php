<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1>Experts in <samp>Artificial Intelligence</samp> and development Software</h1>
                <h2>Topic for experts in artificial intelligence model development and software development engineers.</h2>
                <div>
                    <div class="text-center text-lg-start">
                    <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Read more</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 hero-img">
                <img src="<?= base_url('public/assets/img/hero-img.png') ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="<?= base_url('public/assets/img/blog/blog-1.jpg') ?>" class="img-fluid" alt=""></div>
              <span class="post-date">July 19th, 2024</span>
              <h3 class="post-title">Elit ut ex adipisicing officia elit velit veniam cupidatat quis consectetur aliqua eu pariatur.</h3>
              <a href="#" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="<?= base_url('public/assets/img/blog/blog-2.jpg') ?>" class="img-fluid" alt=""></div>
              <span class="post-date">July 25st, 2024</span>
              <h3 class="post-title">Commodo voluptate id laboris elit culpa adipisicing Lorem laboris id ipsum sunt.</h3>
              <a href="#" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="<?= base_url('public/assets/img/blog/blog-3.jpg') ?>" class="img-fluid" alt=""></div>
              <span class="post-date">July 26st, 2024</span>
              <h3 class="post-title">Study Organization Tips for your teamwork.</h3>
              <a href="#" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

<?= $this->endSection() ?>