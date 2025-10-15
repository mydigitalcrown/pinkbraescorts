// Performance-Optimized JavaScript for Pink Bra Escorts
(function() {
    'use strict';
    
    // Cache DOM elements for better performance
    let cache = {};
    
    function getElement(selector) {
        if (!cache[selector]) {
            cache[selector] = document.querySelector(selector);
        }
        return cache[selector];
    }
    
    function getElements(selector) {
        if (!cache[selector]) {
            cache[selector] = document.querySelectorAll(selector);
        }
        return cache[selector];
    }
    
    // Debounce function for performance
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    // Throttle function for scroll events
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        }
    }
    
    // Main initialization
    function init() {
        setupMobileMenu();
        setupSmoothScrolling();
        setupFormValidation();
        setupScrollEffects();
        setupIntersectionObserver();
        setupPerformanceOptimizations();
    }
    
    // Mobile menu functionality
    function setupMobileMenu() {
        const mobileMenu = getElement('.mobile-menu');
        const navLinks = getElement('.nav-links');
        
        if (mobileMenu && navLinks) {
            mobileMenu.addEventListener('click', function() {
                navLinks.classList.toggle('active');
                // Prevent body scroll when menu is open
                document.body.classList.toggle('menu-open');
            }, { passive: true });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!mobileMenu.contains(e.target) && !navLinks.contains(e.target)) {
                    navLinks.classList.remove('active');
                    document.body.classList.remove('menu-open');
                }
            });
        }
    }
    
    // Smooth scrolling with performance optimization
    function setupSmoothScrolling() {
        const links = getElements('a[href^="#"]');
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const target = getElement(targetId);
                
                if (target) {
                    const header = getElement('.header');
                    const headerHeight = header ? header.offsetHeight : 0;
                    const targetPosition = target.offsetTop - headerHeight;
                    
                    // Use requestAnimationFrame for smoother animation
                    requestAnimationFrame(() => {
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    });
                }
            }, { passive: false });
        });
    }
    
    // Enhanced form validation
    function setupFormValidation() {
        const contactForm = getElement('.contact-form form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                if (!validateForm()) {
                    e.preventDefault();
                }
            });
        }
    }
    
    function validateForm() {
        const nameField = document.getElementById('name');
        const emailField = document.getElementById('email');
        const messageField = document.getElementById('message');
        
        if (!nameField || !emailField || !messageField) return true;
        
        const name = nameField.value.trim();
        const email = emailField.value.trim();
        const message = messageField.value.trim();
        
        // Clear previous errors
        clearFormErrors();
        
        let isValid = true;
        
        if (!name || name.length < 2) {
            showFieldError(nameField, 'Name must be at least 2 characters long');
            isValid = false;
        }
        
        if (!email || !isValidEmail(email)) {
            showFieldError(emailField, 'Please enter a valid email address');
            isValid = false;
        }
        
        if (!message || message.length < 10) {
            showFieldError(messageField, 'Message must be at least 10 characters long');
            isValid = false;
        }
        
        return isValid;
    }
    
    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
    
    function showFieldError(field, message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'field-error';
        errorDiv.textContent = message;
        errorDiv.style.color = '#e91e63';
        errorDiv.style.fontSize = '0.875rem';
        errorDiv.style.marginTop = '0.25rem';
        
        field.style.borderColor = '#e91e63';
        field.parentNode.appendChild(errorDiv);
    }
    
    function clearFormErrors() {
        const errors = getElements('.field-error');
        errors.forEach(error => error.remove());
        
        const fields = getElements('input, textarea');
        fields.forEach(field => {
            field.style.borderColor = '';
        });
    }
    
    // Optimized scroll effects
    function setupScrollEffects() {
        let ticking = false;
        
        const handleScroll = throttle(function() {
            const scrollY = window.pageYOffset;
            const header = getElement('.header');
            
            if (header) {
                if (scrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            }
        }, 16); // ~60fps
        
        window.addEventListener('scroll', handleScroll, { passive: true });
    }
    
    // Intersection Observer for animations
    function setupIntersectionObserver() {
        if (!('IntersectionObserver' in window)) return;
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        const animateElements = getElements('.service-card, .location-card, .section-title');
        animateElements.forEach(el => {
            el.classList.add('animate-out');
            observer.observe(el);
        });
    }
    
    // Performance optimizations
    function setupPerformanceOptimizations() {
        // Optimize images
        optimizeImages();
        
        // Setup lazy loading for non-critical content
        setupLazyLoading();
        
        // Preload critical resources
        preloadCriticalResources();
    }
    
    function optimizeImages() {
        const images = getElements('img');
        images.forEach(img => {
            if (!img.hasAttribute('loading')) {
                img.setAttribute('loading', 'lazy');
            }
            
            // Add error handling
            img.addEventListener('error', function() {
                this.style.display = 'none';
            });
        });
    }
    
    function setupLazyLoading() {
        if ('loading' in HTMLImageElement.prototype) {
            const images = getElements('img[data-src]');
            images.forEach(img => {
                img.src = img.dataset.src;
            });
        } else {
            // Fallback for browsers without native lazy loading
            const script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/lazysizes.min.js';
            document.body.appendChild(script);
        }
    }
    
    function preloadCriticalResources() {
        // Preload critical CSS/JS on hover
        const criticalLinks = getElements('a[href*=".php"], a[href*=".html"]');
        criticalLinks.forEach(link => {
            link.addEventListener('mouseenter', function() {
                if (!this.dataset.preloaded) {
                    const preloadLink = document.createElement('link');
                    preloadLink.rel = 'prefetch';
                    preloadLink.href = this.href;
                    document.head.appendChild(preloadLink);
                    this.dataset.preloaded = 'true';
                }
            }, { once: true, passive: true });
        });
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    
    // Export for debugging
    if (typeof window !== 'undefined') {
        window.PinkBraEscorts = {
            init,
            cache,
            validateForm
        };
    }
    
})();

// Add mobile menu styles dynamically
const style = document.createElement('style');
style.textContent = `
    @media (max-width: 768px) {
        .nav-links {
            position: fixed;
            top: 80px;
            left: -100%;
            width: 100%;
            height: calc(100vh - 80px);
            background: linear-gradient(135deg, #FF69B4, #FFB6C1);
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding-top: 50px;
            transition: left 0.3s ease;
            z-index: 999;
        }
        
        .nav-links.active {
            left: 0;
        }
        
        .nav-links li {
            margin: 20px 0;
        }
        
        .nav-links a {
            font-size: 1.2rem;
        }
    }
`;
document.head.appendChild(style);
