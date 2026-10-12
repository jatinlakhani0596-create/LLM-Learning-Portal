<?php
/**
 * Template Name: Courses Page
 *
 * @package CareerConnect
 */

get_header();

$courses      = career_connect_get_courses();
$guidance_url = career_connect_get_page_url('career-guidance');
$enroll_url   = career_connect_get_page_url('enroll');

// Extract unique categories for filter tabs
$categories = array('All');
foreach ($courses as $c) {
    if (!in_array($c['category'], $categories)) {
        $categories[] = $c['category'];
    }
}
?>

<div class="page-header-banner bg-light-cyan">
    <div class="container text-center">
        <span class="page-eyebrow">CAREER-FOCUSED CURRICULUM</span>
        <h1 class="page-main-title">Explore All Courses & Tracks</h1>
        <p class="page-lead-text">
            Choose from industry-vetted programs engineered to build practical, job-ready capabilities in software engineering, AI, data, and career readiness.
        </p>
    </div>
</div>

<?php career_connect_breadcrumbs(); ?>

<section class="section-padding bg-light" id="courses-catalog-section">
    <div class="container">
        <!-- Search & Filter Controls -->
        <div class="courses-filter-controls">
            <div class="course-search-wrapper">
                <div class="search-input-group">
                    <span class="search-icon" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </span>
                    <input type="text" 
                           id="course-search-input" 
                           class="course-search-input" 
                           placeholder="Search courses by title, topic, or keyword..." 
                           aria-label="Search courses">
                    <button type="button" id="clear-search-btn" class="clear-search-btn" aria-label="Clear search" style="display: none;">
                        &times;
                    </button>
                </div>
            </div>

            <!-- Category Filter Buttons -->
            <div class="category-filter-buttons" role="tablist" aria-label="Filter courses by category">
                <?php foreach ($categories as $index => $cat) : 
                    $active_class = ($index === 0) ? ' active' : '';
                    $cat_slug     = ($cat === 'All') ? 'all' : sanitize_title($cat);
                ?>
                    <button type="button" 
                            class="filter-tab-btn<?php echo esc_attr($active_class); ?>" 
                            data-category="<?php echo esc_attr($cat_slug); ?>"
                            role="tab"
                            aria-selected="<?php echo ($index === 0) ? 'true' : 'false'; ?>">
                        <?php echo esc_html($cat); ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- Active Filter Status & Count -->
            <div class="filter-results-status">
                <span id="courses-counter" class="courses-counter">Showing <strong><?php echo esc_html(count($courses)); ?></strong> of <?php echo esc_html(count($courses)); ?> programs</span>
            </div>
        </div>

        <!-- Courses Cards Grid -->
        <div class="courses-grid" id="courses-grid-container">
            <?php foreach ($courses as $slug => $c) : 
                $course_link   = career_connect_get_course_url($slug);
                $category_slug = sanitize_title($c['category']);
            ?>
                <article class="course-card filterable-course-item" 
                         data-category="<?php echo esc_attr($category_slug); ?>"
                         data-title="<?php echo esc_attr(strtolower($c['title'])); ?>"
                         data-description="<?php echo esc_attr(strtolower($c['excerpt'])); ?>">
                    
                    <div class="course-thumbnail-wrapper">
                        <a href="<?php echo esc_url($course_link); ?>" tabindex="-1" aria-hidden="true">
                            <img src="<?php echo esc_url($c['thumbnail']); ?>" 
                                 alt="<?php echo esc_attr($c['title']); ?>" 
                                 class="course-card-img" 
                                 loading="lazy">
                        </a>
                        <span class="course-category-badge"><?php echo esc_html($c['category']); ?></span>
                        <?php if (!empty($c['badge'])) : ?>
                            <span class="course-custom-badge"><?php echo esc_html($c['badge']); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="course-card-body">
                        <div class="course-meta-top">
                            <span class="course-level-badge"><?php echo esc_html($c['level']); ?></span>
                            <span class="course-duration">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                <?php echo esc_html($c['duration']); ?>
                            </span>
                        </div>

                        <h3 class="course-card-title">
                            <a href="<?php echo esc_url($course_link); ?>">
                                <?php echo esc_html($c['title']); ?>
                            </a>
                        </h3>

                        <p class="course-card-excerpt">
                            <?php echo esc_html($c['excerpt']); ?>
                        </p>

                        <div class="course-instructor-row">
                            <img src="<?php echo esc_url($c['instructor']['image']); ?>" alt="<?php echo esc_attr($c['instructor']['name']); ?>" class="instructor-avatar" loading="lazy">
                            <div class="instructor-meta">
                                <span class="inst-name"><?php echo esc_html($c['instructor']['name']); ?></span>
                                <span class="inst-role"><?php echo esc_html($c['instructor']['role']); ?></span>
                            </div>
                        </div>

                        <div class="course-card-footer">
                            <div class="course-rating">
                                <span class="stars">★★★★★</span>
                                <span class="rating-val"><?php echo esc_html($c['rating']); ?></span>
                                <span class="review-count">(<?php echo esc_html($c['rating_count']); ?>)</span>
                            </div>
                            <div class="course-card-actions">
                                <a href="<?php echo esc_url($course_link); ?>" class="btn-view-course">
                                    View Course &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Empty Results State (Toggled by JS) -->
        <div id="no-courses-found" class="no-results-box" style="display: none;">
            <div class="no-results-icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#6B7280" stroke-width="1.8"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            </div>
            <h3>No matching courses found</h3>
            <p>We could not find any courses matching your search criteria. Try modifying your keywords or resetting category filters.</p>
            <button type="button" id="reset-courses-btn" class="btn btn-primary" style="margin-top: 15px;">Reset All Filters</button>
        </div>
    </div>
</section>

<!-- Career Guidance Helper Box -->
<section class="section-padding bg-white">
    <div class="container guidance-callout-box bg-lavender card-shadow">
        <div class="guidance-callout-grid">
            <div class="guidance-callout-text">
                <span class="section-eyebrow">UNSURE WHICH TRACK TO CHOOSE?</span>
                <h3 class="guidance-title">Take Our 2-Minute Career Assessment Quiz</h3>
                <p class="guidance-desc">
                    Answer 4 simple questions about your interests, strengths, and career goals to receive an instant recommended learning track and personalized roadmap.
                </p>
            </div>
            <div class="guidance-callout-btn">
                <a href="<?php echo esc_url($guidance_url); ?>#career-assessment" class="btn btn-primary">
                    TAKE CAREER QUIZ
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
