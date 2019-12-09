<?php
  $slug = get_post_field('post_name');
?>


<!-- <label> Your Name (required)
    [text* your-name] </label>

<label> Your Email (required)
    [email* your-email] </label>

<label> Your Message
    [textarea your-message] </label>

[submit "Send"] -->


<!-- <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email"> -->


<section id="contact" class="section" data-stellar-background-ratio="-0.2">      
        <div class="contact-form">
          <div class="container">
            <div class="row">     
              <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="contact-us">
                  <h3><?php the_title() ?></h3>
                  <div class="contact-address">
                    <p><?php the_field('address') ?></p>
                    <p class="phone">Phone: <span><?php the_field('phone') ?></span></p>
                    <p class="email">E-mail: <span><?php the_field('email') ?></span></p>
                  </div>
                  <div class="social-icons">
                    <ul>
                      <li class="facebook"><a href="<?php the_field('facebook') ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>     
              <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="contact-block">

                <?php echo do_shortcode('[contact-form-7 id="78" title="Contact Form" html_id="contactForm"]')?>
                  <!-- <form id="contactForm"> -->
                    <!-- <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                          <div class="help-block with-errors"></div>
                        </div>                                 
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                          <div class="help-block with-errors"></div>
                        </div> 
                      </div>
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="submit-button text-center">
                          <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div> 
                          <div class="clearfix"></div> 
                        </div>
                      </div>
                    </div>             -->                    
                  <!-- </form> -->
                </div>
              </div>
            </div>
          </div>
        </div>           
      </section>