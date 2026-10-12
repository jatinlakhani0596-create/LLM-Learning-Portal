<?php
/**
 * Template Name: Course Detail Page
 *
 * @package CareerConnect
 */

get_header();

$course_slug = isset($_GET['course']) ? sanitize_key($_GET['course']) : 'web-development';
$course      = career_connect_get_course($course_slug);
$all_courses = career_connect_get_courses();
$courses_url = career_connect_get_page_url('courses');
$enroll_url  = add_query_arg('course', $course['id'], career_connect_get_page_url('enroll'));
?>

<!-- Course Header Banner -->
<div class="course-detail-header-banner bg-light-cyan">
    <div class="container">
        <div class="course-header-meta">
            <a href="<?php echo esc_url($courses_url); ?>" class="back-link">
                &larr; Back to all courses
            </a>
            <span class="course-header-category"><?php echo esc_html($course['category']); ?></span>
        </div>

        <h1 class="course-detail-title"><?php echo esc_html($course['title']); ?></h1>
        <p class="course-detail-lead"><?php echo esc_html($course['excerpt']); ?></p>

        <div class="course-header-badges-row">
            <div class="badge-item">
                <span class="stars">★★★★★</span>
                <strong><?php echo esc_html($course['rating']); ?></strong>
                <span class="text-muted">(<?php echo esc_html($course['rating_count']); ?> reviews)</span>
            </div>
            <div class="badge-sep" aria-hidden="true">&bull;</div>
            <div class="badge-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span><?php echo esc_html($course['duration']); ?></span>
            </div>
            <div class="badge-sep" aria-hidden="true">&bull;</div>
            <div class="badge-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <span><?php echo esc_html($course['level']); ?></span>
            </div>
            <div class="badge-sep" aria-hidden="true">&bull;</div>
            <div class="badge-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                <span><?php echo esc_html($course['students']); ?></span>
            </div>
        </div>
    </div>
</div>

<?php career_connect_breadcrumbs(); ?>

<!-- Main Content & Sidebar Grid -->
<section class="section-padding bg-white" id="course-main-content">
    <div class="container">
        <div class="course-detail-layout-grid">
            <!-- Left Column: Deep Content -->
            <div class="course-main-column">
                <!-- 1. Overview -->
                <div class="course-section-block">
                    <h2 class="block-heading">Course Overview</h2>
                    <p class="block-paragraph"><?php echo esc_html($course['overview']); ?></p>
                </div>

                <!-- 2. What You Will Learn (Objectives) -->
                <div class="course-section-block">
                    <h2 class="block-heading">What You Will Learn</h2>
                    <ul class="learning-objectives-grid">
                        <?php foreach ($course['objectives'] as $obj) : ?>
                            <li class="objective-item">
                                <span class="obj-check-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1769F5" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                                <span class="obj-text"><?php echo esc_html($obj); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- 3. Curriculum Modules (Interactive Accordion) -->
                <div class="course-section-block">
                    <div class="curriculum-header-row">
                        <h2 class="block-heading" style="margin-bottom: 0;">Curriculum & Modules</h2>
                        <span class="curriculum-meta"><?php echo count($course['curriculum']); ?> Comprehensive Modules</span>
                    </div>
                    <p class="block-paragraph" style="margin-top: 10px;">
                        Click on each module below to view specific lessons, practical exercises, and milestone deliverables.
                    </p>

                    <div class="accordion-group curriculum-accordion" id="curriculum-accordion">
                        <?php foreach ($course['curriculum'] as $idx => $mod) : 
                            $is_first = ($idx === 0);
                        ?>
                            <div class="accordion-item<?php echo $is_first ? ' is-active' : ''; ?>">
                                <button type="button" 
                                        class="accordion-trigger" 
                                        aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>"
                                        id="curr-header-<?php echo esc_attr($idx); ?>"
                                        aria-controls="curr-panel-<?php echo esc_attr($idx); ?>">
                                    <span class="acc-title-text"><?php echo esc_html($mod['title']); ?></span>
                                    <span class="acc-chevron" aria-hidden="true">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                                    </span>
                                </button>
                                <div class="accordion-panel" 
                                     id="curr-panel-<?php echo esc_attr($idx); ?>" 
                                     role="region" 
                                     aria-labelledby="curr-header-<?php echo esc_attr($idx); ?>"
                                     <?php echo $is_first ? '' : 'hidden'; ?>>
                                    <div class="accordion-panel-inner">
                                        <ul class="lesson-items-list">
                                            <?php foreach ($mod['lessons'] as $lesson) : ?>
                                                <li class="lesson-item">
                                                    <span class="lesson-icon" aria-hidden="true">
                                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>
                                                    </span>
                                                    <span class="lesson-name"><?php echo esc_html($lesson); ?></span>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- 4. Prerequisites -->
                <div class="course-section-block">
                    <h2 class="block-heading">Prerequisites</h2>
                    <p class="block-paragraph"><?php echo esc_html($course['prerequisites']); ?></p>
                </div>

                <!-- 5. Certification -->
                <div class="course-section-block">
                    <h2 class="block-heading">Certificate of Achievement</h2>
                    <div class="certificate-info-box card-shadow">
                        <div class="cert-icon-circle">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1769F5" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
                        </div>
                        <div class="cert-text">
                            <h4>Verified Digital Credential</h4>
                            <p><?php echo esc_html($course['certificate']); ?> Each certificate carries a unique verification identifier suitable for adding to your LinkedIn profile and resume.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sticky Sidebar Card -->
            <div class="course-sidebar-column">
                <aside class="course-enroll-card card-shadow" id="course-enroll-card">
                    <div class="sidebar-thumb-frame">
                        <img src="<?php echo esc_url($course['thumbnail']); ?>" 
                             alt="<?php echo esc_attr($course['title']); ?>" 
                             class="sidebar-img"
                             loading="eager">
                    </div>

                    <div class="sidebar-card-body">
                        <div class="sidebar-price-row">
                            <span class="price-label"><?php echo esc_html($course['price']); ?></span>
                            <span class="price-badge-free">Available Now</span>
                        </div>

                        <div class="sidebar-action-buttons">
                            <a href="<?php echo esc_url($enroll_url); ?>" class="btn btn-primary btn-block btn-enroll-action">
                                ENROLL IN THIS COURSE
                            </a>
                            <button type="button" class="btn btn-outline btn-block" onclick="alert('Demo notice: Full downloadable PDF curriculum preview would be available here in production.');">
                                Download Syllabus (Demo PDF)
                            </button>
                        </div>

                        <div class="sidebar-specs-list">
                            <div class="spec-row">
                                <span class="spec-label">Duration:</span>
                                <span class="spec-value"><?php echo esc_html($course['duration']); ?></span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Skill Level:</span>
                                <span class="spec-value"><?php echo esc_html($course['level']); ?></span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Learners Enrolled:</span>
                                <span class="spec-value"><?php echo esc_html($course['students']); ?></span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Certificate:</span>
                                <span class="spec-value">Included</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Course Access:</span>
                                <span class="spec-value">Self-Paced / Lifetime</span>
                            </div>
                        </div>

                        <hr class="sidebar-divider">

                        <!-- Instructor Profile Box -->
                        <div class="sidebar-instructor-card">
                            <h4 class="instructor-box-title">Course Instructor</h4>
                            <div class="instructor-box-inner">
                                <img src="<?php echo esc_url($course['instructor']['image']); ?>" 
                                     alt="<?php echo esc_attr($course['instructor']['name']); ?>" 
                                     class="instructor-box-avatar">
                                <div class="instructor-box-info">
                                    <strong class="inst-name"><?php echo esc_html($course['instructor']['name']); ?></strong>
                                    <span class="inst-role"><?php echo esc_html($course['instructor']['role']); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<!-- Related Courses Row -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-eyebrow">CONTINUE EXPLORING</span>
            <h2 class="section-title">Other Recommended Programs</h2>
        </div>

        <div class="courses-grid" style="grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));">
            <?php 
            $shown_count = 0;
            foreach ($all_courses as $slug => $c) : 
                if ($slug === $course['id'] || $shown_count >= 3) {
                    continue;
                }
                $shown_count++;
                $course_link = career_connect_get_course_url($slug);
            ?>
                <article class="course-card">
                    <div class="course-thumbnail-wrapper">
                        <a href="<?php echo esc_url($course_link); ?>" tabindex="-1" aria-hidden="true">
                            <img src="<?php echo esc_url($c['thumbnail']); ?>" alt="<?php echo esc_attr($c['title']); ?>" class="course-card-img" loading="lazy">
                        </a>
                        <span class="course-category-badge"><?php echo esc_html($c['category']); ?></span>
                    </div>
                    <div class="course-card-body">
                        <h3 class="course-card-title">
                            <a href="<?php echo esc_url($course_link); ?>"><?php echo esc_html($c['title']); ?></a>
                        </h3>
                        <p class="course-card-excerpt"><?php echo esc_html($c['excerpt']); ?></p>
                        <div class="course-card-footer">
                            <span class="stars">★★★★★ <?php echo esc_html($c['rating']); ?></span>
                            <a href="<?php echo esc_url($course_link); ?>" class="btn-view-course">View Course &rarr;</a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
get_footer();
