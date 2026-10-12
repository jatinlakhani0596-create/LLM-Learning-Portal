<?php
/**
 * Course Data Helper for Career Connect Theme
 *
 * @package CareerConnect
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Retrieve all demo courses.
 *
 * @return array
 */
function career_connect_get_courses() {
    $theme_uri = get_template_directory_uri();

    return array(
        'web-development' => array(
            'id'          => 'web-development',
            'title'       => 'Modern Full-Stack Web Development',
            'short_title' => 'Web Development',
            'category'    => 'Development',
            'level'       => 'Beginner to Intermediate',
            'duration'    => '12 Weeks (120 Hours)',
            'students'    => '3,420 Learners',
            'rating'      => '4.9',
            'rating_count'=> '480',
            'price'       => 'Free Demo Access',
            'badge'       => 'Most Popular',
            'thumbnail'   => $theme_uri . '/assets/images/course-thumbnails/web-dev.png',
            'instructor'  => array(
                'name'  => 'Jatin Lakhani',
                'role'  => 'Leader / Head Director & Full-Stack Mentor',
                'image' => $theme_uri . '/assets/images/team/team-1.png',
            ),
            'excerpt'     => 'Master modern HTML5, CSS3, JavaScript (ES6+), component-driven UI architecture, and backend APIs to construct scalable web applications.',
            'overview'    => 'This comprehensive web development program equips you with both client-side and server-side engineering proficiencies. You will learn semantic markup, responsive design principles, modern JavaScript frameworks, and how to interface cleanly with RESTful web services. Through practical assignments and portfolio-grade capstones, you transition from coding fundamentals to production-ready web engineer.',
            'objectives'  => array(
                'Craft modern, accessible, and responsive user interfaces with semantic HTML5 and CSS3 Grid/Flexbox.',
                'Write modular ES6+ JavaScript, handle asynchronous operations (Promises/async-await), and manipulate the DOM cleanly.',
                'Understand component-based UI architecture and state management principles.',
                'Connect web frontends to backend APIs, perform secure data retrieval, and handle error states gracefully.',
                'Utilize Git version control, deployment workflows, and modern web performance optimization techniques.'
            ),
            'curriculum'  => array(
                array(
                    'title'   => 'Module 1: Semantic Markup & Modern CSS Architecture',
                    'lessons' => array('HTML5 Semantics & Accessibility Best Practices', 'CSS Grid, Flexbox & Responsive Layout Systems', 'CSS Custom Properties & Design Tokens', 'Mini-Project: Responsive Landing Page')
                ),
                array(
                    'title'   => 'Module 2: JavaScript Deep Dive & Asynchronous Programming',
                    'lessons' => array('ES6+ Syntax, Scope, Closures & Data Structures', 'DOM Manipulation & Event Handling', 'Fetch API, Promises & Async/Await', 'Mini-Project: Interactive Data Dashboard')
                ),
                array(
                    'title'   => 'Module 3: Frontend Architecture & Component Systems',
                    'lessons' => array('Component Design Patterns & State Architecture', 'Modular CSS & Scoped Styles', 'Form Validation & Client-side Storage', 'Mini-Project: Task Management Application')
                ),
                array(
                    'title'   => 'Module 4: Full-Stack Integration & Production Deployment',
                    'lessons' => array('RESTful API Integration & Error Handling', 'Authentication Flow Concepts & Best Practices', 'Git Version Control & Deployment Pipelines', 'Capstone Project: Comprehensive Full-Stack Portfolio App')
                ),
            ),
            'prerequisites' => 'No prior programming experience required. Basic familiarity with web browsers and text editors.',
            'certificate'   => 'Yes, Certificate of Completion issued upon submission of all module projects.'
        ),
        'python-programming' => array(
            'id'          => 'python-programming',
            'title'       => 'Python Programming Masterclass',
            'short_title' => 'Python Programming',
            'category'    => 'Programming',
            'level'       => 'Beginner',
            'duration'    => '8 Weeks (80 Hours)',
            'students'    => '4,180 Learners',
            'rating'      => '4.9',
            'rating_count'=> '610',
            'price'       => 'Free Demo Access',
            'badge'       => 'Top Rated',
            'thumbnail'   => $theme_uri . '/assets/images/course-thumbnails/python.png',
            'instructor'  => array(
                'name'  => 'Neel Dube',
                'role'  => 'Technical Assistant & Python Mentor',
                'image' => $theme_uri . '/assets/images/team/team-2.png',
            ),
            'excerpt'     => 'Learn core Python syntax, object-oriented concepts, automation scripts, and algorithmic problem-solving through hands-on exercises.',
            'overview'    => 'Python is universally recognized for its readability and versatility across software development, data science, and automation. This course takes you from foundational programming constructs through to object-oriented architecture, file operations, web scraping, and API integrations.',
            'objectives'  => array(
                'Write clean, PEP 8 compliant Python code utilizing core data structures (lists, tuples, dictionaries, sets).',
                'Implement robust modular code using functions, packages, and object-oriented classes.',
                'Automate repetitive workflows, parse spreadsheets, and interact with operating system file systems.',
                'Extract web data using HTTP requests and parsing libraries.',
                'Apply unit tests, exception handling, and virtual environment dependency management.'
            ),
            'curriculum'  => array(
                array(
                    'title'   => 'Module 1: Syntax, Variables & Control Structures',
                    'lessons' => array('Variables, Data Types & Operator Logic', 'Conditionals, Loops & Iterators', 'String Manipulation & Pattern Matching', 'Mini-Project: Interactive CLI Utility')
                ),
                array(
                    'title'   => 'Module 2: Data Structures & Functional Paradigms',
                    'lessons' => array('Lists, Dictionaries, Sets & Tuples In-Depth', 'Functions, Scope & Higher-Order Functions', 'List Comprehensions & Generators', 'Mini-Project: Text Analysis Engine')
                ),
                array(
                    'title'   => 'Module 3: Object-Oriented Programming & File Systems',
                    'lessons' => array('Classes, Objects, Inheritance & Encapsulation', 'Exception Handling & Custom Error Types', 'Working with CSV, JSON & Text Files', 'Mini-Project: Automated File Organizer')
                ),
                array(
                    'title'   => 'Module 4: Web Scraping, APIs & Automation Tools',
                    'lessons' => array('HTTP Requests & Consuming REST APIs', 'HTML Parsing & Web Scraping Ethics', 'Virtual Environments & Package Publishing', 'Capstone: End-to-End Workflow Automation Suite')
                ),
            ),
            'prerequisites' => 'None. Designed specifically for beginners and cross-disciplinary professionals.',
            'certificate'   => 'Yes, Certificate of Completion issued upon milestone completion.'
        ),
        'ai-ml' => array(
            'id'          => 'ai-ml',
            'title'       => 'Artificial Intelligence & Machine Learning',
            'short_title' => 'Artificial Intelligence & Machine Learning',
            'category'    => 'AI & Tech',
            'level'       => 'Intermediate',
            'duration'    => '14 Weeks (140 Hours)',
            'students'    => '2,890 Learners',
            'rating'      => '4.9',
            'rating_count'=> '395',
            'price'       => 'Free Demo Access',
            'badge'       => 'High Demand',
            'thumbnail'   => $theme_uri . '/assets/images/course-thumbnails/ai-ml.png',
            'instructor'  => array(
                'name'  => 'Dev Achhada',
                'role'  => 'Curriculum Assistant & AI Systems Mentor',
                'image' => $theme_uri . '/assets/images/team/team-3.png',
            ),
            'excerpt'     => 'Explore neural networks, computer vision, natural language processing, and practical machine learning model training and deployment.',
            'overview'    => 'Deepen your technical horizon with foundational and modern machine learning techniques. From mathematical underpinnings and loss optimization to convolutional neural networks and transformer architectures, this course demystifies AI and teaches you how to build real predictive solutions.',
            'objectives'  => array(
                'Understand core machine learning paradigms: supervised, unsupervised, and reinforcement learning.',
                'Train and evaluate regression, classification, and clustering models using standard metrics.',
                'Architect multi-layer neural networks, implement backpropagation, and tune hyperparameters.',
                'Apply computer vision techniques and modern text processing pipelines.',
                'Package and serve machine learning models through lightweight API endpoints.'
            ),
            'curriculum'  => array(
                array(
                    'title'   => 'Module 1: Machine Learning Foundations & Linear Models',
                    'lessons' => array('Linear & Logistic Regression', 'Gradient Descent & Cost Functions', 'Feature Engineering & Data Preprocessing', 'Mini-Project: Predictive Pricing Model')
                ),
                array(
                    'title'   => 'Module 2: Tree-Based Algorithms & Ensemble Techniques',
                    'lessons' => array('Decision Trees & Random Forests', 'Gradient Boosting (XGBoost/LightGBM)', 'Model Validation & Cross-Validation Strategies', 'Mini-Project: Customer Churn Predictor')
                ),
                array(
                    'title'   => 'Module 3: Neural Networks & Deep Learning',
                    'lessons' => array('Perceptrons & Multi-Layer Neural Networks', 'Activation Functions, Overfitting & Regularization', 'Introduction to Convolutional Neural Networks', 'Mini-Project: Image Classification System')
                ),
                array(
                    'title'   => 'Module 4: Modern NLP & Model Deployment',
                    'lessons' => array('Text Tokenization, Embeddings & Transformers', 'Prompt Engineering & Foundation Models', 'Deploying Models via REST API Endpoints', 'Capstone: End-to-End Intelligent Web Application')
                ),
            ),
            'prerequisites' => 'Intermediate Python programming and familiarity with linear algebra and calculus basics.',
            'certificate'   => 'Yes, Certificate of Completion issued upon project defense.'
        ),
        'cybersecurity' => array(
            'id'          => 'cybersecurity',
            'title'       => 'Cybersecurity Fundamentals & Defense',
            'short_title' => 'Cybersecurity Fundamentals',
            'category'    => 'Security',
            'level'       => 'Beginner to Intermediate',
            'duration'    => '10 Weeks (90 Hours)',
            'students'    => '1,950 Learners',
            'rating'      => '4.8',
            'rating_count'=> '280',
            'price'       => 'Free Demo Access',
            'badge'       => 'Essential Skill',
            'thumbnail'   => $theme_uri . '/assets/images/course-thumbnails/cybersecurity.png',
            'instructor'  => array(
                'name'  => 'Rahul Manglani',
                'role'  => 'Operations Assistant & Security Mentor',
                'image' => $theme_uri . '/assets/images/team/team-4.png',
            ),
            'excerpt'     => 'Understand modern network security protocols, vulnerability scanning, threat mitigation, and enterprise digital asset defense.',
            'overview'    => 'Protecting information systems is critical across every modern business sector. This course equips you with an intuitive understanding of cyber attack vectors, defensive hardening, cryptographic foundations, and security incident response frameworks.',
            'objectives'  => array(
                'Identify common vulnerabilities (OWASP Top 10) and understand threat vector mechanisms.',
                'Analyze network traffic, configure firewall policies, and secure packet transmissions.',
                'Utilize asymmetric and symmetric encryption methods along with digital signatures.',
                'Conduct authorized security scanning and assess vulnerability reports.',
                'Draft comprehensive incident response plans and security hygiene checklists.'
            ),
            'curriculum'  => array(
                array(
                    'title'   => 'Module 1: Information Security Core Principles',
                    'lessons' => array('The CIA Triad: Confidentiality, Integrity & Availability', 'Threat Actors, Attack Surfaces & Social Engineering', 'Operating System Security & Hardening', 'Lab: Security Configuration Audit')
                ),
                array(
                    'title'   => 'Module 2: Network Defense & Cryptography',
                    'lessons' => array('TCP/IP Stack Security & Packet Analysis', 'Symmetric & Asymmetric Cryptography Basics', 'SSL/TLS Protocols & Certificate Management', 'Lab: Encrypted Communication Setup')
                ),
                array(
                    'title'   => 'Module 3: Web Application Security (OWASP Top 10)',
                    'lessons' => array('SQL Injection, XSS & CSRF Exploits & Fixes', 'Authentication & Session Hijacking Mitigation', 'Secure API Design & Token Storage', 'Lab: Defending a Vulnerable Application')
                ),
                array(
                    'title'   => 'Module 4: Incident Response & Defensive Operations',
                    'lessons' => array('Security Information & Event Monitoring (SIEM)', 'Incident Handling Lifecycle & Forensics', 'Compliance Standards (ISO 27001, GDPR basics)', 'Capstone: Comprehensive Security Defense Plan')
                ),
            ),
            'prerequisites' => 'Familiarity with computer networking concepts and basic command-line navigation.',
            'certificate'   => 'Yes, Certificate of Completion issued.'
        ),
        'data-science' => array(
            'id'          => 'data-science',
            'title'       => 'Data Science & Visual Analytics',
            'short_title' => 'Data Science',
            'category'    => 'Analytics',
            'level'       => 'Intermediate',
            'duration'    => '12 Weeks (110 Hours)',
            'students'    => '3,110 Learners',
            'rating'      => '4.9',
            'rating_count'=> '430',
            'price'       => 'Free Demo Access',
            'badge'       => 'Industry Standard',
            'thumbnail'   => $theme_uri . '/assets/images/course-thumbnails/data-science.png',
            'instructor'  => array(
                'name'  => 'Dev Achhada',
                'role'  => 'Curriculum Assistant & Data Science Mentor',
                'image' => $theme_uri . '/assets/images/team/team-3.png',
            ),
            'excerpt'     => 'Analyze complex real-world datasets, build insightful visual dashboards, and extract business intelligence with SQL, Pandas, and charts.',
            'overview'    => 'Organizations rely on data-driven decision making. In this course, you will learn exploratory data analysis, statistical hypotheses testing, and visual dashboard storytelling to turn raw metrics into actionable organizational strategy.',
            'objectives'  => array(
                'Execute advanced relational database queries using SQL joins, subqueries, and window functions.',
                'Clean, reshape, and normalize complex raw data using Python data analysis libraries.',
                'Design intuitive, clear visual dashboards that highlight meaningful trends and outliers.',
                'Perform statistical testing to validate business hypotheses and findings.',
                'Communicate technical data insights clearly to non-technical stakeholders.'
            ),
            'curriculum'  => array(
                array(
                    'title'   => 'Module 1: Relational Databases & SQL Mastery',
                    'lessons' => array('Relational Schema Design & Constraints', 'Complex Joins, Aggregations & Grouping', 'Window Functions & Common Table Expressions', 'Mini-Project: E-Commerce Sales Query Suite')
                ),
                array(
                    'title'   => 'Module 2: Data Wrangling & Exploratory Analysis',
                    'lessons' => array('Missing Data Imputation & Outlier Detection', 'Reshaping, Pivoting & Merging Datasets', 'Descriptive Statistics & Correlation Analysis', 'Mini-Project: Health Data Exploration')
                ),
                array(
                    'title'   => 'Module 3: Visual Analytics & Storytelling',
                    'lessons' => array('Data Visualization Principles & Chart Selection', 'Interactive Charting with Python & Web Tools', 'Designing Stakeholder Executive Dashboards', 'Mini-Project: Executive KPI Dashboard')
                ),
                array(
                    'title'   => 'Module 4: Hypothesis Testing & Capstone Synthesis',
                    'lessons' => array('A/B Testing Foundations & Statistical Significance', 'Presenting Data Findings Effectively', 'Reproducible Notebook Workflows', 'Capstone: Complete Business Intelligence Case Study')
                ),
            ),
            'prerequisites' => 'Basic familiarity with spreadsheets or high-school mathematics.',
            'certificate'   => 'Yes, Certificate of Completion issued.'
        ),
        'career-readiness' => array(
            'id'          => 'career-readiness',
            'title'       => 'Career Readiness & Interview Preparation',
            'short_title' => 'Career Readiness & Interview Preparation',
            'category'    => 'Career Skills',
            'level'       => 'All Levels',
            'duration'    => '6 Weeks (50 Hours)',
            'students'    => '5,620 Learners',
            'rating'      => '5.0',
            'rating_count'=> '920',
            'price'       => 'Free Demo Access',
            'badge'       => 'Career Accelerator',
            'thumbnail'   => $theme_uri . '/assets/images/course-thumbnails/career-prep.png',
            'instructor'  => array(
                'name'  => 'Jatin Lakhani',
                'role'  => 'Leader / Head Director & Career Strategist',
                'image' => $theme_uri . '/assets/images/team/team-1.png',
            ),
            'excerpt'     => 'Master technical resume crafting, behavioral interview strategies, mock code reviews, salary negotiation, and professional networking.',
            'overview'    => 'Learning skills is only the first phase; demonstrating your worth to employers is what lands the offer. This dedicated career preparation program coaches you through resume architecture, portfolio showcasing, LinkedIn networking, and behavioral interview mastery.',
            'objectives'  => array(
                'Craft an ATS-optimized resume that highlights quantifiable technical achievements.',
                'Build a modern, engaging portfolio site that stands out to recruiters and hiring managers.',
                'Master the STAR framework for behavioral and leadership interview scenarios.',
                'Conquer live technical interviews, take-home assignments, and system design discussions.',
                'Confidently negotiate compensation packages, equity, and remote work arrangements.'
            ),
            'curriculum'  => array(
                array(
                    'title'   => 'Module 1: Resume Engineering & Portfolio Building',
                    'lessons' => array('ATS Optimization & Metric-Driven Bullet Points', 'Designing an Impactful Portfolio Website', 'GitHub & LinkedIn Profile Overhauls', 'Workshop: Live Peer Resume Reviews')
                ),
                array(
                    'title'   => 'Module 2: Strategic Networking & Job Sourcing',
                    'lessons' => array('Direct Outreach to Engineering Managers & Recruiters', 'Leveraging Alumni & Community Networks', 'Informational Interviews & Coffee Chats', 'Template Kit: Outreach Cold Email Sequences')
                ),
                array(
                    'title'   => 'Module 3: Behavioral & Culture-Fit Interviews',
                    'lessons' => array('Mastering the STAR Method for Behavioral Questions', 'Communicating Strengths, Weaknesses & Conflict Resolution', 'Questions You Must Ask the Interviewer', 'Mock Session: 1-on-1 Behavioral Simulation')
                ),
                array(
                    'title'   => 'Module 4: Technical Screening & Offer Negotiation',
                    'lessons' => array('Live Coding Communication Best Practices', 'Take-Home Project Architecture & Polish', 'Understanding Total Compensation & Equity', 'Capstone: Mock Final Interview & Offer Playbook')
                ),
            ),
            'prerequisites' => 'Open to all students, job-seekers, and professionals ready to advance their career.',
            'certificate'   => 'Yes, Certificate of Completion issued.'
        ),
    );
}

/**
 * Get single course by slug/id.
 *
 * @param string $slug
 * @return array|null
 */
function career_connect_get_course($slug) {
    $courses = career_connect_get_courses();
    if (isset($courses[$slug])) {
        return $courses[$slug];
    }
    // Return first course as fallback
    return reset($courses);
}
