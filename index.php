<?php
/**
 * The main template file
 *
 * @package CareerConnect
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<div class="page-header-banner bg-light-cyan">
    <div class="container text-center">
        <h1 class="page-main-title"><?php bloginfo('name'); ?></h1>
        <p class="page-lead-text"><?php bloginfo('description'); ?></p>
    </div>
</div>

<?php career_connect_breadcrumbs(); ?>

<section class="section-padding bg-light" id="main-content-section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="blog-grid">
                <?php while (have_posts()) : the_post(); 
                    $thumb = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium_large') : $theme_uri . '/assets/images/course-thumbnails/web-dev.png';
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
                        <div class="blog-card-thumb">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="blog-card-img" loading="lazy">
                            </a>
                            <span class="blog-date-badge"><?php echo esc_html(get_the_date('M j, Y')); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h2 class="blog-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="blog-card-excerpt">
                                <?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="blog-read-more">
                                Read More &rarr;
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination-wrapper text-center" style="margin-top: 45px;">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                ));
                ?>
            </div>
        <?php else : ?>
            <div class="no-results-box bg-white card-shadow text-center" style="padding: 40px; border-radius: 8px;">
                <h2>No Content Found</h2>
                <p>There are no items to display at this location.</p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary" style="margin-top: 15px;">Return Home</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
