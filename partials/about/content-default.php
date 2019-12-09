<?php
  $slug = get_post_field('post_name');
?>

<div class="col-md-4 col-sm-6">
  <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
    <div class="icon">
      <i class="<?php the_field('icon') ?>"></i>
    </div>
    <h4><?php the_title() ?></h4>
    <div><?php the_content() ?></div>
  </div>
</div>