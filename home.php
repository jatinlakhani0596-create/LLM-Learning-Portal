<?php
/**
 * The template for displaying the blog posts index
 *
 * @package CareerConnect
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<div class="page-header-banner bg-light-cyan">
    <div class="container text-center">
        <span class="page-eyebrow">KNOWLEDGE & PERSPECTIVES</span>
        <h1 class="page-main-title">Career Connect Insights & Blog</h1>
        <p class="page-lead-text">
            Practical strategies, technical deep-dives, and career guidance authored by our mentors and engineering faculty.
        </p>
    </div>
</div>

<?php career_connect_breadcrumbs(); ?>

<section class="section-padding bg-light" id="blog-index-section">
    <div class="container">
        <!-- Search bar inside blog -->
        <div class="blog-search-bar-wrap" style="max-width: 550px; margin: 0 auto 40px;">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="search-input-group">
                    <span class="search-icon" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </span>
                    <input type="search" class="search-field form-control" placeholder="Search blog articles..." value="<?php echo get_search_query(); ?>" name="s" />
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Search</button>
                </div>
            </form>
        </div>

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
                            <div class="blog-meta-category">
                                <?php the_category(', '); ?>
                            </div>
                            <h2 class="blog-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="blog-card-excerpt">
                                <?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?>
                            </p>
                            <div class="blog-card-footer">
                                <span class="author-byline">By <?php the_author(); ?></span>
                                <a href="<?php the_permalink(); ?>" class="blog-read-more">
                                    Read Article &rarr;
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- WordPress Posts Pagination -->
            <div class="pagination-wrapper text-center" style="margin-top: 45px;">
                <?php
                the_posts_pagination(array(
                    'mid_size'           => 2,
                    'prev_text'          => '&larr; Previous',
                    'next_text'          => 'Next &rarr;',
                    'screen_reader_text' => 'Posts navigation',
                ));
                ?>
            </div>
        <?php else : ?>
            <div class="no-results-box bg-white card-shadow" style="padding: 40px; text-align: center; border-radius: 8px;">
                <h3>No articles found</h3>
                <p>There are currently no blog articles published. Please check back soon!</p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary" style="margin-top: 15px;">Return Home</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
