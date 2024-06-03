<?php
/**
 * Template Name: Programs Page
 *
 * @package WordPress
 * @subpackage themeuniversity
 * @since 1.0
 */

get_header();
?>
<div class="page-banner">
      <div
        class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">Welcome to Programs</h1>
        <div class="page-banner__intro">
          <p>Keep up with our latest news.</p>
        </div>
      </div>
  </div>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <header class="page-header">
            <h1 class="page-title"><?php single_post_title(); ?></h1>
            <?php
            // Hiển thị mô tả của trang, nếu có.
            $page_description = get_the_content();
            if ( ! empty( $page_description ) ) {
                echo '<div class="page-description">' . $page_description . '</div>';
            }
            ?>
        </header><!-- .page-header -->

        <div class="programs-list">
            <?php
            // Hiển thị danh sách các chương trình.
            $args = array(
                'post_type'      => 'program', // Điều chỉnh thành loại bài viết của bạn
                'posts_per_page' => -1,
                'order'          => 'ASC', // Sắp xếp theo thứ tự tăng dần
            );

            $programs_query = new WP_Query( $args );

            if ( $programs_query->have_posts() ) :
                while ( $programs_query->have_posts() ) :
                    $programs_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title"><?php the_title(); ?></h2>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-<?php the_ID(); ?> -->
                    <?php
                endwhile;
                wp_reset_postdata(); // Đặt lại truy vấn
            else :
                // Nếu không có bài viết, hiển thị thông báo không có nội dung.
                echo '<p>' . __( 'No programs found.', 'themeuniversity' ) . '</p>';
            endif;
            ?>
        </div><!-- .programs-list -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
