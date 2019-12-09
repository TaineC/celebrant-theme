<?php
  $slug = get_post_field('post_name');
?>


<header id="hero-area" data-stellar-background-ratio="0.5" style="background: url(<?php the_field('image') ?>) center;">    
    <div class="container">      
      <div class="row justify-content-md-center">
        <div class="col-md-10">
          <div class="contents text-center">
            <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s"><?php the_title() ?></h1>
          </div>
        </div>
      </div> 
    </div>           
  </header>