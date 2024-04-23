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
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/logo/logo-akevia.png' ?>" alt="Logo Akevia" style="width: 100px;">
              <!-- <span><i class="fa-solid fa-arrow-right"></i></span> -->
            </a>
            <div class="hero__title-wrapper">
              <h1 class="hero__title">Let's be brave.<br><i>Together</i></h1>
              <p class="hero__sub-title">With every single one of our clients, we
                bring forth deep passion for
                <span>creative problem solving</span>
                which is what we deliver.
              </p>
            </div>
            <!-- <img src="<?php echo get_template_directory_uri(  ).'/imgs/icon/arrow-down-big.png';?>" alt="Arrow Down Icon"> -->
            <!-- <div class="experience">
              <h2 class="title">Transforming</h2>
              <p> brands through borderless creativity.</p>
            </div> -->
          </div>
        </div>
      </div>
    </div>

    <img src="<?php echo get_template_directory_uri(  ).'/imgs/akevia/nueva-foto-oficina.jpg';?>" alt="image" class="hero1_bg">
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
                <img src="<?php echo get_template_directory_uri(  ).'/imgs/akevia/rogelio.jpg';?>" alt="About Image" data-speed="0.3">
              </div>

              <div class="about__img-right">
                <img src="<?php echo get_template_directory_uri(  ).'/imgs/akevia/andrea.jpg';?>" alt="About Image Right" data-speed="0.5">
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

              <!--div class="cursor-btn btn_wrapper">
                <!-- <a class="btn-item wc-btn-primary btn-hover" href="about.html"><span></span> Explore Us <i
                    class="fa-solid fa-arrow-right"></i></a> -->

              <!--div-->
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
            <h2 class="sec-sub-title title-anim">service</h2>
            <h3 class="sec-title title-anim">We are a 360 Agency</h3>
          </div>
        </div>
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
          <div class="service__top-text text-anim">
            <p>We craft unique, game-changing solutions, collaborating to propel your business forward. <span>Together</span>, we'll ignite a <span>brand revolution.</span>
              </p>
          </div>
        </div>
        <!--div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
          <div class="service__top-btn">
            <div class="btn_wrapper">
              <!-- <a href="service.html" class="btn-item wc-btn-secondary btn-hover"><span></span> View <br>all
                services <i class="fa-solid fa-arrow-right"></i></a> -->
            <!--div>
          </!--div>
        <!--div-->
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


  <!-- Counter area start -->
  <!--section class="counter__area">
    <div class="container g-0 line pt-150">
      <span class="line-3"></span>

      <div class="row">
        <div class="col-xxl-12">
          <div class="counter__wrapper counter_animation">
            <div class="counter__item counter__anim">
              <h2 class="counter__number">25k+</h2>
              <p>Project <br>completed</p>
              <span class="counter__border"></span>
            </div>
            <div class="counter__item counter__anim">
              <h2 class="counter__number">8k+</h2>
              <p>Happy <br>customers</p>
              <span class="counter__border"></span>
            </div>
            <div class="counter__item counter__anim">
              <h2 class="counter__number">15</h2>
              <p>Years <br>experiences</p>
              <span class="counter__border"></span>
            </div>
            <div class="counter__item counter__anim">
              <h2 class="counter__number">98</h2>
              <p>Awards <br>achievement</p>
              <span class="counter__border"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </!--section>
  <!-- Counter area end -->


  <!-- Workflow area start -->
  <!--section class="workflow__area">
    <div class="container g-0 line pt-140 pb-140">
      <div class="line-3"></div>
      <div class="row">
        <div class="col-xxl-12">
          <div class="sec-title-wrapper">
            <h2 class="sec-sub-title title-anim">Workflow</h2>
            <h3 class="sec-title title-anim">How we work</h3>
          </div>
        </div>

        <div class="col-xxl-12">
          <div class="swiper workflow__slider ">
            <div class="swiper-wrapper">
              <div class="swiper-slide workflow__slide fade_left">
                <h4 class="workflow__step">step 01</h4>
                <h5 class="workflow__number">01</h5>
                <h6 class="workflow__title">Audience</h6>
                <p>Having these the marketplace to your business</p>
              </div>

              <div class="swiper-slide workflow__slide fade_left">
                <h4 class="workflow__step">step 02</h4>
                <h5 class="workflow__number">02</h5>
                <h6 class="workflow__title">Plan & Sketch</h6>
                <p>Delicate and long-lasting with vitamins and nutritions</p>
              </div>

              <div class="swiper-slide workflow__slide fade_left">
                <h4 class="workflow__step">step 03</h4>
                <h5 class="workflow__number">03</h5>
                <h6 class="workflow__title">Customize</h6>
                <p>Creating brand identities for the digital experiences</p>
              </div>

              <div class="swiper-slide workflow__slide fade_left">
                <h4 class="workflow__step">step 04</h4>
                <h5 class="workflow__number">04</h5>
                <h6 class="workflow__title">User Testing</h6>
                <p>We look forward to engage with beyond the conventional</p>
              </div>

              <div class="swiper-slide workflow__slide fade_left">
                <h4 class="workflow__step">step 05</h4>
                <h5 class="workflow__number">05</h5>
                <h6 class="workflow__title">User Testing</h6>
                <p>We look forward to engage with beyond the conventional</p>
              </div>

              <div class="swiper-slide workflow__slide fade_left">
                <h4 class="workflow__step">step 06</h4>
                <h5 class="workflow__number">06</h5>
                <h6 class="workflow__title">User Testing</h6>
                <p>We look forward to engage with beyond the conventional</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </!--section>
  <!-- Workflow area end -->


  <!-- Portfolio area start -->
  <!--section class="portfolio__area pb-140">
    <div class="container">
      <div class="row top_row">

        <h2 class="portfolio__text">work</h2>
        <div class="portfolio__list-1">
          <div class="portfolio__item">
            <a href="portfolio-details.html"><img class="mover" src="<?php echo get_template_directory_uri(  ).'/imgs/portfolio/1/1.jpg';?>"
                alt="Portfolio Image"></a>
            <div class="portfolio__info">
              <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
              <p>02 May 2021</p>
            </div>
          </div>
          <div class="portfolio__item">
            <a href="portfolio-details.html"><img src="<?php echo get_template_directory_uri(  ).'/imgs/portfolio/1/2.jpg';?>" alt="Portfolio Image"></a>
            <div class="portfolio__info">
              <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
              <p>02 May 2021</p>
            </div>
          </div>
          <div class="portfolio__item">
            <a href="portfolio-details.html"><img src="<?php echo get_template_directory_uri(  ).'/imgs/portfolio/1/3.jpg';?>" alt="Portfolio Image"></a>
            <div class="portfolio__info">
              <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
              <p>02 May 2021</p>
            </div>
          </div>
          <div class="portfolio__item">
            <a href="portfolio-details.html"><img src="<?php echo get_template_directory_uri(  ).'/imgs/portfolio/1/4.jpg';?>" alt="Portfolio Image"></a>
            <div class="portfolio__info">
              <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
              <p>02 May 2021</p>
            </div>
          </div>
          <div class="portfolio__item">
            <a href="portfolio-details.html"><img src="<?php echo get_template_directory_uri(  ).'/imgs/portfolio/1/1.jpg';?>" alt="Portfolio Image"></a>
            <div class="portfolio__info">
              <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
              <p>02 May 2021</p>
            </div>
          </div>
          <div class="portfolio__item">
            <a href="portfolio-details.html"><img src="<?php echo get_template_directory_uri(  ).'/imgs/portfolio/1/2.jpg';?>" alt="Portfolio Image"></a>
            <div class="portfolio__info">
              <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
              <p>02 May 2021</p>
            </div>
          </div>

        </div>
      </div>

      <div class="row row_bottom">
        <div class="col-xxl-12">
          <div class="portfolio__btn btn_wrapper" data-speed="1" data-lag="0.2">
            <a class="wc-btn-secondary btn-hover btn-item" href="portfolio.html"><span></span>View <br>all
              projects <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </!--section>
  <!-- Portfolio area end -->


  <!-- Brand area start -->
  <!--section class="brand__area">
    <div class="container g-0 line pt-140 pb-130">
      <span class="line-3"></span>
      <div class="row">
        <div class="col-xxl-12">
          <div class="sec-title-wrapper">
            <h2 class="sec-sub-title title-anim">Internation Brands</h2>
            <h3 class="sec-title title-anim">We are happy to work with global <br>
              largest brands</h3>
          </div>
        </div>

        <div class="col-xxl-12">
          <div class="brand__list">
            <div class="brand__item fade_bottom">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/brand/1.png';?>" alt="Brand Logo">
            </div>
            <div class="brand__item fade_bottom">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/brand/2.png';?>" alt="Brand Logo">
            </div>
            <div class="brand__item fade_bottom">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/brand/3.png';?>" alt="Brand Logo">
            </div>
            <div class="brand__item fade_bottom">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/brand/4.png';?>" alt="Brand Logo">
            </div>
            <div class="brand__item fade_bottom">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/brand/5.png';?>" alt="Brand Logo">
            </div>
            <div class="brand__item fade_bottom">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/brand/6.png';?>" alt="Brand Logo">
            </div>
            <div class="brand__item fade_bottom">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/brand/3.png';?>" alt="Brand Logo">
            </div>
            <div class="brand__item fade_bottom">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/brand/4.png';?>" alt="Brand Logo">
            </div>
            <div class="brand__item fade_bottom">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/brand/5.png';?>" alt="Brand Logo">
            </div>
            <div class="brand__item fade_bottom">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/brand/6.png';?>" alt="Brand Logo">
            </div>
            <div class="brand__item fade_bottom">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/brand/1.png';?>" alt="Brand Logo">
            </div>
            <div class="brand__item fade_bottom">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/brand/2.png';?>" alt="Brand Logo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </!--section>
  <!-- Brand area end -->


  <!-- Testimonial area start -->
  <!--section class="testimonial__area">
    <div class="container g-0 line">
      <span class="line-3"></span>
      <div class="row">
        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
          <div class="testimonial__wrapper">
            <div class="testimonial__item item-1">
              <div class="button modal-trigger">
                <div class="testimonial__img b-right">
                  <img src="<?php echo get_template_directory_uri(  ).'/imgs/testimonial/1/1.png';?>" alt="Testimonial Image">
                </div>

                <h2 class="testimonial__title">Jessica Sherlock</h2>
                <h3 class="testimonial__role">Manager, Oitaka</h3>
              </div>
            </div>
            <div class="sec-title-wrapper text-anim">
              <h4 class="sec-sub-title">Testimonials</h4>
              <h5 class="sec-title title-anim">Clients <br>feedback</h5>
              <p>Our happy customers give us impactfull and positive feedback on our services, customer supports
                &
                etc.</p>
            </div>
          </div>

          <div class="testimonial__item item-2">
            <div class="button modal-trigger-2">
              <div class="testimonial__img b-left">
                <img src="<?php echo get_template_directory_uri(  ).'/imgs/testimonial/1/3.png';?>" alt="Testimonial Image">
              </div>

              <h2 class="testimonial__title">Jessica Sherlock</h2>
              <h3 class="testimonial__role">Manager, Oitaka</h3>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
          <div class="testimonial__item item-3 img-">
            <div class="button modal-trigger-3">
              <div class="testimonial__img b-left">
                <img src="<?php echo get_template_directory_uri(  ).'/imgs/testimonial/1/2.png';?>" alt="Testimonial Image">
              </div>

              <h2 class="testimonial__title">adam Smith</h2>
              <h3 class="testimonial__role">Manager, Oitaka</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </!--section>
  <!-- Testimonial area end -->


  <!-- Blog area start -->
  <!--section class="blog__area no-pb blog__animation">
    <div class="container g-0 line pt-150 pb-140">
      <span class="line-3"></span>
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
          <div class="sec-title-wrapper">
            <h2 class="sec-sub-title">recent blog</h2>
            <h3 class="sec-title">News insignt</h3>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
          <article class="blog__item">
            <div class="blog__img-wrapper">
              <a href="blog-details.html">
                <div class="img-box">
                  <img class="image-box__item" src="<?php echo get_template_directory_uri(  ).'/imgs/blog/1/1.jpg';?>" alt="">
                  <img class="image-box__item" src="<?php echo get_template_directory_uri(  ).'/imgs/blog/1/1.jpg';?>" alt="">
                </div>
              </a>
            </div>
            <h4 class="blog__meta"><a href="category.html">UI Design</a> . 02 May 2019</h4>
            <h5><a href="blog-details.html" class="blog__title">Ways of lying to yourself about your new
                relationship.</a></h5>
            <a href="blog-details.html" class="blog__btn">Read More <span><i
                  class="fa-solid fa-arrow-right"></i></span></a>
          </article>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
          <article class="blog__item">
            <div class="blog__img-wrapper">
              <a href="blog-details.html">
                <div class="img-box">
                  <img class="image-box__item" src="<?php echo get_template_directory_uri(  ).'/imgs/blog/1/2.jpg';?>" alt="">
                  <img class="image-box__item" src="<?php echo get_template_directory_uri(  ).'/imgs/blog/1/2.jpg';?>" alt="">
                </div>
              </a>
            </div>
            <h4 class="blog__meta"><a href="category.html">UI Design</a> . 02 May 2019</h4>
            <h5><a href="blog-details.html" class="blog__title">How to manage a talented and successful de sign
                team</a></h5>
            <a href="blog-details.html" class="blog__btn">Read More <span><i
                  class="fa-solid fa-arrow-right"></i></span></a>
          </article>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
          <article class="blog__item">
            <div class="blog__img-wrapper">
              <a href="blog-details.html">
                <div class="img-box">
                  <img class="image-box__item" src="<?php echo get_template_directory_uri(  ).'/imgs/blog/1/3.jpg';?>" alt="Blog Thumbnail">
                  <img class="image-box__item" src="<?php echo get_template_directory_uri(  ).'/imgs/blog/1/3.jpg';?>" alt="BLog Thumbnail">
                </div>
              </a>
            </div>
            <h4 class="blog__meta"><a href="category.html">UI Design</a> . 02 May 2019</h4>
            <h5><a href="blog-details.html" class="blog__title">How to bring fold to your startup company with
                Axtra</a></h5>
            <a href="blog-details.html" class="blog__btn">Read More <span><i
                  class="fa-solid fa-arrow-right"></i></span></a>
          </article>
        </div>
      </div>
    </div>
  </!--section>
  <!-- Blog area end -->


  <!-- CTA area start -->
  <!--section class="cta__area">
    <div class="container line pb-110">
      <div class="line-3"></div>
      <div class="row">
        <div class="col-xxl-12">
          <div class="cta__content">
            <p class="cta__sub-title">Work with us</p>
            <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
            <div class="btn_wrapper">
              <a href="contact.html" class="wc-btn-primary btn-hover btn-item"><span></span>Let’s talk us <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </!--section>
  <!-- CTA area end -->

</main>

<?php get_footer(); ?>