<?php
/**
 * Template Name: About Page
 *
 * @package CareerConnect
 */

get_header();

$theme_uri    = get_template_directory_uri();
$courses_url  = career_connect_get_page_url('courses');
$guidance_url = career_connect_get_page_url('career-guidance');
$enroll_url   = career_connect_get_page_url('enroll');
?>

<div class="page-header-banner bg-light-cyan">
    <div class="container text-center">
        <span class="page-eyebrow">ABOUT CAREER CONNECT</span>
        <h1 class="page-main-title">Empowering Careers Through Modern Education</h1>
        <p class="page-lead-text">
            Discover our mission, our practical teaching philosophy, and how we empower learners worldwide to transition confidently into high-demand careers.
        </p>
    </div>
</div>

<?php career_connect_breadcrumbs(); ?>

<!-- Mission & Vision Cards -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="mission-vision-grid">
            <div class="mission-card card-shadow">
                <div class="card-icon-circle bg-blue-tint">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#1769F5" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
                </div>
                <h2 class="card-heading">Our Mission</h2>
                <p class="card-text">
                    To democratize access to elite, industry-standard technology education through project-centered, mentor-guided curricula that translate directly into marketable professional competence.
                </p>
            </div>

            <div class="vision-card card-shadow">
                <div class="card-icon-circle bg-pink-tint">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E70D46" stroke-width="2.2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                </div>
                <h2 class="card-heading">Our Vision</h2>
                <p class="card-text">
                    A world where any determined individual, regardless of their prior background, can cultivate high-impact technical proficiencies and unlock boundless career opportunities.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Deep Dive: Our Story & Philosophy -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="about-story-grid">
            <div class="about-story-media">
                <div class="story-image-wrap">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/learning-team.png'); ?>" alt="Students collaborating at Career Connect" class="story-img" loading="lazy">
                </div>
            </div>

            <div class="about-story-text">
                <span class="section-eyebrow">OUR PHILOSOPHY</span>
                <h2 class="section-title">Why Practical Learning Makes All the Difference</h2>
                <p class="section-paragraph">
                    Traditional textbooks and passive tutorial videos often leave learners unprepared when tasked with architecting production software or resolving live operational issues. Career Connect was conceived around a fundamental premise: <strong>active creation precedes true mastery</strong>.
                </p>
                <p class="section-paragraph">
                    Every track in our curriculum is developed backwards from what recruiters, engineering managers, and technical leads expect on Day 1. Learners write real code, run automated tests, construct functional user interfaces, and deploy live applications.
                </p>

                <div class="stats-counter-strip">
                    <div class="stat-box">
                        <span class="stat-num">18K+</span>
                        <span class="stat-desc">Learners Enrolled</span>
                    </div>
                    <div class="stat-box">
                        <span class="stat-num">96%</span>
                        <span class="stat-desc">Completion Rate</span>
                    </div>
                    <div class="stat-box">
                        <span class="stat-num">4.9</span>
                        <span class="stat-desc">Average Rating</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Four Core Pillars -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-eyebrow">OUR STANDARDS</span>
            <h2 class="section-title">The Four Pillars of Career Connect</h2>
            <p class="section-subtitle">What sets our educational ecosystem apart from conventional courses.</p>
        </div>

        <div class="pillars-grid">
            <div class="pillar-card">
                <div class="pillar-number">01</div>
                <h3 class="pillar-title">Curated Modern Stacks</h3>
                <p class="pillar-desc">We teach technologies currently in widespread industry adoption—no obsolete frameworks or discontinued patterns.</p>
            </div>

            <div class="pillar-card">
                <div class="pillar-number">02</div>
                <h3 class="pillar-title">Feedback That Elevates</h3>
                <p class="pillar-desc">Detailed code inspections and project critiques from experienced engineering mentors who know what quality looks like.</p>
            </div>

            <div class="pillar-card">
                <div class="pillar-number">03</div>
                <h3 class="pillar-title">Career Co-Pilot</h3>
                <p class="pillar-desc">Technical resume tailoring, LinkedIn strategy, portfolio audits, and mock interview drills to turn skills into job offers.</p>
            </div>

            <div class="pillar-card">
                <div class="pillar-number">04</div>
                <h3 class="pillar-title">Supportive Community</h3>
                <p class="pillar-desc">A collaborative global peer network where learners pair-program, share insights, and celebrate milestones together.</p>
            </div>
        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="section-padding bg-lavender text-center">
    <div class="container cta-boxed">
        <h2 class="section-title">Ready to Launch Your Career Journey?</h2>
        <p class="section-subtitle" style="max-width: 650px; margin: 0 auto 30px;">
            Explore our curriculum today or take our career quiz to discover the perfect track for your aspirations.
        </p>
        <div class="btn-group-center">
            <a href="<?php echo esc_url($courses_url); ?>" class="btn btn-primary">EXPLORE COURSES</a>
            <a href="<?php echo esc_url($guidance_url); ?>" class="btn btn-secondary">CAREER GUIDANCE</a>
        </div>
    </div>
</section>

<?php
get_footer();
