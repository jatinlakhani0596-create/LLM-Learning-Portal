<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package CareerConnect
 */

get_header();

$courses_url  = career_connect_get_page_url('courses');
$guidance_url = career_connect_get_page_url('career-guidance');
?>

<div class="page-header-banner bg-light-cyan">
    <div class="container text-center">
        <span class="page-eyebrow" style="color: #E70D46;">ERROR 404</span>
        <h1 class="page-main-title">Page Not Found</h1>
        <p class="page-lead-text">
            The page you are looking for may have been relocated, renamed, or is temporarily unavailable.
        </p>
    </div>
</div>

<?php career_connect_breadcrumbs(); ?>

<section class="section-padding bg-white" id="error-404-section">
    <div class="container text-center" style="max-width: 750px;">
        <div class="error-404-card card-shadow" style="padding: 50px 30px; border-radius: 12px; background: #fff;">
            <div class="error-big-number" style="font-size: 88px; font-weight: 900; line-height: 1; color: #1769F5; margin-bottom: 20px;">
                404
            </div>

            <h2 style="font-size: 26px; color: #202124; margin-bottom: 12px;">Let's Get You Back on Track</h2>
            <p style="color: #6B7280; font-size: 16px; line-height: 1.6; margin-bottom: 30px;">
                Don't let a missing link halt your learning journey. Use the search bar below or navigate directly to our popular educational sections:
            </p>

            <!-- Search Form -->
            <div style="max-width: 480px; margin: 0 auto 35px;">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="search-input-group">
                        <span class="search-icon" aria-hidden="true">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                        </span>
                        <input type="search" class="search-field form-control" placeholder="Search Career Connect..." value="" name="s" />
                        <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Search</button>
                    </div>
                </form>
            </div>

            <!-- Action Buttons -->
            <div class="btn-group-center" style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    GO TO HOMEPAGE
                </a>
                <a href="<?php echo esc_url($courses_url); ?>" class="btn btn-secondary">
                    EXPLORE COURSES
                </a>
                <a href="<?php echo esc_url($guidance_url); ?>" class="btn btn-outline">
                    CAREER GUIDANCE
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
