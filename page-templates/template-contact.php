<?php
/**
 * Template Name: Contact Page
 *
 * @package CareerConnect
 */

get_header();

$faq_url     = career_connect_get_page_url('faq');
$courses_url = career_connect_get_page_url('courses');
?>

<div class="page-header-banner bg-light-cyan">
    <div class="container text-center">
        <span class="page-eyebrow">GET IN TOUCH</span>
        <h1 class="page-main-title">Contact Career Connect</h1>
        <p class="page-lead-text">
            Have questions about our courses, learning tracks, or career guidance? We're here to help you take the next step.
        </p>
    </div>
</div>

<?php career_connect_breadcrumbs(); ?>

<section class="section-padding bg-white" id="contact-section">
    <div class="container">
        <div class="contact-layout-grid">
            <!-- Left Column: Contact Details & Hours -->
            <div class="contact-info-column">
                <span class="section-eyebrow">REACH OUT</span>
                <h2 class="section-title">We'd Love to Hear From You</h2>
                <p class="section-paragraph">
                    Whether you are an aspiring student, a working professional seeking career transition, or an educational partner, our team is ready to assist you.
                </p>

                <div class="contact-cards-list">
                    <div class="contact-detail-card card-shadow">
                        <div class="detail-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1769F5" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div class="detail-info">
                            <strong>Demo Campus Location</strong>
                            <p>100 Learning Way, Innovation District, Tech Hub (Demo Address)</p>
                        </div>
                    </div>

                    <div class="contact-detail-card card-shadow">
                        <div class="detail-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1769F5" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div class="detail-info">
                            <strong>Email Inquiries</strong>
                            <p><a href="mailto:support@careerconnect.local">support@careerconnect.local</a> (Demo)</p>
                        </div>
                    </div>

                    <div class="contact-detail-card card-shadow">
                        <div class="detail-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1769F5" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div class="detail-info">
                            <strong>Advising Phone Line</strong>
                            <p>+1 (800) 555-LEARN (Demo Toll-Free)</p>
                        </div>
                    </div>
                </div>

                <div class="support-hours-card bg-lavender card-shadow">
                    <h4 class="hours-title">Learning Support Availability</h4>
                    <ul class="hours-list">
                        <li><span>Monday &ndash; Friday:</span> <strong>8:00 AM &ndash; 7:00 PM EST</strong></li>
                        <li><span>Saturday &ndash; Sunday:</span> <strong>10:00 AM &ndash; 4:00 PM EST</strong></li>
                    </ul>
                    <p class="faq-link-note">
                        Looking for instant answers? Check our <a href="<?php echo esc_url($faq_url); ?>">Frequently Asked Questions</a>.
                    </p>
                </div>
            </div>

            <!-- Right Column: Interactive Validation Form -->
            <div class="contact-form-column">
                <div class="form-container-card card-shadow">
                    <h3 class="form-title">Send Us a Message</h3>
                    <p class="form-subtext">Fill in the fields below to simulate a student inquiry.</p>

                    <!-- Explicit Demo Notice -->
                    <div class="demo-notice-alert">
                        <span class="notice-badge">DEMO MODE</span>
                        <p class="notice-text">
                            This contact form includes complete client-side validation and a demonstration response. Because this local WordPress theme operates without external mail transport or SMTP credentials, messages are verified locally in your browser and will not transmit real emails.
                        </p>
                    </div>

                    <!-- Contact Form -->
                    <form id="career-contact-form" class="career-form" novalidate>
                        <div class="form-group">
                            <label for="contact-name" class="form-label">Full Name <span class="req">*</span></label>
                            <input type="text" id="contact-name" name="name" class="form-control" placeholder="e.g. Alex Morgan" required>
                            <span class="form-error-msg" id="name-error">Please enter your full name.</span>
                        </div>

                        <div class="form-group">
                            <label for="contact-email" class="form-label">Email Address <span class="req">*</span></label>
                            <input type="email" id="contact-email" name="email" class="form-control" placeholder="e.g. alex@example.com" required>
                            <span class="form-error-msg" id="email-error">Please enter a valid email address.</span>
                        </div>

                        <div class="form-group">
                            <label for="contact-subject" class="form-label">Subject <span class="req">*</span></label>
                            <input type="text" id="contact-subject" name="subject" class="form-control" placeholder="e.g. Question regarding Web Development Track" required>
                            <span class="form-error-msg" id="subject-error">Please provide a message subject.</span>
                        </div>

                        <div class="form-group">
                            <label for="contact-inquiry-type" class="form-label">Inquiry Category</label>
                            <select id="contact-inquiry-type" name="inquiry_type" class="form-control">
                                <option value="courses">Course Curriculum & Details</option>
                                <option value="career">Career Guidance & Roadmaps</option>
                                <option value="enroll">Enrollment & Schedule</option>
                                <option value="mentorship">Mentorship Opportunities</option>
                                <option value="general">General Inquiries</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="contact-message" class="form-label">Message <span class="req">*</span></label>
                            <textarea id="contact-message" name="message" class="form-control" rows="5" placeholder="Write your questions or comments here..." required></textarea>
                            <span class="form-error-msg" id="message-error">Please enter a message of at least 10 characters.</span>
                        </div>

                        <button type="submit" id="contact-submit-btn" class="btn btn-primary btn-block">
                            SEND DEMO MESSAGE &rarr;
                        </button>
                    </form>

                    <!-- Success State Notice (Toggled by JS) -->
                    <div id="contact-success-state" class="form-success-box" style="display: none;">
                        <div class="success-icon-wrap">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <h4 class="success-title">Message Validated Successfully!</h4>
                        <p class="success-desc">
                            Thank you, <strong id="success-user-name">Learner</strong>! Your demo inquiry regarding "<span id="success-user-subject"></span>" was successfully validated in the frontend test suite.
                        </p>
                        <div class="success-info-callout">
                            <em>Reminder: This is a frontend demo environment. No real email was sent or stored.</em>
                        </div>
                        <button type="button" id="reset-contact-btn" class="btn btn-outline" style="margin-top: 15px;">
                            Send Another Demo Message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
