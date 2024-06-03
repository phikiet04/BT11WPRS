<?php 

    get_header();
?>

 <div class="page-banner">
      <div
        class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">Welcome to our blog!</h1>
        <div class="page-banner__intro">
          <p>Keep up with our latest news.</p>
        </div>
      </div>
  </div>
  <?php
   while (have_posts()):
    the_post();
  ?>
  <div class="container container--narrow page-section">
      <div class="post-item">
        <h2 class="headline headline--medium headline--post-title">
          <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
        </h2>

        <div class="metabox">
          <p>
            Posted by
              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="Posts by <?php echo get_the_author(); ?>" rel="author"><?php echo get_the_author(); ?></a>
              on <?php echo get_the_date(); ?> in
              <a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>" rel="category tag"><?php echo get_the_category()[0]->name; ?></a>
          </p>
        </div>

        <div class="generic-content">
          <p>
             <?php the_excerpt(); ?>
          </p>
          <p>
            <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Continue reading &raquo;</a>
          </p>
        </div>
      </div>    
  </div>
  <?php endwhile;
   ?>
  <div class="chuyen">
  <?php echo paginate_links()  ?>
  </div>



<?php

get_footer();