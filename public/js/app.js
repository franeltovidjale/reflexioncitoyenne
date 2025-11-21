// MBRC - Main JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // =====================================
    // Mobile Menu Toggle
    // =====================================
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const navMenu = document.getElementById('navMenu');

    if (mobileMenuBtn && navMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                navMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        // Close menu on link click
        const navLinks = navMenu.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    // =====================================
    // Navbar Scroll Effect
    // =====================================
    const navbar = document.getElementById('navbar');

    if (navbar) {
        let lastScroll = 0;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        });
    }

    // =====================================
    // Smooth Scroll for Anchor Links
    // =====================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');

            if (href !== '#' && href !== '') {
                e.preventDefault();
                const target = document.querySelector(href);

                if (target) {
                    const offsetTop = target.offsetTop - 80;

                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // =====================================
    // Form Handling (Demo)
    // =====================================
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Simulate form submission
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Envoi en cours...';

            setTimeout(() => {
                submitBtn.innerHTML = '✓ Envoyé !';
                submitBtn.style.background = 'var(--green-primary)';

                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                    submitBtn.style.background = '';
                    form.reset();
                }, 2000);
            }, 1500);
        });
    });

    // =====================================
    // Intersection Observer for Animations
    // =====================================
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Animate elements on scroll
    const animateElements = document.querySelectorAll('.mission-card, .domaine-card, .testimonial-card, .content-card, .valeur-card, .team-card');

    animateElements.forEach((el, index) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
        observer.observe(el);
    });

    // =====================================
    // Newsletter Form
    // =====================================
    const newsletterForm = document.querySelector('.newsletter-form');

    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;

            if (email) {
                alert('Merci pour votre inscription ! Vous recevrez bientôt nos dernières actualités.');
                this.reset();
            }
        });
    }

    // =====================================
    // Stats Counter Animation
    // =====================================
    const statValues = document.querySelectorAll('.stat-value');

    function animateValue(element, start, end, duration) {
        if (element.textContent === '∞') return; // Skip infinity symbol

        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);

            if (end.toString().includes('%')) {
                element.textContent = Math.floor(progress * parseInt(end)) + '%';
            } else {
                element.textContent = Math.floor(progress * end);
            }

            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const value = entry.target.textContent;
                const numValue = parseInt(value);

                if (!isNaN(numValue)) {
                    entry.target.textContent = '0';
                    animateValue(entry.target, 0, numValue, 2000);
                }

                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    statValues.forEach(stat => statsObserver.observe(stat));

    // =====================================
    // Back to Top Button
    // =====================================
    const backToTopBtn = document.createElement('button');
    backToTopBtn.innerHTML = `
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width: 24px; height: 24px;">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    `;
    backToTopBtn.className = 'back-to-top';
    backToTopBtn.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        /* background: var(--green-primary); */
        background: linear-gradient(135deg,  #2563eb, #008c3b);
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.5s ease;
        box-shadow: 0 4px 12px rgba(0, 140, 59, 0.3);
        z-index: 999;
        display: flex;
        align-items: center;
        justify-content: center;
    `;

    document.body.appendChild(backToTopBtn);

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 500) {
            backToTopBtn.style.opacity = '1';
            backToTopBtn.style.visibility = 'visible';
        } else {
            backToTopBtn.style.opacity = '0';
            backToTopBtn.style.visibility = 'hidden';
        }
    });

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    backToTopBtn.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-5px)';
        this.style.boxShadow = '0 6px 20px rgba(0, 140, 59, 0.4)';
    });

    backToTopBtn.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = '0 4px 12px rgba(0, 140, 59, 0.3)';
    });

    // =====================================
    // Console Message
    // =====================================
    console.log('%c🇧🇯 MBRC - Maison Béninoise de Réflexion Citoyenne', 'font-size: 16px; font-weight: bold; color: #008C3B;');
    console.log('%cRéfléchir ensemble. Comprendre ensemble. Pour le Bénin.', 'font-size: 12px; color: #666;');
});
