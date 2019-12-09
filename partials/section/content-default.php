<?php
  $slug = get_post_field('post_name');
?>

<section id="<?php the_field('section_id') ?>" class="<?php the_field('section_classes')?>">
  <div class="container">
    <div class="section-header">          
      <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><?php the_title() ?></h2>
      <hr class="lines wow zoomIn" data-wow-delay="0.3s">
      <div class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><?php the_content() ?></div>
    </div>
  </div>
</section>