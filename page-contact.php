<?php get_header(); ?>

 <h2 class="head-appointment">Contact Us</h2>

<section id="section-contact-forms">
  <div class="container flex-row">

        <div class="contact-info flex1">
          <h3>Info<span class="big-dot blue">.</span></h3>
          <p>
            <a href=""><i class="fas fa-phone-volume" style="color:#ffa729"></i></a>
            <br>(647)561-8884
          </p>
          <p>
            <a href=""><i class="fas fa-fax-volume" style="color:#ffa729"></i></a>
            <br>(647)477-1255
          </p>
          <p>
            <a href=""><i class="fas fa-envelope-square" style="color:#ffa729"></i></a>
            <br>contact@gmail.com
          </p>
          <p>
            <a href=""><i class="fas fa-map-marker" style="color:#ffa729"></i></a>
            <br>2478 Kingston Road, Toronto, ON<br>M1N 3W5, Canada
          </p>
        </div>


        <div class="forms flex1">
          <h3>Contact Form</h3>
          <?php echo do_shortcode('[contact-form-7 id="97" title="Contact form 1"]') ?>
        </div>

  </div>

</section>

<section id="contact-map">
  <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.0072377207125!2d-79.25122138455285!3d43.71039865674823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4ce524be12c63%3A0x78a746de0e1cdd8f!2s2478+Kingston+Rd%2C+Scarborough%2C+ON+M1M+1R9!5e0!3m2!1sen!2sca!4v1531762739349" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</section>

<?php get_footer(); ?>
