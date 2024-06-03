<?php
/**
 * Template Name: Blog Page Template for Campuses Category
 *
 * @package WordPress
 * @subpackage Your_Theme
 * @since 1.0
 */

get_header();
?>
<div class="page-banner">
      <div
        class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">Welcome to Campuses</h1>
        <div class="page-banner__intro">
          <p>Keep up with our latest news.</p>
        </div>
      </div>
  </div>
<div class="container container--narrow page-section">
    <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 10,
        'category_name'  => 'campuses', // Thay 'campuses' bằng slug của chuyên mục 'Campuses'
        'paged'          => get_query_var('paged') ? get_query_var('paged') : 1
    );

    $blog_posts_query = new WP_Query($args);

    if ($blog_posts_query->have_posts()) :
        while ($blog_posts_query->have_posts()) : $blog_posts_query->the_post();
    ?>
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
    <?php
        endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;

    // Phân trang
    echo paginate_links();
    ?>
</div>

<?php get_footer(); ?>
