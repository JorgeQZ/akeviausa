<?php
/**
 * Template Name: Home
 */

 get_header();
?>

<main>

  <!-- Hero area start -->
  <section class="hero__area ">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="hero__content animation__hero_one">

            <a href="" style="padding-right: 30px;">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/logo/logo-akevia.png' ?>" alt="Logo Akevia" style="width: 185px;">
            </a>
            <div class="hero__title-wrapper">
              <h1 class="hero__title">Let's be brave.<br><i>Together</i></h1>
              <p class="hero__sub-title">With every single one of our clients, we
                bring forth deep passion for
                <span>creative problem solving</span>
                which is what we deliver.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <video class="hero1_bg" autoplay loop muted>
      <source src="<?php echo get_template_directory_uri(  ).'/video/akevia-bg-video.webm'; ?>">
    </video>
  </section>
  <!-- Hero area end -->


  <!-- Roll area start -->
  <section class="roll__area">
    <div class="swiper roll__slider">
      <div class="swiper-wrapper roll__wrapper">
        <div class="swiper-slide roll__slide">
          <h2>Digital Marketing Campaigns</h2>
        </div>
        <div class="swiper-slide roll__slide">
          <h2>Media Buying</h2>
        </div>
        <div class="swiper-slide roll__slide">
          <h2>Video Production</h2>
        </div>
        <div class="swiper-slide roll__slide">
          <h2>Website Development</h2>
        </div>
        <div class="swiper-slide roll__slide">
          <h2>Graphic Design</h2>
        </div>
        <div class="swiper-slide roll__slide">
          <h2>Interactive</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- Roll area end -->


  <!-- About area start -->
  <section class="about__area">
    <div class="container line g-0 pt-140 pb-130">
      <span class="line-3"></span>
      <div class="row">
        <div class="col-xxl-12">
          <div class="about__title-wrapper">
            <h3 class="sec-title title-anim">Transforming brands through borderless creativity.</h3>
          </div>

          <div class="about__content-wrapper">
            <div class="about__img">
              <div class="img-anim">
                <img src="<?php echo get_template_directory_uri(  ).'/imgs/akevia/designing.jpg';?>" alt="About Image" data-speed="0.3">
              </div>

              <div class="about__img-right">
                <img src="<?php echo get_template_directory_uri(  ).'/imgs/akevia/hand.jpg';?>" alt="About Image Right" data-speed="0.5">
                <div class="shape">
                  <div class="secondary" data-speed="0.9"></div>
                  <div class="primary"></div>
                </div>
              </div>
            </div>

            <div class="about__content text-anim">
              <p>
                We understand that no two businesses are alike. Even less so their customers. That's why every campaign we design is crafted with your business's essence in mind, but above all, tailored to your market. Whether it's web design, graphic design, advertising, digital marketing, or video production, we'll ensure your next advertising campaign is everywhere.
                <br><br>
                Welcome to our revolution. Brand Revolution®.
              </p>


            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- About area end -->


  <!-- Service area start -->
  <section class="service__area pt-110 pb-150">
    <div class="container">
      <div class="row">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
          <div class="sec-title-wrapper wrap">
            <h2 class="sec-sub-title title-anim">services</h2>
            <h3 class="sec-title title-anim">We are a 360 Agency</h3>
          </div>
        </div>
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
          <div class="service__top-text text-anim">
            <p>We craft unique, game-changing solutions, collaborating to propel your business forward. <span>Together</span>, we'll ignite a <span>brand revolution.</span>
              </p>
          </div>
        </div>

      </div>

      <div class="service__list-wrapper">
        <div class="row">
          <div class="col-xxl-4 col-xl-4 col-lg-0 col-md-0">
            <div class="service__img-wrapper">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/akevia/web.jpg';?>" alt="Service Image" class="service__img img-1 active">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/akevia/branding.jpg';?>" alt="Service Image" class="service__img img-2">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/akevia/design.jpg';?>" alt="Service Image" class="service__img img-3">

              <span class="shape-box-1 current"></span>
              <span class="shape-box-2"></span>
              <span class="shape-box-3"></span>
            </div>
          </div>
          <div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12">
            <div class="service__list">
              <!--a href="service-details.html"-->
                <div class="service__item animation_home1_service" data-service="1">
                  <div class="service__number"><span>01</span></div>
                  <div class="service__title-wrapper">
                    <h4 class="service__title">Web Design</h4>
                  </div>
                  <div class="service__text">
                    <p>Staying abreast of industry trends, we specialize in crafting and developing corporate websites, e-commerce portals and tailored intranets</p>
                  </div>
                  <div class="service__link">
                    <p><i class="fa-solid fa-arrow-right"></i></p>
                  </div>
                </div>
              <!--a -->

              <!--a href="service-details.html"-->
                <div class="service__item  animation_home1_service" data-service="2">
                  <div class="service__number"><span>02</span></div>
                  <div class="service__title-wrapper">
                    <h4 class="service__title">Branding & Communications</h4>
                  </div>
                  <div class="service__text">
                    <p>We create new brands and communication strategies for mass media with in-house planning, design, and execution</p>
                  </div>
                  <div class="service__link">
                    <p><i class="fa-solid fa-arrow-right"></i></p>
                  </div>
                </div>
              <!--a -->

              <!--a href="service-details.html"-->
                <div class="service__item  animation_home1_service" data-service="3">
                  <div class="service__number"><span>03</span></div>
                  <div class="service__title-wrapper">
                    <h4 class="service__title">Digital <br>Maketing</h4>
                  </div>
                  <div class="service__text">
                    <p>We plan, design, and execute digital media strategies, including campaigns on social media and Google Ads. Moreover, we provide consultancy and training on the subject to the business sector</p>
                  </div>
                  <div class="service__link">
                    <p><i class="fa-solid fa-arrow-right"></i></p>
                  </div>
                </div>
              <!--a -->


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Service area end -->


</main>

<?php get_footer(); ?>