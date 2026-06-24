<!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBtn = document.querySelector('.mobile-menu-btn');
            const navbar = document.getElementById('navbar');
            const navClose = document.querySelector('.nav-close');
            const navOverlay = document.querySelector('.nav-overlay');

            if (menuBtn && navbar) {
                const openMenu = function() {
                    navbar.classList.add('active');
                    if (navOverlay) navOverlay.classList.add('active');
                    document.body.classList.add('menu-open');
                    menuBtn.setAttribute('aria-expanded', 'true');
                    menuBtn.innerHTML = '&times;';
                };
                const closeMenu = function() {
                    navbar.classList.remove('active');
                    if (navOverlay) navOverlay.classList.remove('active');
                    document.body.classList.remove('menu-open');
                    menuBtn.setAttribute('aria-expanded', 'false');
                    menuBtn.innerHTML = '&#9776;';
                };

                menuBtn.addEventListener('click', function() {
                    navbar.classList.contains('active') ? closeMenu() : openMenu();
                });
                if (navClose) navClose.addEventListener('click', closeMenu);
                if (navOverlay) navOverlay.addEventListener('click', closeMenu);
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') closeMenu();
                });

                // Close the drawer when clicking a real navigation link
                // (ignore the Services dropdown toggle so it can expand on mobile).
                navbar.querySelectorAll('a:not(.dropbtn)').forEach(link => {
                    link.addEventListener('click', closeMenu);
                });
            }

            // Highlight the current page in the nav
            (function highlightActive() {
                if (!navbar) return;
                const path = location.pathname.replace(/\/+$/, '') || '/';
                navbar.querySelectorAll('ul > li > a').forEach(a => {
                    const href = a.getAttribute('href') || '';
                    if (href.startsWith('#') || href.startsWith('tel:') || href.startsWith('mailto:')) return;
                    let linkPath;
                    try { linkPath = new URL(href, location.origin).pathname.replace(/\/+$/, '') || '/'; }
                    catch (e) { return; }
                    if (linkPath === path && !(linkPath === '/' && path !== '/')) {
                        a.classList.add('active');
                    }
                });
            })();

            // Subtle shadow when the page is scrolled
            const header = document.querySelector('header');
            if (header) {
                const onScroll = function() {
                    header.classList.toggle('scrolled', window.scrollY > 20);
                };
                onScroll();
                window.addEventListener('scroll', onScroll, { passive: true });
            }

            // Smooth scrolling for on-page anchor links (skip bare "#")
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    if (!targetId || targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        e.preventDefault();
                        window.scrollTo({
                            top: targetElement.offsetTop - 90,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Animated stat counters
            const counters = document.querySelectorAll('.stat-number[data-target]');
            if (counters.length) {
                const runCounter = (el) => {
                    const target = parseFloat(el.getAttribute('data-target'));
                    const suffix = el.getAttribute('data-suffix') || '';
                    const duration = 1800;
                    const start = performance.now();
                    const step = (now) => {
                        const progress = Math.min((now - start) / duration, 1);
                        const eased = 1 - Math.pow(1 - progress, 3);
                        const value = Math.round(target * eased);
                        el.firstChild.textContent = value.toLocaleString('en-IN');
                        if (progress < 1) requestAnimationFrame(step);
                        else el.firstChild.textContent = target.toLocaleString('en-IN');
                    };
                    requestAnimationFrame(step);
                };

                const observer = new IntersectionObserver((entries, obs) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            runCounter(entry.target);
                            obs.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.4 });

                counters.forEach(c => observer.observe(c));
            }
        });
    </script>
</body>
</html>
