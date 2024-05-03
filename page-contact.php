<?php
/**
 * Template Name: Contact
 */

 get_header();
?>
<style>
    br{
        display: block !important;
    }
</style>
<main>

  <!-- Hero area end -->
    <!-- Contact area start -->
    <section class="contact__area-6">
        <div class="container g-0 line pt-120 pb-110">
        <span class="line-3"></span>
        <div class="hero__content" style="padding-top: 0; ">
            <a href="<?php echo home_url(); ?>" style="padding-right: 30px;">
              <img src="<?php echo get_template_directory_uri(  ).'/imgs/akevia/logo-akevia-black.png' ?>" alt="Logo Akevia" style="width: 185px;">
            </a>
            </div>

        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="sec-title-wrapper">
                <h2 class="sec-title-2 animation__char_come">Let’s get in touch</h2>
            </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="contact__text">
                <p>Let's start something special together! Send us a message and we will get in touch with you shortly.</p>
            </div>
            </div>
        </div>
        <div class="row contact__btm">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
            <div class="contact__info">
                <h3 class="sub-title-anim-top animation__word_come">Don't be afraid! <br>say hello</h3>
                <ul>
                <!-- <li><a href="tel:+(2)578365379">+(2) 578 - 365 - 379</a></li> -->
                <li><a href="mailto:info@akevia.com">info@akevia.com</a></li>
                <!-- <li><span>230 Norman Street New York, <br> QC (USA) H8R 1A1</span></li> -->
                </ul>
            </div>
            </div>
            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
            <div class="contact__form">

                <!--div class="row g-3">
                    <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="text" name="name" placeholder="Name *">
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="email" name="email" placeholder="Email *">
                    </div>
                </!--div>
                <div class="row g-3">
                    <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="tel" name="phone" placeholder="Phone">
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="text" name="subject" placeholder="Subject *">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-12">
                    <textarea name="message" placeholder="Messages *"></textarea>
                    </div>
                </div>
                <div-- class="row g-3">
                    <div class="col-12">
                    <div class="btn_wrapper">
                        <button class="wc-btn-primary btn-hover btn-item"><span></span> Send <br>Messages <i
                            class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </div>
                </div-->
                <?php
                echo do_shortcode('[contact-form-7 id="e97284d" title="CF - Home"]');
                ?>

            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Contact area end -->
</main>

<?php get_footer(); ?>
<script>
    $ = jQuery;
    $('.wpcf7-form .wc-btn-primary').unwrap();
</script>