<!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBtn = document.querySelector('.mobile-menu-btn');
            const navbar = document.getElementById('navbar');

            if (menuBtn && navbar) {
                menuBtn.addEventListener('click', function() {
                    const open = navbar.classList.toggle('active');
                    menuBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
                });

                // Close the slide-in menu when clicking a real navigation link
                // (ignore the Services dropdown toggle so it can expand on mobile).
                navbar.querySelectorAll('ul li a:not(.dropbtn)').forEach(link => {
                    link.addEventListener('click', function() {
                        navbar.classList.remove('active');
                        menuBtn.setAttribute('aria-expanded', 'false');
                    });
                });
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
