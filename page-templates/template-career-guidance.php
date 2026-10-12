<?php
/**
 * Template Name: Career Guidance Page
 *
 * @package CareerConnect
 */

get_header();

$theme_uri    = get_template_directory_uri();
$courses_url  = career_connect_get_page_url('courses');
$enroll_url   = career_connect_get_page_url('enroll');
?>

<div class="page-header-banner bg-light-cyan">
    <div class="container text-center">
        <span class="page-eyebrow">STRATEGIC CAREER ADVISORY</span>
        <h1 class="page-main-title">Career Guidance & Learning Roadmaps</h1>
        <p class="page-lead-text">
            Navigate your career transition with structured technology roadmaps, an interactive skills assessment, and proven interview preparation playbooks.
        </p>
    </div>
</div>

<?php career_connect_breadcrumbs(); ?>

<!-- 1. Interactive Skill Assessment Tool -->
<section class="section-padding bg-white" id="career-assessment">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-eyebrow">INTERACTIVE SELF-ASSESSMENT</span>
            <h2 class="section-title">Discover Your Recommended Career Track</h2>
            <p class="section-subtitle">
                Answer four quick questions about your passions, working style, and goals to generate an instant personalized learning path.
            </p>
        </div>

        <div class="assessment-tool-card card-shadow" id="assessment-widget">
            <form id="career-quiz-form" class="quiz-form">
                <!-- Question 1 -->
                <div class="quiz-question-step" data-step="1">
                    <div class="quiz-step-indicator">Question 1 of 4</div>
                    <h3 class="quiz-question-title">What type of technical challenges excite you most?</h3>
                    <div class="quiz-options-list">
                        <label class="quiz-option-card">
                            <input type="radio" name="q1" value="web" required>
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Building visual, interactive web apps & user experiences</strong>
                                <small>Designing layouts, connecting APIs, making responsive interfaces come alive</small>
                            </span>
                        </label>

                        <label class="quiz-option-card">
                            <input type="radio" name="q1" value="python">
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Writing clean programming scripts, automation tools & core logic</strong>
                                <small>Problem solving, writing versatile code, automating everyday tasks</small>
                            </span>
                        </label>

                        <label class="quiz-option-card">
                            <input type="radio" name="q1" value="ai">
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Training neural networks, smart algorithms & generative AI</strong>
                                <small>Exploring machine intelligence, computer vision, and predictive models</small>
                            </span>
                        </label>

                        <label class="quiz-option-card">
                            <input type="radio" name="q1" value="security">
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Defending systems against attacks, auditing digital infrastructure</strong>
                                <small>Hardening networks, understanding vulnerabilities, ethical defense</small>
                            </span>
                        </label>

                        <label class="quiz-option-card">
                            <input type="radio" name="q1" value="data">
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Analyzing business metrics, uncovering patterns & creating dashboards</strong>
                                <small>Transforming spreadsheets and numbers into actionable executive insights</small>
                            </span>
                        </label>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="quiz-question-step" data-step="2" style="margin-top: 30px;">
                    <div class="quiz-step-indicator">Question 2 of 4</div>
                    <h3 class="quiz-question-title">What is your primary career goal in the next 6-12 months?</h3>
                    <div class="quiz-options-list">
                        <label class="quiz-option-card">
                            <input type="radio" name="q2" value="job" required>
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Landing my first entry-level tech or developer job</strong>
                                <small>I need a portfolio with visible, tangible projects that recruiters recognize</small>
                            </span>
                        </label>

                        <label class="quiz-option-card">
                            <input type="radio" name="q2" value="transition">
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Pivoting into high-growth AI or specialized engineering</strong>
                                <small>I want forward-looking technical skills in emerging high-demand domains</small>
                            </span>
                        </label>

                        <label class="quiz-option-card">
                            <input type="radio" name="q2" value="analytics">
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Becoming a data-driven specialist in analytics & strategy</strong>
                                <small>I want to leverage database queries and visualizations for leadership decisions</small>
                            </span>
                        </label>

                        <label class="quiz-option-card">
                            <input type="radio" name="q2" value="security">
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Building a resilient career in cybersecurity and protection</strong>
                                <small>I want an indispensable discipline with constant enterprise necessity</small>
                            </span>
                        </label>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="quiz-question-step" data-step="3" style="margin-top: 30px;">
                    <div class="quiz-step-indicator">Question 3 of 4</div>
                    <h3 class="quiz-question-title">How do you prefer to learn and solve problems?</h3>
                    <div class="quiz-options-list">
                        <label class="quiz-option-card">
                            <input type="radio" name="q3" value="visual" required>
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Visual and interactive</strong>
                                <small>I like seeing the immediate visual outcome of my code on the screen</small>
                            </span>
                        </label>

                        <label class="quiz-option-card">
                            <input type="radio" name="q3" value="structured">
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Step-by-step logic and structured programming</strong>
                                <small>I appreciate clean syntax, rules, and functional problem-solving</small>
                            </span>
                        </label>

                        <label class="quiz-option-card">
                            <input type="radio" name="q3" value="experimental">
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Hypothesis testing and iterative experiments</strong>
                                <small>I enjoy working with statistics, data models, and optimizing weights</small>
                            </span>
                        </label>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="quiz-question-step" data-step="4" style="margin-top: 30px;">
                    <div class="quiz-step-indicator">Question 4 of 4</div>
                    <h3 class="quiz-question-title">What is your current coding background?</h3>
                    <div class="quiz-options-list">
                        <label class="quiz-option-card">
                            <input type="radio" name="q4" value="beginner" required>
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Complete beginner</strong>
                                <small>Brand new to programming, seeking friendly foundational guidance</small>
                            </span>
                        </label>

                        <label class="quiz-option-card">
                            <input type="radio" name="q4" value="some">
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Some self-taught exposure</strong>
                                <small>Have written basic scripts or HTML, now ready for professional structure</small>
                            </span>
                        </label>

                        <label class="quiz-option-card">
                            <input type="radio" name="q4" value="tech">
                            <span class="option-check"></span>
                            <span class="option-content">
                                <strong>Non-coding tech / business analyst</strong>
                                <small>Familiar with tools/spreadsheets, wanting to upgrade to coding mastery</small>
                            </span>
                        </label>
                    </div>
                </div>

                <div class="quiz-submit-row" style="margin-top: 35px; text-align: center;">
                    <button type="submit" id="quiz-submit-btn" class="btn btn-primary btn-large">
                        CALCULATE MY RECOMMENDED TRACK &rarr;
                    </button>
                </div>
            </form>

            <!-- Instant Assessment Result (Initially Hidden) -->
            <div id="quiz-result-box" class="quiz-result-container" style="display: none;">
                <div class="result-badge-pill">YOUR PERSONALIZED MATCH</div>
                <h3 id="result-title" class="result-title">Modern Web Development</h3>
                <p id="result-description" class="result-desc"></p>

                <div class="result-highlights-grid">
                    <div class="highlight-item">
                        <span class="hl-label">Recommended Track</span>
                        <strong id="result-course-name" class="hl-val">Web Development</strong>
                    </div>
                    <div class="highlight-item">
                        <span class="hl-label">Estimated Timeline</span>
                        <strong id="result-timeline" class="hl-val">12 Weeks</strong>
                    </div>
                    <div class="highlight-item">
                        <span class="hl-label">Career Target</span>
                        <strong id="result-target" class="hl-val">Frontend / Full-Stack Engineer</strong>
                    </div>
                </div>

                <div class="result-actions-row">
                    <a id="result-course-link" href="<?php echo esc_url($courses_url); ?>" class="btn btn-primary">
                        VIEW RECOMMENDED COURSE &rarr;
                    </a>
                    <button type="button" id="quiz-retake-btn" class="btn btn-outline">
                        Retake Assessment
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Career Roadmaps Section -->
<section class="section-padding bg-light" id="career-roadmaps">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-eyebrow">PROGRESSION BLUEPRINTS</span>
            <h2 class="section-title">Career Learning Roadmaps</h2>
            <p class="section-subtitle">
                Clear milestones charting how our modules take you from fundamentals to employment.
            </p>
        </div>

        <div class="roadmaps-grid">
            <!-- Roadmap 1 -->
            <div class="roadmap-card card-shadow">
                <div class="roadmap-header">
                    <span class="roadmap-tag">TRACK 01</span>
                    <h3 class="roadmap-title">Full-Stack Web Developer</h3>
                </div>
                <div class="roadmap-steps-list">
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 1: Foundations</strong>
                            <p>Semantic HTML5, CSS Grid/Flexbox, responsive design patterns.</p>
                        </div>
                    </div>
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 2: Modern JavaScript</strong>
                            <p>ES6+, async/await, DOM events, REST API fetch integrations.</p>
                        </div>
                    </div>
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 3: Frontend Architecture</strong>
                            <p>Component patterns, state management, form validation systems.</p>
                        </div>
                    </div>
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 4: Capstone & Portfolio</strong>
                            <p>Full-stack project deployed to GitHub and cloud hosting with CI/CD.</p>
                        </div>
                    </div>
                </div>
                <div class="roadmap-footer">
                    <a href="<?php echo esc_url(career_connect_get_course_url('web-development')); ?>" class="btn-roadmap-link">
                        Explore Web Dev Track &rarr;
                    </a>
                </div>
            </div>

            <!-- Roadmap 2 -->
            <div class="roadmap-card card-shadow">
                <div class="roadmap-header">
                    <span class="roadmap-tag">TRACK 02</span>
                    <h3 class="roadmap-title">AI & Machine Learning Specialist</h3>
                </div>
                <div class="roadmap-steps-list">
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 1: Python & Statistics</strong>
                            <p>Data structures, linear algebra essentials, statistical foundations.</p>
                        </div>
                    </div>
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 2: Classic Machine Learning</strong>
                            <p>Regression, classification, decision trees, hyperparameter tuning.</p>
                        </div>
                    </div>
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 3: Neural Networks & Deep Learning</strong>
                            <p>Computer vision, natural language transformers, model optimization.</p>
                        </div>
                    </div>
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 4: Model Serving & APIs</strong>
                            <p>Packaging models into lightweight REST endpoints and demo dashboards.</p>
                        </div>
                    </div>
                </div>
                <div class="roadmap-footer">
                    <a href="<?php echo esc_url(career_connect_get_course_url('ai-ml')); ?>" class="btn-roadmap-link">
                        Explore AI & ML Track &rarr;
                    </a>
                </div>
            </div>

            <!-- Roadmap 3 -->
            <div class="roadmap-card card-shadow">
                <div class="roadmap-header">
                    <span class="roadmap-tag">TRACK 03</span>
                    <h3 class="roadmap-title">Cybersecurity Defense Analyst</h3>
                </div>
                <div class="roadmap-steps-list">
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 1: Networking & Threat Modeling</strong>
                            <p>TCP/IP architectures, packet analysis, identifying vulnerability attack vectors.</p>
                        </div>
                    </div>
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 2: Cryptography & Identity</strong>
                            <p>Encryption protocols, public/private keys, access control policies.</p>
                        </div>
                    </div>
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 3: Web App Defense (OWASP)</strong>
                            <p>Mitigating SQL injections, XSS, token tampering, and API exploits.</p>
                        </div>
                    </div>
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 4: Security Operations & Audit</strong>
                            <p>Incident response playbooks, SIEM log monitoring, compliance defense.</p>
                        </div>
                    </div>
                </div>
                <div class="roadmap-footer">
                    <a href="<?php echo esc_url(career_connect_get_course_url('cybersecurity')); ?>" class="btn-roadmap-link">
                        Explore Security Track &rarr;
                    </a>
                </div>
            </div>

            <!-- Roadmap 4 -->
            <div class="roadmap-card card-shadow">
                <div class="roadmap-header">
                    <span class="roadmap-tag">TRACK 04</span>
                    <h3 class="roadmap-title">Data Science & Analytics</h3>
                </div>
                <div class="roadmap-steps-list">
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 1: Relational Data & SQL</strong>
                            <p>Database queries, multi-table joins, subqueries, and window calculations.</p>
                        </div>
                    </div>
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 2: Python Data Wrangling</strong>
                            <p>Cleaning messy data with Pandas, feature reshaping, exploratory statistical testing.</p>
                        </div>
                    </div>
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 3: Visual Dashboards</strong>
                            <p>Translating metrics into interactive charts, KPI monitoring, and executive summaries.</p>
                        </div>
                    </div>
                    <div class="roadmap-step-item">
                        <span class="step-dot"></span>
                        <div class="step-info">
                            <strong>Phase 4: Predictive Modeling</strong>
                            <p>Statistical regression, A/B test analysis, and business impact case studies.</p>
                        </div>
                    </div>
                </div>
                <div class="roadmap-footer">
                    <a href="<?php echo esc_url(career_connect_get_course_url('data-science')); ?>" class="btn-roadmap-link">
                        Explore Data Track &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Interview Preparation Resources Toolkit -->
<section class="section-padding bg-white" id="interview-resources">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-eyebrow">CAREER ACCELERATION TOOLKIT</span>
            <h2 class="section-title">Interview Preparation Resources</h2>
            <p class="section-subtitle">
                Proven strategies to conquer technical screenings, present your strengths, and secure standout job offers.
            </p>
        </div>

        <div class="prep-toolkit-grid">
            <div class="toolkit-card card-shadow">
                <div class="toolkit-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#1769F5" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </div>
                <h3 class="toolkit-title">ATS Resume Checklist</h3>
                <p class="toolkit-desc">Learn how to format resumes that pass automated Applicant Tracking Systems, emphasizing quantifiable results over generic task lists.</p>
                <ul class="toolkit-bullets">
                    <li>Use metric-driven bullet points (e.g., "reduced load time by 38%")</li>
                    <li>Avoid complex multi-column tables that scramble ATS parsers</li>
                    <li>Align technical skills keywords directly with target job postings</li>
                </ul>
            </div>

            <div class="toolkit-card card-shadow">
                <div class="toolkit-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#1769F5" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                </div>
                <h3 class="toolkit-title">The STAR Behavioral Guide</h3>
                <p class="toolkit-desc">Master behavioral interview rounds with the structured STAR technique: Situation, Task, Action, and Result.</p>
                <ul class="toolkit-bullets">
                    <li><strong>Situation:</strong> Set the context and business problem concisely</li>
                    <li><strong>Task:</strong> Detail your exact individual responsibility</li>
                    <li><strong>Action:</strong> Explain the technical strategy you implemented</li>
                    <li><strong>Result:</strong> Share measurable outcome and key learnings</li>
                </ul>
            </div>

            <div class="toolkit-card card-shadow">
                <div class="toolkit-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#1769F5" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                </div>
                <h3 class="toolkit-title">Offer Negotiation Playbook</h3>
                <p class="toolkit-desc">Confidently navigate salary negotiations, benefits packages, and remote work arrangements without jeopardizing your offer.</p>
                <ul class="toolkit-bullets">
                    <li>Research market percentiles using levels.fyi and local benchmarks</li>
                    <li>Express enthusiasm for the role before initiating numbers</li>
                    <li>Negotiate total compensation: base salary, bonus, and education stipend</li>
                </ul>
            </div>
        </div>

        <div class="prep-cta-banner bg-light-cyan card-shadow text-center" style="margin-top: 45px; padding: 40px; border-radius: 12px;">
            <h3 style="margin-top: 0; font-size: 24px; color: #202124;">Need Dedicated Career Mentorship?</h3>
            <p style="color: #555; max-width: 600px; margin: 10px auto 25px;">
                Our Career Readiness & Interview Preparation course includes personalized 1-on-1 resume reviews and simulated mock interviews.
            </p>
            <a href="<?php echo esc_url(career_connect_get_course_url('career-readiness')); ?>" class="btn btn-primary">
                EXPLORE CAREER READINESS TRACK
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
