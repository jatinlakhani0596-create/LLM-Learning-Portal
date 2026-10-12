/**
 * Career Connect - Main Frontend JavaScript
 * Handles navigation, mobile menu, back-to-top, accordions,
 * course search & filtering, interactive career quiz,
 * and form validations with demo states.
 */

document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // 1. MOBILE MENU TOGGLE
    initMobileNavigation();

    // 2. BACK TO TOP BUTTON
    initBackToTop();

    // 3. ACCORDION COMPONENT (FAQ & CURRICULUM)
    initAccordions();

    // 4. COURSES LIVE SEARCH & CATEGORY FILTER
    initCourseFiltering();

    // 5. CAREER ASSESSMENT QUIZ
    initCareerAssessment();

    // 6. CONTACT FORM VALIDATION & DEMO STATE
    initContactForm();

    // 7. ENROLLMENT FORM VALIDATION & DEMO STATE
    initEnrollmentForm();
});

/**
 * Mobile Navigation Toggle and Accessible Drawer
 */
function initMobileNavigation() {
    var toggleBtn = document.getElementById('menu-toggle');
    var navWrapper = document.getElementById('nav-menu-wrapper');

    if (!toggleBtn || !navWrapper) {
        return;
    }

    toggleBtn.addEventListener('click', function () {
        var isOpen = toggleBtn.classList.contains('is-active');
        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    // Close when clicking outside
    document.addEventListener('click', function (e) {
        if (navWrapper.classList.contains('is-open') && 
            !navWrapper.contains(e.target) && 
            !toggleBtn.contains(e.target)) {
            closeMenu();
        }
    });

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && navWrapper.classList.contains('is-open')) {
            closeMenu();
            toggleBtn.focus();
        }
    });

    function openMenu() {
        toggleBtn.classList.add('is-active');
        toggleBtn.setAttribute('aria-expanded', 'true');
        navWrapper.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        toggleBtn.classList.remove('is-active');
        toggleBtn.setAttribute('aria-expanded', 'false');
        navWrapper.classList.remove('is-open');
        document.body.style.overflow = '';
    }
}

/**
 * Back to Top Floating Button
 */
function initBackToTop() {
    var backToTopBtn = document.getElementById('back-to-top');
    if (!backToTopBtn) {
        return;
    }

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 320) {
            backToTopBtn.classList.add('show');
        } else {
            backToTopBtn.classList.remove('show');
        }
    });

    backToTopBtn.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/**
 * Accordion Component (Curriculum & FAQ)
 */
function initAccordions() {
    var triggers = document.querySelectorAll('.accordion-trigger');
    if (!triggers.length) {
        return;
    }

    triggers.forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            var item = trigger.closest('.accordion-item');
            var panel = item.querySelector('.accordion-panel');
            var isExpanded = trigger.getAttribute('aria-expanded') === 'true';

            // Toggle active state
            if (isExpanded) {
                trigger.setAttribute('aria-expanded', 'false');
                item.classList.remove('is-active');
                if (panel) {
                    panel.hidden = true;
                }
            } else {
                trigger.setAttribute('aria-expanded', 'true');
                item.classList.add('is-active');
                if (panel) {
                    panel.hidden = false;
                }
            }
        });
    });
}

/**
 * Course Catalog Search and Category Filter
 */
function initCourseFiltering() {
    var searchInput = document.getElementById('course-search-input');
    var clearBtn = document.getElementById('clear-search-btn');
    var filterBtns = document.querySelectorAll('.filter-tab-btn');
    var courseCards = document.querySelectorAll('.filterable-course-item');
    var counterEl = document.getElementById('courses-counter');
    var noResultsBox = document.getElementById('no-courses-found');
    var resetBtn = document.getElementById('reset-courses-btn');

    if (!courseCards.length) {
        return;
    }

    var activeCategory = 'all';
    var activeSearchQuery = '';

    function filterCourses() {
        var visibleCount = 0;

        courseCards.forEach(function (card) {
            var cardCat = card.getAttribute('data-category') || '';
            var cardTitle = card.getAttribute('data-title') || '';
            var cardDesc = card.getAttribute('data-description') || '';

            var matchesCategory = (activeCategory === 'all' || cardCat === activeCategory);
            var matchesSearch = (activeSearchQuery === '' || 
                                 cardTitle.indexOf(activeSearchQuery) !== -1 || 
                                 cardDesc.indexOf(activeSearchQuery) !== -1);

            if (matchesCategory && matchesSearch) {
                card.style.display = '';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Update counter
        if (counterEl) {
            counterEl.innerHTML = 'Showing <strong>' + visibleCount + '</strong> of ' + courseCards.length + ' programs';
        }

        // Toggle Empty state
        if (noResultsBox) {
            noResultsBox.style.display = (visibleCount === 0) ? 'block' : 'none';
        }
    }

    // Category button clicks
    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            filterBtns.forEach(function (b) {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });
            btn.classList.add('active');
            btn.setAttribute('aria-selected', 'true');
            activeCategory = btn.getAttribute('data-category');
            filterCourses();
        });
    });

    // Search input typing
    if (searchInput) {
        searchInput.addEventListener('input', function () {
            activeSearchQuery = searchInput.value.trim().toLowerCase();
            if (clearBtn) {
                clearBtn.style.display = (activeSearchQuery.length > 0) ? 'block' : 'none';
            }
            filterCourses();
        });
    }

    // Clear search button
    if (clearBtn && searchInput) {
        clearBtn.addEventListener('click', function () {
            searchInput.value = '';
            activeSearchQuery = '';
            clearBtn.style.display = 'none';
            searchInput.focus();
            filterCourses();
        });
    }

    // Reset button in empty state
    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            activeCategory = 'all';
            activeSearchQuery = '';
            if (searchInput) {
                searchInput.value = '';
            }
            if (clearBtn) {
                clearBtn.style.display = 'none';
            }
            filterBtns.forEach(function (b, idx) {
                if (idx === 0) {
                    b.classList.add('active');
                    b.setAttribute('aria-selected', 'true');
                } else {
                    b.classList.remove('active');
                    b.setAttribute('aria-selected', 'false');
                }
            });
            filterCourses();
        });
    }
}

/**
 * Interactive Frontend Career Assessment Tool
 */
function initCareerAssessment() {
    var quizForm = document.getElementById('career-quiz-form');
    var resultBox = document.getElementById('quiz-result-box');
    var retakeBtn = document.getElementById('quiz-retake-btn');

    if (!quizForm || !resultBox) {
        return;
    }

    quizForm.addEventListener('submit', function (e) {
        e.preventDefault();

        var q1 = quizForm.querySelector('input[name="q1"]:checked');
        var q2 = quizForm.querySelector('input[name="q2"]:checked');
        var q3 = quizForm.querySelector('input[name="q3"]:checked');
        var q4 = quizForm.querySelector('input[name="q4"]:checked');

        if (!q1 || !q2 || !q3 || !q4) {
            alert('Please select an option for all 4 questions to calculate your personalized career match.');
            return;
        }

        // Scoring Logic
        var scores = {
            web: 0,
            python: 0,
            ai: 0,
            security: 0,
            data: 0
        };

        // Q1 Weighting
        if (q1.value === 'web') scores.web += 3;
        else if (q1.value === 'python') scores.python += 3;
        else if (q1.value === 'ai') scores.ai += 3;
        else if (q1.value === 'security') scores.security += 3;
        else if (q1.value === 'data') scores.data += 3;

        // Q2 Weighting
        if (q2.value === 'job') scores.web += 2;
        else if (q2.value === 'transition') scores.ai += 2;
        else if (q2.value === 'analytics') scores.data += 2;
        else if (q2.value === 'security') scores.security += 2;

        // Q3 Weighting
        if (q3.value === 'visual') scores.web += 2;
        else if (q3.value === 'structured') scores.python += 2;
        else if (q3.value === 'experimental') { scores.data += 1; scores.ai += 1; }

        // Find winning track
        var highestKey = 'web';
        var maxScore = -1;
        for (var track in scores) {
            if (scores[track] > maxScore) {
                maxScore = scores[track];
                highestKey = track;
            }
        }

        // Track Details map
        var tracks = {
            web: {
                title: 'Modern Full-Stack Web Development',
                courseName: 'Web Development Track',
                timeline: '12 Weeks (Self-Paced)',
                target: 'Frontend / Full-Stack Web Developer',
                slug: 'web-development',
                desc: 'Based on your visual preference and desire for immediate tangible deliverables, Web Development is your ideal match. You will master HTML5, modern CSS, and JavaScript to construct portfolio-ready applications that recruiters love.'
            },
            python: {
                title: 'Python Programming Masterclass',
                courseName: 'Python Programming',
                timeline: '8 Weeks (Self-Paced)',
                target: 'Software Engineer / Automation Specialist',
                slug: 'python-programming',
                desc: 'Your preference for clean syntax and foundational problem solving makes Python the highest-leverage start. You will build automation tools, learn object-oriented architectures, and prepare for multi-disciplinary software careers.'
            },
            ai: {
                title: 'Artificial Intelligence & Machine Learning',
                courseName: 'AI & Machine Learning Track',
                timeline: '14 Weeks (Self-Paced)',
                target: 'Machine Learning Engineer / AI Developer',
                slug: 'ai-ml',
                desc: 'Your enthusiasm for emerging technologies and algorithmic experimentation points directly to Artificial Intelligence. You will explore neural networks, deep learning models, and model serving workflows.'
            },
            security: {
                title: 'Cybersecurity Fundamentals & Defense',
                courseName: 'Cybersecurity Track',
                timeline: '10 Weeks (Self-Paced)',
                target: 'Security Analyst / InfoSec Specialist',
                slug: 'cybersecurity',
                desc: 'Your analytical mindset and focus on system defense align perfectly with Cybersecurity. You will investigate network protocols, threat surfaces, cryptography, and enterprise digital asset protection.'
            },
            data: {
                title: 'Data Science & Visual Analytics',
                courseName: 'Data Science Track',
                timeline: '12 Weeks (Self-Paced)',
                target: 'Data Analyst / Business Intelligence Engineer',
                slug: 'data-science',
                desc: 'Your analytical curiosity and metrics focus make Data Science an exceptional fit. You will master SQL queries, data wrangling with Pandas, and interactive dashboards to drive business decisions.'
            }
        };

        var match = tracks[highestKey];

        // Populate Result
        var resTitle = document.getElementById('result-title');
        var resDesc = document.getElementById('result-description');
        var resCourse = document.getElementById('result-course-name');
        var resTimeline = document.getElementById('result-timeline');
        var resTarget = document.getElementById('result-target');
        var resLink = document.getElementById('result-course-link');

        if (resTitle) resTitle.textContent = match.title;
        if (resDesc) resDesc.textContent = match.desc;
        if (resCourse) resCourse.textContent = match.courseName;
        if (resTimeline) resTimeline.textContent = match.timeline;
        if (resTarget) resTarget.textContent = match.target;

        if (resLink) {
            var baseUrl = window.careerConnectData ? window.careerConnectData.coursesUrl : '';
            resLink.href = baseUrl + '?course=' + match.slug;
        }

        // Show result box
        quizForm.style.display = 'none';
        resultBox.style.display = 'block';

        resultBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });

    if (retakeBtn) {
        retakeBtn.addEventListener('click', function () {
            quizForm.reset();
            resultBox.style.display = 'none';
            quizForm.style.display = 'block';
            quizForm.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    }
}

/**
 * Contact Form Client-side Validation & Demo Confirmation
 */
function initContactForm() {
    var form = document.getElementById('career-contact-form');
    var successBox = document.getElementById('contact-success-state');
    var resetBtn = document.getElementById('reset-contact-btn');

    if (!form || !successBox) {
        return;
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        var isValid = true;

        // Name
        var nameInput = document.getElementById('contact-name');
        var nameErr = document.getElementById('name-error');
        if (!nameInput.value.trim() || nameInput.value.trim().length < 2) {
            nameInput.classList.add('is-invalid');
            if (nameErr) nameErr.classList.add('show');
            isValid = false;
        } else {
            nameInput.classList.remove('is-invalid');
            if (nameErr) nameErr.classList.remove('show');
        }

        // Email
        var emailInput = document.getElementById('contact-email');
        var emailErr = document.getElementById('email-error');
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailInput.value.trim() || !emailPattern.test(emailInput.value.trim())) {
            emailInput.classList.add('is-invalid');
            if (emailErr) emailErr.classList.add('show');
            isValid = false;
        } else {
            emailInput.classList.remove('is-invalid');
            if (emailErr) emailErr.classList.remove('show');
        }

        // Subject
        var subjectInput = document.getElementById('contact-subject');
        var subjectErr = document.getElementById('subject-error');
        if (!subjectInput.value.trim() || subjectInput.value.trim().length < 3) {
            subjectInput.classList.add('is-invalid');
            if (subjectErr) subjectErr.classList.add('show');
            isValid = false;
        } else {
            subjectInput.classList.remove('is-invalid');
            if (subjectErr) subjectErr.classList.remove('show');
        }

        // Message
        var msgInput = document.getElementById('contact-message');
        var msgErr = document.getElementById('message-error');
        if (!msgInput.value.trim() || msgInput.value.trim().length < 10) {
            msgInput.classList.add('is-invalid');
            if (msgErr) msgErr.classList.add('show');
            isValid = false;
        } else {
            msgInput.classList.remove('is-invalid');
            if (msgErr) msgErr.classList.remove('show');
        }

        if (!isValid) {
            return;
        }

        // Valid demo submission
        var uName = document.getElementById('success-user-name');
        var uSub = document.getElementById('success-user-subject');
        if (uName) uName.textContent = nameInput.value.trim();
        if (uSub) uSub.textContent = subjectInput.value.trim();

        form.style.display = 'none';
        successBox.style.display = 'block';
        successBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });

    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            form.reset();
            form.style.display = 'block';
            successBox.style.display = 'none';
        });
    }
}

/**
 * Enrollment Form Client-side Validation & Demo Confirmation
 */
function initEnrollmentForm() {
    var form = document.getElementById('career-enrollment-form');
    var successBox = document.getElementById('enrollment-success-state');
    var resetBtn = document.getElementById('reset-enrollment-btn');

    if (!form || !successBox) {
        return;
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        var isValid = true;

        // Name
        var nameInput = document.getElementById('enroll-name');
        var nameErr = document.getElementById('enroll-name-error');
        if (!nameInput.value.trim() || nameInput.value.trim().length < 2) {
            nameInput.classList.add('is-invalid');
            if (nameErr) nameErr.classList.add('show');
            isValid = false;
        } else {
            nameInput.classList.remove('is-invalid');
            if (nameErr) nameErr.classList.remove('show');
        }

        // Email
        var emailInput = document.getElementById('enroll-email');
        var emailErr = document.getElementById('enroll-email-error');
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailInput.value.trim() || !emailPattern.test(emailInput.value.trim())) {
            emailInput.classList.add('is-invalid');
            if (emailErr) emailErr.classList.add('show');
            isValid = false;
        } else {
            emailInput.classList.remove('is-invalid');
            if (emailErr) emailErr.classList.remove('show');
        }

        // Course Selection
        var courseSelect = document.getElementById('enroll-course');
        var courseErr = document.getElementById('enroll-course-error');
        if (!courseSelect.value) {
            courseSelect.classList.add('is-invalid');
            if (courseErr) courseErr.classList.add('show');
            isValid = false;
        } else {
            courseSelect.classList.remove('is-invalid');
            if (courseErr) courseErr.classList.remove('show');
        }

        if (!isValid) {
            return;
        }

        // Success state population
        var sName = document.getElementById('success-student-name');
        var sCourse = document.getElementById('success-course-title');
        var sId = document.getElementById('success-demo-id');

        if (sName) sName.textContent = nameInput.value.trim();
        if (sCourse) sCourse.textContent = courseSelect.options[courseSelect.selectedIndex].text;
        if (sId) {
            var randomCode = Math.floor(1000 + Math.random() * 9000);
            sId.textContent = 'CC-2026-' + randomCode;
        }

        form.style.display = 'none';
        successBox.style.display = 'block';
        successBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });

    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            form.reset();
            form.style.display = 'block';
            successBox.style.display = 'none';
        });
    }
}
