<?php
/**
 * The template for displaying search results pages
 *
 * @package CareerConnect
 */

get_header();

$theme_uri    = get_template_directory_uri();
$courses_url  = career_connect_get_page_url('courses');
$guidance_url = career_connect_get_page_url('career-guidance');
?>

<div class="page-header-banner bg-light-cyan">
    <div class="container text-center">
        <span class="page-eyebrow">SEARCH RESULTS</span>
        <h1 class="page-main-title">
            <?php
            /* translators: %s: search query. */
            printf(esc_html__('Results for: &ldquo;%s&rdquo;', 'career-connect'), '<span>' . get_search_query() . '</span>');
            ?>
        </h1>
        <p class="page-lead-text">
            Explore articles, guides, and pages matching your search query.
        </p>
    </div>
</div>

<?php career_connect_breadcrumbs(); ?>

<section class="section-padding bg-light" id="search-results-section">
    <div class="container" style="max-width: 900px;">
        <!-- Search bar again to refine -->
        <div class="search-refine-box" style="margin-bottom: 35px;">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="search-input-group">
                    <span class="search-icon" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </span>
                    <input type="search" class="search-field form-control" placeholder="Search again..." value="<?php echo get_search_query(); ?>" name="s" />
                    <button type="submit" class="btn btn-primary" style="padding: 10px 22px;">Search</button>
                </div>
            </form>
        </div>

        <?php if (have_posts()) : ?>
            <div class="search-results-list">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('search-result-card bg-white card-shadow'); ?> style="padding: 25px; margin-bottom: 20px; border-radius: 10px;">
                        <div class="result-type-badge-row" style="margin-bottom: 8px;">
                            <span class="result-type-badge" style="display: inline-block; padding: 3px 10px; font-size: 11px; font-weight: 700; text-transform: uppercase; background: #E0E7FF; color: #1769F5; border-radius: 4px;">
                                <?php echo esc_html(get_post_type()); ?>
                            </span>
                            <span class="result-date" style="font-size: 13px; color: #6B7280; margin-left: 10px;">
                                <?php echo esc_html(get_the_date()); ?>
                            </span>
                        </div>

                        <h2 class="search-result-title" style="margin: 0 0 10px; font-size: 20px;">
                            <a href="<?php the_permalink(); ?>" style="color: #202124; text-decoration: none;">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <div class="search-result-excerpt" style="color: #555; font-size: 15px; line-height: 1.6; margin-bottom: 15px;">
                            <?php the_excerpt(); ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="btn-link-action" style="font-weight: 700; color: #1769F5; text-decoration: none;">
                            View Details &rarr;
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination-wrapper text-center" style="margin-top: 40px;">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                ));
                ?>
            </div>
        <?php else : ?>
            <div class="no-results-box bg-white card-shadow text-center" style="padding: 50px 30px; border-radius: 12px;">
                <div class="no-results-icon" style="margin-bottom: 15px;">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#6B7280" stroke-width="1.8"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
                <h3 style="font-size: 24px; color: #202124; margin-bottom: 10px;">No Results Found</h3>
                <p style="color: #6B7280; max-width: 500px; margin: 0 auto 25px;">
                    We couldn't find anything matching "<strong><?php echo esc_html(get_search_query()); ?></strong>". Try searching with different terms, or explore our primary sections below:
                </p>

                <div class="btn-group-center">
                    <a href="<?php echo esc_url($courses_url); ?>" class="btn btn-primary">EXPLORE COURSES</a>
                    <a href="<?php echo esc_url($guidance_url); ?>" class="btn btn-secondary">CAREER ROADMAPS</a>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-outline">RETURN HOME</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
