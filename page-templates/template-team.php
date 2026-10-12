<?php
/**
 * Template Name: Team Page
 *
 * @package CareerConnect
 */

get_header();

$theme_uri    = get_template_directory_uri();
$contact_url  = career_connect_get_page_url('contact');
$courses_url  = career_connect_get_page_url('courses');
?>

<div class="page-header-banner bg-light-cyan">
    <div class="container text-center">
        <span class="page-eyebrow">WORLD-CLASS EDUCATORS</span>
        <h1 class="page-main-title">Meet Our Mentors & Faculty</h1>
        <p class="page-lead-text">
            Learn directly from seasoned practitioners, engineers, and career coaches dedicated to helping you achieve tangible career growth.
        </p>
    </div>
</div>

<?php career_connect_breadcrumbs(); ?>

<!-- Core Faculty Grid -->
<section class="section-padding bg-white" id="faculty-grid">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-eyebrow">LEAD INSTRUCTORS</span>
            <h2 class="section-title">Program Directors & Mentors</h2>
            <p class="section-subtitle">
                Fictional demo profiles highlighting our multidisciplinary educational team.
            </p>
        </div>

        <div class="team-grid">
            <!-- Member 1: Jatin Lakhani - Leader / Head -->
            <div class="team-card card-shadow">
                <div class="team-img-wrapper">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/team/team-1.png'); ?>" alt="Jatin Lakhani" class="team-avatar" loading="lazy">
                </div>
                <div class="team-info">
                    <h3 class="team-name">Jatin Lakhani</h3>
                    <span class="team-role team-role-head">Leader / Head</span>
                    <p class="team-bio">
                        Founder and Head Director of Career Connect. Architecting educational curriculum tracks, mentor standards, and technical direction based in Bhavnagar, Gujarat.
                    </p>
                    <div class="team-contact-meta" style="margin-top: 12px; font-size: 13.5px; line-height: 1.6; color: #374151;">
                        <p style="margin: 0;">📍 <strong>Location:</strong> Bhavnagar, Gujarat</p>
                        <p style="margin: 0;">✉ <strong>Email:</strong> <a href="mailto:jatinlakhani0596@gmail.com">jatinlakhani0596@gmail.com</a></p>
                        <p style="margin: 0;">📞 <strong>Phone:</strong> <a href="tel:+919328688819">+91 9328688819</a></p>
                    </div>
                    <div class="team-skills-tags" style="margin-top: 14px;">
                        <span class="skill-tag">Founder & Head</span>
                        <span class="skill-tag">Team Lead</span>
                        <span class="skill-tag">Web Systems</span>
                    </div>
                </div>
            </div>

            <!-- Member 2: Neel Dube - Assistant -->
            <div class="team-card card-shadow">
                <div class="team-img-wrapper">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/team/team-2.png'); ?>" alt="Neel Dube" class="team-avatar" loading="lazy">
                </div>
                <div class="team-info">
                    <h3 class="team-name">Neel Dube</h3>
                    <span class="team-role">Assistant</span>
                    <p class="team-bio">
                        Technical Assistant supporting learners across core web development fundamentals, practical coding labs, and code inspection reviews.
                    </p>
                    <div class="team-skills-tags" style="margin-top: 14px;">
                        <span class="skill-tag">Assistant</span>
                        <span class="skill-tag">Web Development</span>
                        <span class="skill-tag">Code Review</span>
                    </div>
                </div>
            </div>

            <!-- Member 3: Dev Achhada - Assistant -->
            <div class="team-card card-shadow">
                <div class="team-img-wrapper">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/team/team-3.png'); ?>" alt="Dev Achhada" class="team-avatar" loading="lazy">
                </div>
                <div class="team-info">
                    <h3 class="team-name">Dev Achhada</h3>
                    <span class="team-role">Assistant</span>
                    <p class="team-bio">
                        Curriculum Assistant conducting interactive hands-on coding labs, logic troubleshooting sessions, and student capstone evaluations.
                    </p>
                    <div class="team-skills-tags" style="margin-top: 14px;">
                        <span class="skill-tag">Assistant</span>
                        <span class="skill-tag">Curriculum Labs</span>
                        <span class="skill-tag">Algorithms</span>
                    </div>
                </div>
            </div>

            <!-- Member 4: Rahul Manglani - Assistant -->
            <div class="team-card card-shadow">
                <div class="team-img-wrapper">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/team/team-4.png'); ?>" alt="Rahul Manglani" class="team-avatar" loading="lazy">
                </div>
                <div class="team-info">
                    <h3 class="team-name">Rahul Manglani</h3>
                    <span class="team-role">Assistant</span>
                    <p class="team-bio">
                        Operations Assistant overseeing student onboarding, doubt-solving sessions, schedule management, and career readiness tracking.
                    </p>
                    <div class="team-skills-tags" style="margin-top: 14px;">
                        <span class="skill-tag">Assistant</span>
                        <span class="skill-tag">Student Support</span>
                        <span class="skill-tag">Operations</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Teaching Philosophy Callout -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="mentor-pledge-card bg-lavender card-shadow">
            <div class="mentor-pledge-text text-center" style="max-width: 780px; margin: 0 auto;">
                <span class="section-eyebrow">OUR COMMITMENT</span>
                <h2 class="section-title">The Career Connect Mentorship Pledge</h2>
                <p class="section-paragraph">
                    Every mentor at Career Connect commits to timely, constructive feedback on student code capstones. We believe supportive guidance accelerates learning velocity and instills lasting engineering confidence.
                </p>
                <div class="btn-group-center" style="margin-top: 25px;">
                    <a href="<?php echo esc_url($courses_url); ?>" class="btn btn-primary">EXPLORE COURSES WITH OUR TEAM</a>
                    <a href="<?php echo esc_url($contact_url); ?>" class="btn btn-outline">CONTACT THE FACULTY</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
