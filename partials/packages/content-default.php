<?php
  $slug = get_post_field('post_name');
?>

<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="pricing-table">
    <div class="pricing-details">
      <h2><?php the_title() ?></h2>
      <span>$<?php the_field('price') ?></span>
        <div>
          <?php the_content() ?>
        </div>
    </div>
    <div class="plan-button">
      <a href="#contact" class="btn btn-common">Enquire</a>
    </div>
  </div>
</div>