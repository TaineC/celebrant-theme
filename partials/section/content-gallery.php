<?php
  $slug = get_post_field('post_name');
?>

<section id="portfolio" class="section portfolio">
        <!-- Container Starts -->
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title"><?php the_title() ?></h2>
            <hr class="lines">
            <div class="section-subtitle"><?php the_content() ?></div>
          </div>
          <div>          
         
            <div class="controls text-center">
                <a class="filter active btn btn-common" data-filter="all">
                  All 
                </a>

                <?php
                  $terms = get_terms('filter',array('hide_empty'=>false));

                  foreach ($terms as $term) {
                    echo 
                    '<a class="filter btn btn-common" data-filter=".'.$term->slug.'">
                    '.$term->name.'</a>';
                  }
                ?>
            </div>
           
  
            <div id="gallery" class="row">

              <?php
                $args = array('post_type'=>'gallery');
                $the_query = new WP_Query( $args );
                
                  while ( $the_query->have_posts() ) {
                      $the_query->the_post();

                      get_template_part('partials/gallery/content','default');
                  }
                  
                wp_reset_postdata();
              ?>
              
            </div>
          </div>
        </div>
      </section>