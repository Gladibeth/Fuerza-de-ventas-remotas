<div class="main-banner">
    <div class="main-banner__content">
    <?php $args = array( 'post_type' => 'banner','order' => 'ASC'); ?>   
		<?php $loop = new WP_Query( $args ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-banner__item">
        <div class="mask">
          <div class="main-banner__text">
            <div class="main-banner__title">
              <p>		<?php the_title(); ?> </p>
            </div>
            <div class="main-banner__description">
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>
        <div class="main-banner__img">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>