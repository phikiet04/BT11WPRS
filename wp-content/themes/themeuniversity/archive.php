<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Theme_University
 * @since Theme University 1.0
 */

get_header();

$description = get_the_archive_description();
?>
<div class="page-banner">
      <div
        class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">Welcome to Category</h1>
        <div class="page-banner__intro">
          <p>Keep up with our latest news.</p>
        </div>
      </div>
  </div>

<?php if ( have_posts() ) : ?>

    <header class="page-header alignwide">
        <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
        <?php if ( $description ) : ?>
            <div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
        <?php endif; ?>
    </header><!-- .page-header -->

    <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
			    <?php if ( is_category() ) echo "danh muc bai viet" ?>
			    <?php if ( is_author() ) echo "<h1>Người viết bai viet</h1>" ?>
                <?php if ( is_singular() ) : ?>
                    <?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
                <?php else : ?>
                    <?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                <?php endif; ?>
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php
                the_content(
                    __( 'Continue reading', 'themeuniversity' )
                );

                wp_link_pages(
                    array(
                        'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'themeuniversity' ) . '">',
                        'after'    => '</nav>',
                        /* translators: %: Page number. */
                        'pagelink' => esc_html__( 'Page %', 'themeuniversity' ),
                    )
                );
                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer default-max-width">
                <?php 
                // Replace twenty_twenty_one_entry_meta_footer() with appropriate footer content or custom function for your theme
                ?>
            </footer><!-- .entry-footer -->
        </article><!-- #post-<?php the_ID(); ?> -->
    <?php endwhile; ?>

    <?php 
    // Replace twenty_twenty_one_the_posts_navigation() with appropriate navigation function for your theme
    ?>

<?php else : ?>
    <?php 
    // get_template_part( 'template-parts/content/content-none' );
    ?>
<?php endif; ?>

<?php
get_footer();
?>
