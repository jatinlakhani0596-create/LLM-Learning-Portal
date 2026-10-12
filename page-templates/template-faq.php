<?php
/**
 * Template Name: FAQ Page
 *
 * @package CareerConnect
 */

get_header();

$contact_url  = career_connect_get_page_url('contact');
$courses_url  = career_connect_get_page_url('courses');
$guidance_url = career_connect_get_page_url('career-guidance');
?>

<div class="page-header-banner bg-light-cyan">
    <div class="container text-center">
        <span class="page-eyebrow">COMMON INQUIRIES</span>
        <h1 class="page-main-title">Frequently Asked Questions</h1>
        <p class="page-lead-text">
            Find immediate answers about our curricula, self-paced learning model, certifications, and career advisory services.
        </p>
    </div>
</div>

<?php career_connect_breadcrumbs(); ?>

<section class="section-padding bg-white" id="faq-section">
    <div class="container" style="max-width: 900px;">
        <!-- Category 1: General Platform -->
        <div class="faq-category-block">
            <h2 class="faq-cat-title">General Platform & Learning Experience</h2>
            <div class="accordion-group" id="faq-accordion-general">
                <div class="accordion-item is-active">
                    <button type="button" class="accordion-trigger" aria-expanded="true" id="faq-h1" aria-controls="faq-p1">
                        <span class="acc-title-text">What makes Career Connect different from other learning platforms?</span>
                        <span class="acc-chevron" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div class="accordion-panel" id="faq-p1" role="region" aria-labelledby="faq-h1">
                        <div class="accordion-panel-inner">
                            <p>Career Connect is engineered around <strong>portfolio outcomes rather than passive theory</strong>. Instead of watching lectures without context, learners build end-to-end applications, submit code for review by mentors, and construct ATS-optimized resumes and GitHub portfolios.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <button type="button" class="accordion-trigger" aria-expanded="false" id="faq-h2" aria-controls="faq-p2">
                        <span class="acc-title-text">Are courses self-paced or scheduled with live classes?</span>
                        <span class="acc-chevron" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div class="accordion-panel" id="faq-p2" role="region" aria-labelledby="faq-h2" hidden>
                        <div class="accordion-panel-inner">
                            <p>All core courses are self-paced, allowing you to learn on your schedule around university or work commitments. Optional live office hours and weekend mentor sessions are available for real-time guidance and Q&A.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <button type="button" class="accordion-trigger" aria-expanded="false" id="faq-h3" aria-controls="faq-p3">
                        <span class="acc-title-text">Can absolute beginners enroll without previous coding experience?</span>
                        <span class="acc-chevron" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div class="accordion-panel" id="faq-p3" role="region" aria-labelledby="faq-h3" hidden>
                        <div class="accordion-panel-inner">
                            <p>Yes! Courses such as <em>Modern Web Development</em>, <em>Python Programming Masterclass</em>, and <em>Cybersecurity Fundamentals</em> start with zero assumed technical prerequisites. We scaffold fundamental concepts step-by-step.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category 2: Courses & Certifications -->
        <div class="faq-category-block" style="margin-top: 45px;">
            <h2 class="faq-cat-title">Courses, Projects & Certificates</h2>
            <div class="accordion-group" id="faq-accordion-courses">
                <div class="accordion-item">
                    <button type="button" class="accordion-trigger" aria-expanded="false" id="faq-h4" aria-controls="faq-p4">
                        <span class="acc-title-text">Do I receive a certificate upon finishing a course?</span>
                        <span class="acc-chevron" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div class="accordion-panel" id="faq-p4" role="region" aria-labelledby="faq-h4" hidden>
                        <div class="accordion-panel-inner">
                            <p>Yes. Upon satisfactory completion of all curriculum modules and submission of the capstone project, students are issued a verified digital Certificate of Completion with a unique verification link suitable for LinkedIn and resumes.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <button type="button" class="accordion-trigger" aria-expanded="false" id="faq-h5" aria-controls="faq-p5">
                        <span class="acc-title-text">What kind of capstone projects will I build?</span>
                        <span class="acc-chevron" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div class="accordion-panel" id="faq-p5" role="region" aria-labelledby="faq-h5" hidden>
                        <div class="accordion-panel-inner">
                            <p>You build production-style artifacts: responsive web applications connected to live APIs, automated data scrapers, machine learning classification services, or network vulnerability audit reports. These are fully open-sourceable to showcase to prospective employers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category 3: Career Guidance & Support -->
        <div class="faq-category-block" style="margin-top: 45px;">
            <h2 class="faq-cat-title">Career Guidance & Placement Support</h2>
            <div class="accordion-group" id="faq-accordion-career">
                <div class="accordion-item">
                    <button type="button" class="accordion-trigger" aria-expanded="false" id="faq-h6" aria-controls="faq-p6">
                        <span class="acc-title-text">How does the Career Guidance service assist job seekers?</span>
                        <span class="acc-chevron" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div class="accordion-panel" id="faq-p6" role="region" aria-labelledby="faq-h6" hidden>
                        <div class="accordion-panel-inner">
                            <p>Our Career Guidance track provides resume auditing tailored to ATS algorithms, LinkedIn profile optimization, behavioral interview preparation with the STAR method, and strategic guidance for technical screenings.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <button type="button" class="accordion-trigger" aria-expanded="false" id="faq-h7" aria-controls="faq-p7">
                        <span class="acc-title-text">How does the 2-Minute Career Assessment work?</span>
                        <span class="acc-chevron" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div class="accordion-panel" id="faq-p7" role="region" aria-labelledby="faq-h7" hidden>
                        <div class="accordion-panel-inner">
                            <p>Our interactive frontend assessment evaluates your answers regarding problem-solving preferences, timeline, and current background, weighting recommendations toward Frontend, Python, AI, Data Science, or Security.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Help Callout -->
        <div class="faq-callout-card bg-light-cyan card-shadow text-center" style="margin-top: 50px; padding: 40px; border-radius: 12px;">
            <h3 style="margin-top: 0; color: #202124;">Still Have Questions?</h3>
            <p style="color: #555; max-width: 600px; margin: 10px auto 25px;">
                Our friendly advising staff is happy to walk you through curriculum tracks, prerequisites, or enrollment details.
            </p>
            <div class="btn-group-center">
                <a href="<?php echo esc_url($contact_url); ?>" class="btn btn-primary">CONTACT ADVISING</a>
                <a href="<?php echo esc_url($guidance_url); ?>" class="btn btn-outline">VIEW CAREER ROADMAP</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
