<?php
  $slug = get_post_field('post_name');
?>

<section id="packages" class="section pricing-section">
  <div class="container">
    <div class="section-header">          
      <h2 class="section-title"><?php the_title() ?></h2>
      <hr class="lines">
      <div class="section-subtitle"><?php the_content() ?></div>
    </div>
  
    <div class="row pricing-tables">
      <?php
        $args = array('post_type' => 'packages');
        $the_query = new WP_Query( $args );
                              
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          get_template_part('partials/packages/content','default');
          }
          wp_reset_postdata();
      ?>  
    </div>
  </div>
</section>