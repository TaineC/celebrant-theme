<?php
  $slug = get_post_field('post_name');
?>

<section id="about" class="section">
  <div class="container">
    <div class="section-header">          
      <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><? the_title() ?></h2>
      <hr class="lines wow zoomIn" data-wow-delay="0.3s">
      <div class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><?php the_content() ?></div>
    </div>
    <div class="row">
      <?php
        $args = array('post_type' => 'about');
        $the_query = new WP_Query( $args );
                        
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          get_template_part('partials/about/content','default');
        }
        wp_reset_postdata();
      ?>   
    </div>
  </div>
</section>

            