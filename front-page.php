<?php
/**
 * Front Page Template for Career Connect Theme
 * Restored original layout with graduation cap branding and user's dedicated team
 *
 * @package CareerConnect
 */

get_header();

$theme_uri     = get_template_directory_uri();
$courses       = career_connect_get_courses();
$courses_url   = career_connect_get_page_url('courses');
$guidance_url  = career_connect_get_page_url('career-guidance');
$about_url     = career_connect_get_page_url('about');
$team_url      = career_connect_get_page_url('team');
$blog_url      = career_connect_get_page_url('blog');
$enroll_url    = career_connect_get_page_url('enroll');
?>

<!-- 1. HERO SECTION -->
<section class="hero-section" id="hero-section">
    <div class="container hero-container">
        <div class="hero-grid">
            <div class="hero-content">
                <span class="hero-eyebrow">THE FUTURE OF LEARNING STARTS HERE</span>
                <h1 class="hero-heading">
                    Build Your <span class="highlight-pink">Skills</span> to Achieve Your Career Goals
                </h1>
                <p class="hero-description">
                    Discover practical courses, improve your skills, explore career opportunities, and prepare yourself for a successful future with Career Connect.
                </p>
                <div class="hero-cta-group">
                    <a href="<?php echo esc_url($courses_url); ?>" class="btn btn-primary btn-hero-primary">
                        EXPLORE ALL COURSES
                    </a>
                    <a href="<?php echo esc_url($guidance_url); ?>" class="btn btn-secondary btn-hero-secondary">
                        GET CAREER GUIDANCE
                    </a>
                </div>

                <div class="hero-stats-row">
                    <div class="hero-stat-item">
                        <span class="stat-number">6+</span>
                        <span class="stat-label">Core Tech Domains</span>
                    </div>
                    <div class="hero-stat-sep" aria-hidden="true"></div>
                    <div class="hero-stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Practical Curriculum</span>
                    </div>
                    <div class="hero-stat-sep" aria-hidden="true"></div>
                    <div class="hero-stat-item">
                        <span class="stat-number">4.9/5</span>
                        <span class="stat-label">Learner Satisfaction</span>
                    </div>
                </div>
            </div>

            <div class="hero-media">
                <div class="hero-image-wrapper">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/hero-student.png'); ?>" 
                         alt="Young graduate preparing for career success" 
                         class="hero-main-img" 
                         loading="eager"
                         width="600" 
                         height="450">
                    
                    <div class="hero-floating-card card-top-right">
                        <div class="card-icon-badge">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div class="card-text-block">
                            <span class="card-bold">Job-Ready Portfolio</span>
                            <span class="card-sub">Practical Capstones</span>
                        </div>
                    </div>

                    <div class="hero-floating-card card-bottom-left">
                        <div class="card-avatar-group">
                            <span class="star-rating">★★★★★</span>
                            <span class="card-bold">18,000+ Students</span>
                        </div>
                        <span class="card-sub">Achieving Career Milestones</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. ABOUT PREVIEW SECTION -->
<section class="about-preview-section section-padding bg-white" id="about-preview">
    <div class="container">
        <div class="about-preview-grid">
            <div class="about-preview-images">
                <div class="image-stack-wrapper">
                    <div class="image-frame-primary">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/learning-team.png'); ?>" 
                             alt="Students collaborating on modern learning platform" 
                             class="stack-img-main"
                             loading="lazy">
                    </div>
                    <div class="experience-badge-card">
                        <span class="exp-number">100%</span>
                        <span class="exp-text">Industry-Aligned Projects</span>
                    </div>
                </div>
            </div>

            <div class="about-preview-content">
                <span class="section-eyebrow">EXPERIENCE EXCELLENCE</span>
                <h2 class="section-title">
                    Experience a Learning Platform That Takes You to the Next Level
                </h2>
                <p class="section-paragraph">
                    Career Connect is designed specifically to bridge the divide between theoretical knowledge and real-world career expectations. Our structured curriculum emphasizes hands-on software development, analytical workflows, and direct mentorship.
                </p>

                <ul class="feature-checklist">
                    <li class="checklist-item">
                        <span class="check-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <div class="checklist-text">
                            <strong>Learn Anytime, Anywhere</strong>
                            <span>Self-paced modern digital modules accessible across desktop, tablet, and mobile devices.</span>
                        </div>
                    </li>
                    <li class="checklist-item">
                        <span class="check-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <div class="checklist-text">
                            <strong>Career-Focused Learning</strong>
                            <span>Curated tracks centered around the highest-demand technical competencies and recruiter checklists.</span>
                        </div>
                    </li>
                    <li class="checklist-item">
                        <span class="check-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <div class="checklist-text">
                            <strong>Practical Skill Development</strong>
                            <span>Hands-on portfolio assignments evaluated with industry code reviews and practical benchmarks.</span>
                        </div>
                    </li>
                    <li class="checklist-item">
                        <span class="check-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <div class="checklist-text">
                            <strong>Student-Friendly Resources</strong>
                            <span>Comprehensive cheatsheets, roadmap diagrams, interview guides, and responsive mentor assistance.</span>
                        </div>
                    </li>
                </ul>

                <div class="about-cta-wrapper" style="margin-top: 30px;">
                    <a href="<?php echo esc_url($about_url); ?>" class="btn btn-primary">
                        KNOW MORE
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. POPULAR COURSES SECTION -->
<section class="courses-preview-section section-padding bg-light" id="popular-courses">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-eyebrow">EXPLORE OUR TRACKS</span>
            <h2 class="section-title">Popular Courses</h2>
            <p class="section-subtitle">
                Comprehensive, practical programs designed to transition aspiring learners into industry-ready practitioners.
            </p>
        </div>

        <div class="courses-grid">
            <?php foreach ($courses as $slug => $c) : 
                $course_link = career_connect_get_course_url($slug);
            ?>
                <article class="course-card">
                    <div class="course-thumbnail-wrapper">
                        <a href="<?php echo esc_url($course_link); ?>" tabindex="-1" aria-hidden="true">
                            <img src="<?php echo esc_url($c['thumbnail']); ?>" 
                                 alt="<?php echo esc_attr($c['title']); ?>" 
                                 class="course-card-img"
                                 loading="lazy">
                        </a>
                        <span class="course-category-badge"><?php echo esc_html($c['category']); ?></span>
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

                        <div class="course-card-footer">
                            <div class="course-rating">
                                <span class="stars">★★★★★</span>
                                <span class="rating-val"><?php echo esc_html($c['rating']); ?></span>
                            </div>
                            <a href="<?php echo esc_url($course_link); ?>" class="btn-view-course">
                                View Course &rarr;
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="section-footer-cta text-center">
            <a href="<?php echo esc_url($courses_url); ?>" class="btn btn-outline">
                VIEW ALL COURSES
            </a>
        </div>
    </div>
</section>

<!-- 4. WHY CHOOSE CAREER CONNECT -->
<section class="why-choose-section section-padding bg-white" id="why-choose">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-eyebrow">YOUR ADVANTAGE</span>
            <h2 class="section-title">Why Choose Career Connect</h2>
            <p class="section-subtitle">
                Everything you need to master competitive technical skills and build an unforgettable career profile.
            </p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <h3 class="feature-title">Industry-Relevant Skills</h3>
                <p class="feature-text">Curricula engineered alongside real technology stacks to guarantee skills employers actively seek right now.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3 class="feature-title">Expert-Led Learning</h3>
                <p class="feature-text">Learn directly from vetted senior engineers, data architects, and educators dedicated to student growth.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                </div>
                <h3 class="feature-title">Practical Projects</h3>
                <p class="feature-text">Graduate with a public GitHub portfolio of production-standard capstones rather than just multiple-choice quiz grades.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                </div>
                <h3 class="feature-title">Career Guidance</h3>
                <p class="feature-text">Comprehensive roadmaps, resume audits, portfolio reviews, and personalized coaching from industry recruiters.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3 class="feature-title">Flexible Learning</h3>
                <p class="feature-text">Study on your own schedule with lifetime access to lessons, bite-sized modules, and accessible project guides.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <h3 class="feature-title">Interview Preparation</h3>
                <p class="feature-text">Conquer technical screens and behavioral rounds with the STAR method, mock sessions, and compensation playbooks.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. HOW IT WORKS -->
<section class="how-it-works-section section-padding bg-light" id="how-it-works">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-eyebrow">STEP-BY-STEP PATHWAY</span>
            <h2 class="section-title">How It Works</h2>
            <p class="section-subtitle">
                A streamlined three-step learning methodology designed to guide you from aspiration to career achievement.
            </p>
        </div>

        <div class="steps-container">
            <div class="steps-row">
                <!-- Step 1 -->
                <div class="step-card">
                    <div class="step-badge">01</div>
                    <div class="step-icon-wrap">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </div>
                    <h3 class="step-title">Explore Courses</h3>
                    <p class="step-description">
                        Browse our curated curriculum across Web Development, Python, AI, Cybersecurity, Data Science, and Career Skills.
                    </p>
                </div>

                <div class="step-connector" aria-hidden="true"></div>

                <!-- Step 2 -->
                <div class="step-card">
                    <div class="step-badge">02</div>
                    <div class="step-icon-wrap">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                    </div>
                    <h3 class="step-title">Build Your Skills</h3>
                    <p class="step-description">
                        Immerse yourself in interactive labs, guided assignments, and real-world capstone projects reviewed by mentors.
                    </p>
                </div>

                <div class="step-connector" aria-hidden="true"></div>

                <!-- Step 3 -->
                <div class="step-card">
                    <div class="step-badge">03</div>
                    <div class="step-icon-wrap">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <h3 class="step-title">Achieve Your Goals</h3>
                    <p class="step-description">
                        Refine your portfolio, ace technical interviews with confidence, and step proudly into your next professional milestone.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. TEAM PREVIEW SECTION -->
<section class="team-preview-section section-padding bg-white" id="team-preview">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-eyebrow">WORLD-CLASS EDUCATORS</span>
            <h2 class="section-title">Meet Our Dedicated Team</h2>
            <p class="section-subtitle">
                Experienced practitioners and mentors guiding students from foundational concepts to lifelong career success.
            </p>
        </div>

        <div class="team-grid">
            <!-- Jatin Lakhani - Leader / Head -->
            <div class="team-card card-shadow">
                <div class="team-img-wrapper">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/team/team-1.png'); ?>" alt="Jatin Lakhani" class="team-avatar" loading="lazy">
                </div>
                <div class="team-info">
                    <h3 class="team-name">Jatin Lakhani</h3>
                    <span class="team-role team-role-head">Leader / Head</span>
                    <p class="team-bio">Founder & Head Director of Career Connect. Leading educational curriculum, technical direction, and mentor leadership based in Bhavnagar, Gujarat.</p>
                </div>
            </div>

            <!-- Neel Dube - Assistant -->
            <div class="team-card card-shadow">
                <div class="team-img-wrapper">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/team/team-2.png'); ?>" alt="Neel Dube" class="team-avatar" loading="lazy">
                </div>
                <div class="team-info">
                    <h3 class="team-name">Neel Dube</h3>
                    <span class="team-role">Assistant</span>
                    <p class="team-bio">Technical Assistant supporting students with web engineering fundamentals, practical programming assignments, and code reviews.</p>
                </div>
            </div>

            <!-- Dev Achhada - Assistant -->
            <div class="team-card card-shadow">
                <div class="team-img-wrapper">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/team/team-3.png'); ?>" alt="Dev Achhada" class="team-avatar" loading="lazy">
                </div>
                <div class="team-info">
                    <h3 class="team-name">Dev Achhada</h3>
                    <span class="team-role">Assistant</span>
                    <p class="team-bio">Curriculum Assistant conducting hands-on coding labs, algorithm exercises, and student project evaluations.</p>
                </div>
            </div>

            <!-- Rahul Manglani - Assistant -->
            <div class="team-card card-shadow">
                <div class="team-img-wrapper">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/team/team-4.png'); ?>" alt="Rahul Manglani" class="team-avatar" loading="lazy">
                </div>
                <div class="team-info">
                    <h3 class="team-name">Rahul Manglani</h3>
                    <span class="team-role">Assistant</span>
                    <p class="team-bio">Operations Assistant supporting learner onboarding, doubt-solving sessions, and student career progress tracking.</p>
                </div>
            </div>
        </div>

        <div class="section-footer-cta text-center" style="margin-top: 36px;">
            <a href="<?php echo esc_url($team_url); ?>" class="btn btn-outline">
                MEET THE FULL TEAM
            </a>
        </div>
    </div>
</section>

<!-- 7. TESTIMONIALS SECTION -->
<section class="testimonials-section section-padding bg-lavender" id="testimonials">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-eyebrow">SUCCESS STORIES</span>
            <h2 class="section-title">What Our Learners Say</h2>
            <p class="section-subtitle">
                Demonstrated success stories from students who enhanced their capabilities and achieved their career goals.
            </p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonials-media">
                <div class="collage-wrapper">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/student-testimonials/testimonial-collage.png'); ?>" 
                         alt="Career Connect happy graduates and students collage" 
                         class="collage-img"
                         loading="lazy">
                </div>
            </div>

            <div class="testimonials-content">
                <div class="testimonial-card-quote">
                    <div class="quote-stars">★★★★★</div>
                    <blockquote class="quote-text">
                        "The Web Development and Career Readiness tracks at Career Connect completely transformed my preparation. The curriculum was 100% practical, and the mentor feedback gave me the confidence to ace technical interviews at modern tech firms."
                    </blockquote>
                    <div class="quote-author">
                        <strong class="author-name">Sarah Jenkins</strong>
                        <span class="author-role">Junior Frontend Engineer (Sample Graduate Profile)</span>
                    </div>
                </div>

                <div class="testimonial-card-quote quote-secondary">
                    <div class="quote-stars">★★★★★</div>
                    <blockquote class="quote-text">
                        "Transitioning into Data Science felt daunting until I enrolled here. The step-by-step project approach gave me a real portfolio to show hiring managers. Best learning decision I have made!"
                    </blockquote>
                    <div class="quote-author">
                        <strong class="author-name">Liam Chen</strong>
                        <span class="author-role">Data Analyst Intern (Sample Graduate Profile)</span>
                    </div>
                </div>

                <p class="demo-disclaimer-note">
                    <small><em>Note: Demo learner testimonials presented for illustrative platform demonstration.</em></small>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 8. PROMOTIONAL CTA BANNER -->
<section class="promo-banner-section section-padding" id="promo-banner">
    <div class="container">
        <div class="promo-banner-box">
            <div class="promo-content">
                <h2 class="promo-title">Start Your Journey. Build Your Future.</h2>
                <p class="promo-description">
                    Take the next step towards your personal and professional goals with Career Connect.
                </p>
                <div class="promo-btn-wrap">
                    <a href="<?php echo esc_url($courses_url); ?>" class="btn btn-promo">
                        EXPLORE PROGRAMS
                    </a>
                </div>
            </div>
            <div class="promo-avatar-wrap">
                <div class="promo-circle-frame">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/promo-student.png'); ?>" 
                         alt="Smiling Career Connect graduate" 
                         class="promo-avatar-img"
                         loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. BLOG PREVIEW SECTION -->
<section class="blog-preview-section section-padding bg-white" id="blog-preview">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-eyebrow">LATEST ARTICLES & INSIGHTS</span>
            <h2 class="section-title">From Our Education Blog</h2>
            <p class="section-subtitle">
                Guidance, career advice, and technical deep-dives authored by our faculty and mentors.
            </p>
        </div>

        <div class="blog-grid">
            <?php
            $recent_posts = new WP_Query(array(
                'posts_per_page'      => 3,
                'post_status'         => 'publish',
                'ignore_sticky_posts' => true,
            ));

            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post();
                    $thumbnail_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium_large') : $theme_uri . '/assets/images/course-thumbnails/web-dev.png';
            ?>
                    <article class="blog-card">
                        <div class="blog-card-thumb">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" class="blog-card-img" loading="lazy">
                            </a>
                            <span class="blog-date-badge"><?php echo esc_html(get_the_date('M j, Y')); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h3 class="blog-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="blog-card-excerpt">
                                <?php echo esc_html(wp_trim_words(get_the_excerpt(), 18)); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="blog-read-more">
                                Read More &rarr;
                            </a>
                        </div>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Graceful fallback articles if database has no posts yet
                $demo_articles = array(
                    array(
                        'title'   => 'How to Start a Career in Web Development',
                        'date'    => 'Oct 10, 2026',
                        'thumb'   => $theme_uri . '/assets/images/course-thumbnails/web-dev.png',
                        'excerpt' => 'Discover the essential roadmap to launch a successful career in web development, from foundational HTML & CSS to modern JavaScript frameworks.',
                        'link'    => $blog_url,
                    ),
                    array(
                        'title'   => 'Essential Skills for the AI Era',
                        'date'    => 'Oct 08, 2026',
                        'thumb'   => $theme_uri . '/assets/images/course-thumbnails/ai-ml.png',
                        'excerpt' => 'Explore the key technical and cognitive proficiencies you need to thrive alongside artificial intelligence and machine learning technologies.',
                        'link'    => $blog_url,
                    ),
                    array(
                        'title'   => 'Tips to Prepare for Your First Interview',
                        'date'    => 'Oct 05, 2026',
                        'thumb'   => $theme_uri . '/assets/images/course-thumbnails/career-prep.png',
                        'excerpt' => 'Master behavioral interviews, technical screening rounds, and offer negotiation with practical, actionable preparation techniques.',
                        'link'    => $blog_url,
                    ),
                );

                foreach ($demo_articles as $article) :
            ?>
                    <article class="blog-card">
                        <div class="blog-card-thumb">
                            <a href="<?php echo esc_url($article['link']); ?>">
                                <img src="<?php echo esc_url($article['thumb']); ?>" alt="<?php echo esc_attr($article['title']); ?>" class="blog-card-img" loading="lazy">
                            </a>
                            <span class="blog-date-badge"><?php echo esc_html($article['date']); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h3 class="blog-card-title">
                                <a href="<?php echo esc_url($article['link']); ?>"><?php echo esc_html($article['title']); ?></a>
                            </h3>
                            <p class="blog-card-excerpt">
                                <?php echo esc_html($article['excerpt']); ?>
                            </p>
                            <a href="<?php echo esc_url($article['link']); ?>" class="blog-read-more">
                                Read More &rarr;
                            </a>
                        </div>
                    </article>
            <?php
                endforeach;
            endif;
            ?>
        </div>

        <div class="section-footer-cta text-center" style="margin-top: 36px;">
            <a href="<?php echo esc_url($blog_url); ?>" class="btn btn-outline">
                VIEW ALL ARTICLES
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
