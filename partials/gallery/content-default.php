<?php

	$terms = get_the_terms(get_the_ID(), 'filter');

	$classes = '';
	foreach($terms as $term){
		$classes .= $term->slug . ' ';
	}

?>

<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix <?php echo $classes ?>">
  <div class="portfolio-item">
    <div class="shot-item">
      <img src="<?php the_field('image') ?>" alt="" />  
      <a class="overlay lightbox" href="<?php the_field('image') ?>">
        <i class="lnr lnr-eye item-icon"></i>
      </a>
    </div>               
  </div>
</div>