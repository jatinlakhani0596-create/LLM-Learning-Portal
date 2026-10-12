<?php
/**
 * The template for displaying all regular pages
 *
 * @package CareerConnect
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>
    <div class="page-header-banner bg-light-cyan">
        <div class="container text-center">
            <h1 class="page-main-title"><?php the_title(); ?></h1>
        </div>
    </div>

    <?php career_connect_breadcrumbs(); ?>

    <section class="section-padding bg-white" id="page-content-<?php the_ID(); ?>">
        <div class="container" style="max-width: 860px;">
            <article id="post-<?php the_ID(); ?>" <?php post_class('page-article-body'); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="page-thumbnail-wrap card-shadow" style="margin-bottom: 30px; border-radius: 12px; overflow: hidden;">
                        <?php the_post_thumbnail('full', array('class' => 'page-feat-img', 'style' => 'width: 100%; height: auto;')); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content typography-prose">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'career-connect'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </article>
        </div>
    </section>
<?php endwhile; ?>

<?php
get_footer();
