# Career Connect — WordPress Education & Career Theme

**Career Connect** is a complete, modern, responsive WordPress theme designed specifically for education platforms, technical bootcamps, and career accelerators. It is inspired by clean geometric design patterns with a vibrant cyan hero banner, distinctive blue and pink accents, and a comprehensive suite of page templates.

---

## Theme Features

- **Genuine WordPress Theme Architecture**: Uses standard WordPress template hierarchy (`front-page.php`, `home.php`, `page.php`, `single.php`, `archive.php`, `search.php`, `404.php`, and 8 custom page templates).
- **Zero Heavy Dependencies**: Completely self-contained. Does not require Elementor, WooCommerce, LMS plugins, or external build steps.
- **One-Click Automated Setup**: Automatically creates all 10 pages, configures the static homepage, generates sample blog articles, and assigns the navigation menu on theme activation or via an admin button.
- **100% Responsive Design**: Tested across desktop, laptop, tablet, and mobile with a sliding drawer mobile menu.
- **Interactive Frontend Capabilities**:
  - Live course search & category filter tabs with dynamic counts.
  - Interactive 2-minute Career Assessment Quiz that calculates personalized track recommendations.
  - Interactive FAQ and curriculum module accordions.
  - Client-side contact and enrollment forms with inline validation and clear demo confirmation states.
  - Accessible floating Back-to-Top button.

---

## Included Page Templates

| Template File | Page Name | Description |
| :--- | :--- | :--- |
| `front-page.php` | **Home** | Cyan hero section, about preview, 6 course cards, why choose, how it works, team preview, lavender testimonials, promotional CTA banner, blog preview. |
| `page-templates/template-about.php` | **About Us** | Platform introduction, mission, vision, four pillars, and educational statistics. |
| `page-templates/template-courses.php` | **Courses** | 6 courses with live JavaScript search, category filter pills, level badges, and duration. |
| `page-templates/template-course-detail.php` | **Course Detail** | Reusable detail view with overview, objectives, interactive module accordion, sticky enrollment card, and related courses. |
| `page-templates/template-career-guidance.php` | **Career Guidance** | Interactive career quiz, 4 progression roadmaps, and interview preparation toolkit. |
| `page-templates/template-team.php` | **Our Team** | Faculty directory: Jatin Lakhani (Leader / Head), Neel Dube (Assistant), Dev Achhada (Assistant), Rahul Manglani (Assistant). |
| `home.php` | **Blog** | Educational articles, blog search, category labels, author bylines, and pagination. |
| `page-templates/template-contact.php` | **Contact Us** | Direct contact (Bhavnagar, Gujarat | jatinlakhani0596@gmail.com | +91 9328688819), offices hour, leadership card, and validated contact form. |
| `page-templates/template-faq.php` | **FAQ** | Categorized interactive accordions for platform, curriculum, and enrollment questions. |
| `page-templates/template-enroll.php` | **Enroll Now** | Enrollment interest form with track selector, experience levels, validation, and demo confirmation. |
| `search.php` | **Search Results** | Clean results cards with query highlighting and search refinement form. |
| `404.php` | **404 Not Found** | Friendly error screen with search bar and quick navigation buttons. |

---

## Team Leadership & Organization

- 👑 **Leader / Head:** Jatin Lakhani
- 🤝 **Assistant:** Neel Dube
- 🤝 **Assistant:** Dev Achhada
- 🤝 **Assistant:** Rahul Manglani

### Direct Contact
- 📍 **Location:** Bhavnagar, Gujarat
- ✉ **Email:** [jatinlakhani0596@gmail.com](mailto:jatinlakhani0596@gmail.com)
- 📞 **Phone / WhatsApp:** [+91 9328688819](tel:+919328688819) / [WhatsApp Link](https://wa.me/919328688819)

---

## 1. Installation Instructions

You can install Career Connect on your local WordPress installation (`http://localhost/wordpress/`) using either method below:

### Method A: Upload ZIP via WordPress Admin (Recommended)

1. Open your browser and log in to WordPress Admin at:
   `http://localhost/wordpress/wp-admin/`
2. Navigate to **Appearance** &rarr; **Themes**.
3. Click the **Add New Theme** button at the top.
4. Click **Upload Theme**.
5. Click **Choose File** and select the ZIP file:
   `career-connect.zip` (located in your project root).
6. Click **Install Now**.
7. Once installed, click **Activate**.

### Method B: Copy Folder to `wp-content/themes`

1. Open Finder on your Mac.
2. Copy the `career-connect` folder into:
   `/Applications/XAMPP/xamppfiles/htdocs/wordpress/wp-content/themes/career-connect`
3. Go to **Appearance** &rarr; **Themes** in WordPress Admin.
4. Locate **Career Connect** in the list of available themes and click **Activate**.

---

## 2. One-Click Automated Setup

Upon theme activation, Career Connect runs an automated setup routine that:
1. Creates all required pages (Home, About Us, Courses, Course Detail, Career Guidance, Our Team, Blog, Contact Us, FAQ, Enroll Now).
2. Sets **Home** as your Static Homepage and **Blog** as your Posts Page.
3. Generates 3 sample educational blog articles.
4. Creates and assigns the **Career Connect Primary Menu** with the blue **ENROLL NOW** action button.

### Manual One-Click Trigger (Optional)
If you ever want to re-run or regenerate the pages and menu:
1. In WordPress Admin, go to **Appearance** &rarr; **Career Connect Setup**.
2. Click the blue button: **One-Click Setup: Generate Pages & Menu**.

---

## 3. How to Set the Homepage Manually

If you prefer to configure reading settings manually:
1. In WordPress Admin, go to **Settings** &rarr; **Reading**.
2. Under **Your homepage displays**, select **A static page (select below)**.
3. Set **Homepage** to: `Home`.
4. Set **Posts page** to: `Blog`.
5. Click **Save Changes**.

---

## 4. How to Assign the Navigation Menu Manually

If you wish to customize the menu items:
1. In WordPress Admin, go to **Appearance** &rarr; **Menus**.
2. Select **Career Connect Primary Menu** (or click **create a new menu**).
3. Add your desired pages:
   - Home
   - About Us
   - Courses
   - Career Guidance
   - Our Team
   - Blog
   - Contact Us
   - Enroll Now
4. In the **Menu Settings** section at the bottom, check **Primary Menu** under *Display location*.
5. Click **Save Menu**.

> **Note**: Even if no menu is explicitly assigned, the theme includes an intelligent fallback menu so your navbar will never appear blank.

---

## 5. How to Edit Text, Courses, and Imagery

### Customizing General Text & Content
- **Homepage Sections**: Open `front-page.php` to customize headings, hero eyebrow text, bullet points, and CTA links.
- **Course Catalog**: Open `inc/course-data.php`. You can add, edit, or adjust titles, descriptions, curriculum modules, prerequisites, and instructors for each course.
- **Page Content**: Open the corresponding file in `page-templates/` to customize About, Contact, Team, or FAQ text.

### Replacing Images
Image assets are stored in `assets/images/`:
- **Hero Image**: `assets/images/hero-student.png`
- **About Learning Team**: `assets/images/learning-team.png`
- **Promotional Banner Student**: `assets/images/promo-student.png`
- **Testimonial Collage**: `assets/images/student-testimonials/testimonial-collage.png`
- **Course Thumbnails**: `assets/images/course-thumbnails/` (e.g., `web-dev.png`, `python.png`, `ai-ml.png`, etc.)
- **Team Avatars**: `assets/images/team/` (`team-1.png`, `team-2.png`, etc.)

To replace an image, simply overwrite the corresponding file with your preferred image of identical dimensions.

---

## 6. How to Create and Edit Blog Posts

1. In WordPress Admin, click **Posts** &rarr; **Add New Post**.
2. Enter your title (e.g., *Top 5 JavaScript Practices in 2026*).
3. Write your content in the editor.
4. Set a **Featured Image** in the right-hand sidebar.
5. Select or create a **Category** (e.g., *Development*, *Career Tips*).
6. Click **Publish**.
7. The new post will immediately appear on the **Blog** page and in the homepage **From Our Education Blog** preview section!

---

## 7. Frontend Demo Features Notice

To provide a complete, interactive experience without requiring complex backend servers, mail daemons, or database schemas:
1. **Contact Form**: Performs client-side validation (checks name length, valid email structure, message length) and renders a clear confirmation banner. It explicitly clarifies that messages are simulated locally.
2. **Enrollment Form**: Validates selected course track, email, and name, generating a simulated demo enrollment code (e.g. `CC-2026-XXXX`). No personal data or payment info is collected.
3. **Career Assessment Quiz**: Calculates recommended tracks in real-time using frontend JavaScript logic, displaying an instant matching card and direct link to the course.
4. **Courses & Curriculum**: Stored in a modular PHP helper structure (`inc/course-data.php`) for fast performance and easy customization.

---

## 8. Troubleshooting

- **Homepage shows recent blog posts instead of the custom layout?**
  Go to **Settings** &rarr; **Reading** &rarr; select **A static page** &rarr; set Homepage to **Home**.
- **Course Detail page shows 404?**
  Go to **Settings** &rarr; **Permalinks** and click **Save Changes** to refresh WordPress rewrite rules.
- **Mobile menu does not toggle?**
  Check your browser console to verify `assets/js/main.js` is loaded. It is enqueued via standard `wp_enqueue_script` in `functions.php`.
- **CSS styling not updating after changes?**
  Hard-refresh your browser cache using `Cmd + Shift + R` (Mac) or `Ctrl + F5` (Windows).

---

*Developed with native WordPress standards for the Career Connect education platform.*
