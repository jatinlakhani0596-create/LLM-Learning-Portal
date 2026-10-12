<?php
/**
 * Template Name: Enroll Page
 *
 * @package CareerConnect
 */

get_header();

$selected_course_id = isset($_GET['course']) ? sanitize_key($_GET['course']) : '';
$courses            = career_connect_get_courses();
$courses_url        = career_connect_get_page_url('courses');
$guidance_url       = career_connect_get_page_url('career-guidance');
?>

<div class="page-header-banner bg-light-cyan">
    <div class="container text-center">
        <span class="page-eyebrow">TAKE THE NEXT STEP</span>
        <h1 class="page-main-title">Enroll in Career Connect</h1>
        <p class="page-lead-text">
            Submit your enrollment interest for our hands-on technology and career preparation programs. Start building skills that accelerate your future.
        </p>
    </div>
</div>

<?php career_connect_breadcrumbs(); ?>

<section class="section-padding bg-white" id="enroll-section">
    <div class="container" style="max-width: 860px;">
        <div class="enrollment-container-card card-shadow">
            <div class="enrollment-header-intro">
                <span class="section-eyebrow">APPLICATION FORM</span>
                <h2 class="form-title">Student Enrollment Interest</h2>
                <p class="form-subtext">Complete the fields below to simulate registering for your chosen track.</p>
            </div>

            <!-- Clear Demo Mode Disclaimer -->
            <div class="demo-notice-alert">
                <span class="notice-badge">DEMO MODE</span>
                <p class="notice-text">
                    This enrollment form is a simulated frontend demonstration. It validates form fields and renders an immediate confirmation screen. No actual personal data or payments are collected or transmitted to external servers.
                </p>
            </div>

            <!-- Enrollment Form -->
            <form id="career-enrollment-form" class="career-form" novalidate>
                <div class="form-row-2">
                    <div class="form-group">
                        <label for="enroll-name" class="form-label">Full Name <span class="req">*</span></label>
                        <input type="text" id="enroll-name" name="name" class="form-control" placeholder="e.g. Jordan Rivera" required>
                        <span class="form-error-msg" id="enroll-name-error">Please provide your full name.</span>
                    </div>

                    <div class="form-group">
                        <label for="enroll-email" class="form-label">Email Address <span class="req">*</span></label>
                        <input type="email" id="enroll-email" name="email" class="form-control" placeholder="e.g. jordan@example.com" required>
                        <span class="form-error-msg" id="enroll-email-error">Please enter a valid email address.</span>
                    </div>
                </div>

                <div class="form-row-2">
                    <div class="form-group">
                        <label for="enroll-course" class="form-label">Selected Course Track <span class="req">*</span></label>
                        <select id="enroll-course" name="course" class="form-control" required>
                            <option value="">-- Choose a Course Track --</option>
                            <?php foreach ($courses as $slug => $c) : 
                                $is_selected = ($slug === $selected_course_id) ? ' selected' : '';
                            ?>
                                <option value="<?php echo esc_attr($slug); ?>"<?php echo $is_selected; ?>>
                                    <?php echo esc_html($c['title']); ?> (<?php echo esc_html($c['duration']); ?>)
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <span class="form-error-msg" id="enroll-course-error">Please select a course track.</span>
                    </div>

                    <div class="form-group">
                        <label for="enroll-level" class="form-label">Current Experience Level</label>
                        <select id="enroll-level" name="level" class="form-control">
                            <option value="beginner">Beginner (No prior coding experience)</option>
                            <option value="intermediate">Intermediate (Some scripting or coursework)</option>
                            <option value="advanced">Advanced (Experienced looking to specialize)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="enroll-schedule" class="form-label">Preferred Learning Schedule</label>
                    <select id="enroll-schedule" name="schedule" class="form-control">
                        <option value="self-paced">Flexible Self-Paced (Learn on your own time)</option>
                        <option value="part-time">Part-Time Evenings & Weekends (10-15 hrs/wk)</option>
                        <option value="accelerated">Full-Time Intensive (30+ hrs/wk)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="enroll-message" class="form-label">Your Goals / Specific Questions (Optional)</label>
                    <textarea id="enroll-message" name="message" class="form-control" rows="4" placeholder="Tell us about your learning objectives or what you hope to achieve..."></textarea>
                </div>

                <button type="submit" id="enroll-submit-btn" class="btn btn-primary btn-block btn-large">
                    CONFIRM DEMO ENROLLMENT &rarr;
                </button>
            </form>

            <!-- Success State Banner (Toggled by JS) -->
            <div id="enrollment-success-state" class="form-success-box" style="display: none;">
                <div class="success-icon-wrap">
                    <svg width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <h3 class="success-title">Enrollment Demo Confirmed!</h3>
                <p class="success-desc">
                    Congratulations, <strong id="success-student-name">Student</strong>! You have successfully submitted a demo enrollment for:
                </p>

                <div class="enroll-summary-pill">
                    <span class="course-label">Selected Track:</span>
                    <strong id="success-course-title" class="course-val">Web Development</strong>
                </div>

                <div class="demo-conf-details">
                    <p><strong>Demo Enrollment ID:</strong> <span id="success-demo-id">CC-2026-DEMO</span></p>
                    <p><strong>Simulated Access:</strong> Ready immediately in your browser dashboard.</p>
                </div>

                <div class="success-info-callout" style="margin-top: 20px;">
                    <em>Reminder: This is a frontend demo interface for portfolio demonstration. No financial charges or stored personal data have occurred.</em>
                </div>

                <div class="success-actions-row" style="margin-top: 25px; display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url($courses_url); ?>" class="btn btn-primary">
                        Browse More Courses
                    </a>
                    <button type="button" id="reset-enrollment-btn" class="btn btn-outline">
                        Enroll in Another Track
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
