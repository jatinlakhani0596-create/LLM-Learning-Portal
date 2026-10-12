<?php
/**
 * Theme Setup & Automatic Page Generator for Career Connect Theme
 *
 * @package CareerConnect
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get internal URL for a page by slug, with sensible fallback.
 *
 * @param string $slug
 * @param string $fallback
 * @return string
 */
function career_connect_get_page_url($slug, $fallback = '') {
    $aliases = array(
        'about'   => array('about', 'about-us'),
        'contact' => array('contact', 'contact-us'),
        'team'    => array('team', 'our-team', 'mentors'),
        'courses' => array('courses', 'all-courses', 'programs'),
        'course-detail' => array('course-detail', 'course'),
        'career-guidance' => array('career-guidance', 'career-roadmap', 'guidance'),
        'faq'     => array('faq', 'frequently-asked-questions'),
        'enroll'  => array('enroll', 'enroll-now', 'join'),
        'home'    => array('home', 'front-page'),
        'blog'    => array('blog', 'articles', 'insights'),
    );

    $check_slugs = isset($aliases[$slug]) ? $aliases[$slug] : array($slug);
    foreach ($check_slugs as $s) {
        $page = get_page_by_path($s);
        if ($page) {
            return get_permalink($page->ID);
        }
    }

    if (!empty($fallback)) {
        return $fallback;
    }
    return home_url('/' . ltrim($slug, '/') . '/');
}

/**
 * Get URL for an individual course detail page.
 *
 * @param string $course_id
 * @return string
 */
function career_connect_get_course_url($course_id) {
    $detail_slugs = array('course-detail', 'course');
    foreach ($detail_slugs as $ds) {
        $detail_page = get_page_by_path($ds);
        if ($detail_page) {
            return add_query_arg('course', $course_id, get_permalink($detail_page->ID));
        }
    }
    $courses_page = get_page_by_path('courses');
    if ($courses_page) {
        return add_query_arg('course', $course_id, get_permalink($courses_page->ID));
    }
    return home_url('/course-detail/?course=' . urlencode($course_id));
}

/**
 * Safely create all default pages and assign templates upon theme switch.
 *
 * @param bool $force Force execution even without manage_options capability
 */
function career_connect_setup_default_pages($force = false) {
    // Check permission unless forced or running on switch hook
    if (!$force && !current_user_can('manage_options') && !doing_action('after_switch_theme')) {
        return;
    }

    $pages_to_create = array(
        'home' => array(
            'title'    => 'Home',
            'template' => 'front-page.php',
            'content'  => '<!-- Front page template handles layout -->'
        ),
        'about' => array(
            'title'    => 'About Us',
            'template' => 'page-templates/template-about.php',
            'content'  => '<!-- About template handles layout -->'
        ),
        'courses' => array(
            'title'    => 'Courses',
            'template' => 'page-templates/template-courses.php',
            'content'  => '<!-- Courses template handles layout -->'
        ),
        'course-detail' => array(
            'title'    => 'Course Detail',
            'template' => 'page-templates/template-course-detail.php',
            'content'  => '<!-- Course Detail template handles layout -->'
        ),
        'career-guidance' => array(
            'title'    => 'Career Guidance',
            'template' => 'page-templates/template-career-guidance.php',
            'content'  => '<!-- Career Guidance template handles layout -->'
        ),
        'team' => array(
            'title'    => 'Our Team',
            'template' => 'page-templates/template-team.php',
            'content'  => '<!-- Team template handles layout -->'
        ),
        'blog' => array(
            'title'    => 'Blog',
            'template' => '',
            'content'  => ''
        ),
        'contact' => array(
            'title'    => 'Contact Us',
            'template' => 'page-templates/template-contact.php',
            'content'  => '<!-- Contact template handles layout -->'
        ),
        'faq' => array(
            'title'    => 'FAQ',
            'template' => 'page-templates/template-faq.php',
            'content'  => '<!-- FAQ template handles layout -->'
        ),
        'enroll' => array(
            'title'    => 'Enroll Now',
            'template' => 'page-templates/template-enroll.php',
            'content'  => '<!-- Enroll template handles layout -->'
        ),
    );

    $created_page_ids = array();

    foreach ($pages_to_create as $slug => $data) {
        $existing_page = get_page_by_path($slug);

        if (!$existing_page) {
            $page_id = wp_insert_post(array(
                'post_title'   => $data['title'],
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => $data['content'],
            ));

            if ($page_id && !is_wp_error($page_id)) {
                $created_page_ids[$slug] = $page_id;
                if (!empty($data['template'])) {
                    update_post_meta($page_id, '_wp_page_template', $data['template']);
                }
            }
        } else {
            $created_page_ids[$slug] = $existing_page->ID;
            if (!empty($data['template'])) {
                update_post_meta($existing_page->ID, '_wp_page_template', $data['template']);
            }
        }
    }

    // Configure Reading Settings: Static Front Page
    if (!empty($created_page_ids['home'])) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $created_page_ids['home']);
    }
    if (!empty($created_page_ids['blog'])) {
        update_option('page_for_posts', $created_page_ids['blog']);
    }

    // Create Sample Posts if none exist
    career_connect_create_sample_posts();

    // Create and assign Primary Navigation Menu
    career_connect_setup_primary_menu($created_page_ids);

    // Set flag so this is not run repeatedly
    update_option('career_connect_setup_completed', 1);
}
add_action('after_switch_theme', 'career_connect_setup_default_pages');

/**
 * Create sample blog posts if no posts exist.
 */
function career_connect_create_sample_posts() {
    $existing = get_posts(array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 1,
    ));

    // If there is already user content or more than default, don't overwrite
    if (!empty($existing) && count($existing) > 1) {
        return;
    }

    $sample_posts = array(
        array(
            'title'   => 'How to Start a Career in Web Development',
            'slug'    => 'how-to-start-a-career-in-web-development',
            'content' => '<p>Web development remains one of the most in-demand and versatile career pathways in modern technology. Whether you aspire to craft dynamic frontend user experiences or architect robust backend server architectures, a structured approach will save you months of trial and error.</p><h3>1. Master the Foundation First</h3><p>Begin by mastering semantic HTML5 and modern CSS. Understanding layout systems like Flexbox and CSS Grid is essential before jumping into JavaScript frameworks.</p><h3>2. Focus on Modern JavaScript</h3><p>JavaScript powers the modern interactive web. Focus on ES6+ features, asynchronous logic (Promises and async/await), and DOM manipulation.</p><h3>3. Build Real-World Projects</h3><p>Employers prioritize demonstrated competence over passive video watching. Build accessible, responsive web projects and showcase them on GitHub.</p>',
            'excerpt' => 'Discover the essential roadmap to launch a successful career in web development, from foundational HTML & CSS to modern JavaScript frameworks and portfolio building.',
        ),
        array(
            'title'   => 'Essential Skills for the AI Era',
            'slug'    => 'essential-skills-for-the-ai-era',
            'content' => '<p>Artificial Intelligence is reshaping workflows across tech, healthcare, finance, and creative industries. To stay competitive and thrive, professionals must cultivate both technical competencies and adaptive human abilities.</p><h3>1. Analytical Data Fluency</h3><p>Understanding data structures, exploratory analysis, and how algorithms interpret patterns is no longer just for data scientists.</p><h3>2. Prompt Engineering & Tool Fluency</h3><p>Learning how to effectively interface with AI systems accelerates productivity and problem-solving exponentially.</p><h3>3. Critical Thinking and Ethics</h3><p>As automated decision-making scales, the ability to evaluate model outputs critically and ensure ethical standards is paramount.</p>',
            'excerpt' => 'Explore the key technical and cognitive proficiencies you need to thrive alongside artificial intelligence and machine learning technologies.',
        ),
        array(
            'title'   => 'Tips to Prepare for Your First Interview',
            'slug'    => 'tips-to-prepare-for-your-first-interview',
            'content' => '<p>Interviewing for your first technical or professional role can feel intimidating. However, thorough preparation transforms anxiety into confident execution.</p><h3>1. Structure Answers with the STAR Method</h3><p>Situation, Task, Action, Result. When answering behavioral questions, this formula ensures your response remains concise and focused on measurable results.</p><h3>2. Know Your Projects Inside and Out</h3><p>Be prepared to discuss your architectural decisions, challenges you encountered, and what you would do differently in hindsight.</p><h3>3. Prepare Insightful Questions</h3><p>Interviews are a two-way evaluation. Ask questions regarding team culture, engineering mentorship, and technical roadmaps to show genuine enthusiasm.</p>',
            'excerpt' => 'Master behavioral interviews, technical screening rounds, and offer negotiation with practical, actionable preparation techniques.',
        ),
    );

    foreach ($sample_posts as $post_data) {
        $found = get_page_by_path($post_data['slug'], OBJECT, 'post');
        if (!$found) {
            wp_insert_post(array(
                'post_title'   => $post_data['title'],
                'post_name'    => $post_data['slug'],
                'post_content' => $post_data['content'],
                'post_excerpt' => $post_data['excerpt'],
                'post_status'  => 'publish',
                'post_type'    => 'post',
            ));
        }
    }
}

/**
 * Setup WordPress Primary Menu with required pages.
 *
 * @param array $page_ids
 */
function career_connect_setup_primary_menu($page_ids) {
    $menu_name = 'Career Connect Primary Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);

    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);
    } else {
        $menu_id = $menu_exists->term_id;
    }

    if (is_wp_error($menu_id)) {
        return;
    }

    // Assign menu to primary location
    $locations = get_theme_mod('nav_menu_locations');
    if (!is_array($locations)) {
        $locations = array();
    }
    $locations['primary'] = $menu_id;
    set_theme_mod('nav_menu_locations', $locations);

    // If menu items already exist, don't duplicate
    $existing_items = wp_get_nav_menu_items($menu_id);
    if (!empty($existing_items)) {
        return;
    }

    // Desired items in exact order:
    // Home, About, Courses, Career Guidance, Team, Blog, Contact, Enroll Now
    $menu_order = array('home', 'about', 'courses', 'career-guidance', 'team', 'blog', 'contact', 'enroll');

    $position = 1;
    foreach ($menu_order as $slug) {
        if (!empty($page_ids[$slug])) {
            $page_obj = get_post($page_ids[$slug]);
            if ($page_obj) {
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title'     => ($slug === 'enroll') ? 'ENROLL NOW' : strtoupper($page_obj->post_title),
                    'menu-item-object'    => 'page',
                    'menu-item-object-id' => $page_obj->ID,
                    'menu-item-type'      => 'post_type',
                    'menu-item-status'    => 'publish',
                    'menu-item-position'  => $position++,
                    'menu-item-classes'   => ($slug === 'enroll') ? 'menu-btn-enroll' : '',
                ));
            }
        }
    }
}

/**
 * Fallback navigation menu if no menu is assigned in WordPress admin.
 */
function career_connect_fallback_menu() {
    $current_url = home_url(add_query_arg(array(), $GLOBALS['wp']->request ?? ''));
    $current_path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');

    $items = array(
        array('title' => 'HOME', 'slug' => '', 'url' => home_url('/')),
        array('title' => 'ABOUT', 'slug' => 'about', 'url' => career_connect_get_page_url('about')),
        array('title' => 'COURSES', 'slug' => 'courses', 'url' => career_connect_get_page_url('courses')),
        array('title' => 'CAREER GUIDANCE', 'slug' => 'career-guidance', 'url' => career_connect_get_page_url('career-guidance')),
        array('title' => 'TEAM', 'slug' => 'team', 'url' => career_connect_get_page_url('team')),
        array('title' => 'BLOG', 'slug' => 'blog', 'url' => career_connect_get_page_url('blog')),
        array('title' => 'CONTACT', 'slug' => 'contact', 'url' => career_connect_get_page_url('contact')),
    );

    echo '<ul id="primary-menu" class="nav-menu">';
    foreach ($items as $item) {
        $is_active = false;
        if (empty($item['slug']) && (is_front_page() || empty($current_path) || $current_path === 'wordpress')) {
            $is_active = true;
        } elseif (!empty($item['slug']) && (strpos($current_path, $item['slug']) !== false || (is_page($item['slug'])))) {
            $is_active = true;
        }

        $active_class = $is_active ? ' current-menu-item active' : '';
        echo '<li class="menu-item' . esc_attr($active_class) . '">';
        echo '<a href="' . esc_url($item['url']) . '">' . esc_html($item['title']) . '</a>';
        echo '</li>';
    }

    // Enroll Now CTA Button
    $enroll_url = career_connect_get_page_url('enroll');
    echo '<li class="menu-item menu-btn-enroll">';
    echo '<a href="' . esc_url($enroll_url) . '" class="btn-enroll-nav">ENROLL NOW</a>';
    echo '</li>';
    echo '</ul>';
}

/**
 * Add Admin Menu to trigger setup manually with 1 click.
 */
function career_connect_add_admin_menu() {
    add_theme_page(
        __('Career Connect Setup', 'career-connect'),
        __('Career Connect Setup', 'career-connect'),
        'manage_options',
        'career-connect-setup',
        'career_connect_admin_setup_page'
    );
}
add_action('admin_menu', 'career_connect_add_admin_menu');

/**
 * Render admin setup page.
 */
function career_connect_admin_setup_page() {
    if (isset($_POST['career_connect_trigger_setup']) && check_admin_referer('career_connect_setup_action')) {
        career_connect_setup_default_pages();
        echo '<div class="notice notice-success is-dismissible"><p><strong>Success!</strong> All Career Connect demo pages, sample blog posts, and navigation menu have been created and assigned.</p></div>';
    }
    ?>
    <div class="wrap" style="max-width: 800px; padding: 20px; background: #fff; border-radius: 8px; margin-top: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <h1 style="color: #1769F5; font-size: 26px; margin-bottom: 8px;">Career Connect Theme Setup</h1>
        <p style="font-size: 15px; color: #555; line-height: 1.6;">
            Welcome to <strong>Career Connect</strong>! Click the button below to automatically generate all required pages (Home, About, Courses, Course Detail, Career Guidance, Team, Blog, Contact, FAQ, Enroll Now), assign their proper templates, configure the homepage, and build the primary navigation menu.
        </p>

        <form method="post" action="">
            <?php wp_nonce_field('career_connect_setup_action'); ?>
            <p style="margin-top: 24px;">
                <input type="submit" name="career_connect_trigger_setup" class="button button-primary button-hero" style="background: #1769F5; border-color: #1769F5;" value="One-Click Setup: Generate Pages & Menu">
            </p>
        </form>

        <hr style="margin: 30px 0; border: 0; border-top: 1px solid #eee;">
        <h3 style="margin-top: 0;">What this setup does:</h3>
        <ul style="list-style: disc; padding-left: 20px; color: #555; line-height: 1.8;">
            <li>Creates all 10 standard educational and career pages</li>
            <li>Assigns the custom page templates to their respective pages</li>
            <li>Sets the <strong>Home</strong> page as the Static Front Page in WordPress Settings</li>
            <li>Sets the <strong>Blog</strong> page as the Posts Page</li>
            <li>Generates 3 educational sample blog articles</li>
            <li>Creates and assigns the primary navigation menu with the <em>ENROLL NOW</em> action button</li>
        </ul>
        <p style="margin-top: 20px;">
            <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" class="button button-secondary">View Website &rarr;</a>
        </p>
    </div>
    <?php
}
