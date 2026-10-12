<?php
/**
 * Footer template for Career Connect Theme
 *
 * @package CareerConnect
 */
?>
</main><!-- #primary -->

<footer id="colophon" class="site-footer">
    <div class="footer-top">
        <div class="container footer-grid">
            <!-- Col 1: Brand & About -->
            <div class="footer-col footer-col-brand">
                <div class="footer-branding">
                    <?php career_connect_render_logo(); ?>
                </div>
                <p class="footer-description">
                    Empowering students and modern professionals with industry-grade skills, practical hands-on curriculum, and dedicated career guidance to achieve lifelong career goals.
                </p>
                <div class="footer-social-links">
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="LinkedIn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 8.76a1.65 1.65 0 0 0 1.66-1.66 1.66 1.66 0 0 0-3.32 0 1.65 1.65 0 0 0 1.66 1.66m1.39 9.74v-8.37H5.07v8.37h2.78z"/></svg>
                    </a>
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="GitHub">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2z"/></svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Twitter / X">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="YouTube">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Col 2: Useful Exploration Links -->
            <div class="footer-col">
                <h4 class="footer-heading">EXPLORE</h4>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home Overview</a></li>
                    <li><a href="<?php echo esc_url(career_connect_get_page_url('about')); ?>">About Career Connect</a></li>
                    <li><a href="<?php echo esc_url(career_connect_get_page_url('courses')); ?>">Explore All Courses</a></li>
                    <li><a href="<?php echo esc_url(career_connect_get_page_url('career-guidance')); ?>">Career Guidance Roadmap</a></li>
                    <li><a href="<?php echo esc_url(career_connect_get_page_url('team')); ?>">Faculty & Mentors</a></li>
                </ul>
            </div>

            <!-- Col 3: Programs & Support -->
            <div class="footer-col">
                <h4 class="footer-heading">RESOURCES</h4>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url(career_connect_get_page_url('blog')); ?>">Career Insights & Blog</a></li>
                    <li><a href="<?php echo esc_url(career_connect_get_page_url('faq')); ?>">Frequently Asked Questions</a></li>
                    <li><a href="<?php echo esc_url(career_connect_get_page_url('enroll')); ?>">Enrollment Interest Form</a></li>
                    <li><a href="<?php echo esc_url(career_connect_get_page_url('contact')); ?>">Get in Touch</a></li>
                    <li><a href="<?php echo esc_url(career_connect_get_course_url('web-development')); ?>">Web Development Track</a></li>
                </ul>
            </div>

            <!-- Col 4: Contact & Learning Hours -->
            <div class="footer-col">
                <h4 class="footer-heading">CONTACT & SUPPORT</h4>
                <div class="footer-contact-info">
                    <p class="contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span>Bhavnagar, Gujarat</span>
                    </p>
                    <p class="contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <a href="mailto:jatinlakhani0596@gmail.com">jatinlakhani0596@gmail.com</a>
                    </p>
                    <p class="contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <a href="tel:+919328688819">+91 9328688819</a>
                    </p>
                    <div class="footer-hours-box">
                        <p class="hours-title">Learning Support Hours:</p>
                        <p class="hours-text">Mon – Fri: 8:00 AM – 7:00 PM</p>
                        <p class="hours-text">Sat – Sun: 10:00 AM – 4:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <p class="copyright-text">
                &copy; <?php echo esc_html(date('Y')); ?> Career Connect. All rights reserved. Built with native WordPress architecture.
            </p>
            <div class="footer-bottom-links">
                <a href="<?php echo esc_url(career_connect_get_page_url('faq')); ?>">Privacy & Terms Demo</a>
                <span class="sep">&bull;</span>
                <a href="<?php echo esc_url(career_connect_get_page_url('contact')); ?>">Help Center</a>
            </div>
        </div>
    </div>
</footer>

<!-- Back to top button -->
<button id="back-to-top" class="back-to-top" aria-label="<?php esc_attr_e('Back to top', 'career-connect'); ?>">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="18 15 12 9 6 15"></polyline>
    </svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
