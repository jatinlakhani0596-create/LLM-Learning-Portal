<?php
/**
 * The template for displaying all single posts
 *
 * @package CareerConnect
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<?php while (have_posts()) : the_post(); 
    $thumb = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : $theme_uri . '/assets/images/course-thumbnails/web-dev.png';
?>
    <div class="page-header-banner bg-light-cyan">
        <div class="container text-center" style="max-width: 860px;">
            <div class="single-post-categories">
                <?php the_category(' '); ?>
            </div>
            <h1 class="single-post-title"><?php the_title(); ?></h1>
            <div class="single-post-meta">
                <span class="meta-author">Written by <strong><?php the_author(); ?></strong></span>
                <span class="meta-sep">&bull;</span>
                <span class="meta-date"><?php echo esc_html(get_the_date('F j, Y')); ?></span>
            </div>
        </div>
    </div>

    <?php career_connect_breadcrumbs(); ?>

    <section class="section-padding bg-white" id="single-post-content">
        <div class="container" style="max-width: 840px;">
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-article-body'); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="featured-media-frame card-shadow" style="margin-bottom: 35px; border-radius: 12px; overflow: hidden;">
                        <?php the_post_thumbnail('full', array('class' => 'featured-img', 'style' => 'width: 100%; height: auto; display: block;')); ?>
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

                <div class="post-tags-row" style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #E5E7EB;">
                    <?php the_tags('<div class="tags-list"><strong>Tags:</strong> ', ' ', '</div>'); ?>
                </div>

                <!-- Author Bio Box -->
                <div class="author-bio-card bg-light card-shadow" style="margin-top: 35px; padding: 25px; border-radius: 10px; display: flex; gap: 20px; align-items: center;">
                    <div class="author-avatar-wrap">
                        <?php echo get_avatar(get_the_author_meta('ID'), 70, '', '', array('class' => 'author-avatar-circle', 'style' => 'border-radius: 50%;')); ?>
                    </div>
                    <div class="author-bio-text">
                        <h4 style="margin: 0 0 6px; font-size: 18px; color: #202124;"><?php the_author(); ?></h4>
                        <p style="margin: 0; color: #6B7280; font-size: 14px; line-height: 1.5;">
                            <?php echo get_the_author_meta('description') ? esc_html(get_the_author_meta('description')) : 'Faculty mentor and technical educator at Career Connect. Dedicated to creating clear, actionable learning paths for emerging technologists.'; ?>
                        </p>
                    </div>
                </div>

                <!-- Post Navigation -->
                <div class="post-navigation-row" style="margin-top: 40px;">
                    <?php
                    the_post_navigation(array(
                        'prev_text' => '<span class="nav-subtitle">&larr; Previous Article</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">Next Article &rarr;</span> <span class="nav-title">%title</span>',
                    ));
                    ?>
                </div>

                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </article>
        </div>
    </section>
<?php endwhile; ?>

<?php
get_footer();
