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

            // Quote form -> submit via WhatsApp with details prefilled
            const quoteForm = document.getElementById('quoteForm');
            if (quoteForm) {
                quoteForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (!quoteForm.checkValidity()) { quoteForm.reportValidity(); return; }
                    const v = id => { const el = document.getElementById(id); return el ? el.value.trim() : ''; };
                    const serviceSel = document.getElementById('qfService');
                    const service = serviceSel && serviceSel.selectedIndex > 0 ? serviceSel.options[serviceSel.selectedIndex].text : '';
                    const name = v('qfName'), phone = v('qfPhone'), email = v('qfEmail'), message = v('qfMessage');

                    let text = "Hi, I'd like a free moving quote.\n\n";
                    text += "Name: " + name + "\n";
                    text += "Phone: " + phone + "\n";
                    if (email) text += "Email: " + email + "\n";
                    text += "Service: " + service + "\n";
                    text += "Details: " + message;

                    const url = "https://wa.me/918295588602?text=" + encodeURIComponent(text);
                    window.open(url, "_blank");

                    const note = document.getElementById('qfNote');
                    if (note) note.textContent = "Opening WhatsApp… if it doesn't open, please call us at +91 82955 88602.";
                    quoteForm.reset();
                });
            }

            // Exit-intent / moving-tips offer popup
            const popup = document.getElementById('empPopup');
            const skipPopup = /\/(contact-us|cost-calculator)\.php$/.test(location.pathname);
            if (popup && !skipPopup) {
                const KEY = 'emp_popup_seen';
                const lastSeen = () => { try { return parseInt(localStorage.getItem(KEY) || '0', 10); } catch (e) { return Date.now(); } };
                const markSeen = () => { try { localStorage.setItem(KEY, String(Date.now())); } catch (e) {} };
                const recentlySeen = () => (Date.now() - lastSeen()) < 3 * 24 * 60 * 60 * 1000; // 3 days
                let shown = false;

                const openPopup = () => {
                    if (shown || recentlySeen()) return;
                    if (document.body.classList.contains('menu-open')) return; // don't clash with menu/lightbox
                    shown = true;
                    popup.classList.add('open');
                    popup.setAttribute('aria-hidden', 'false');
                    document.body.classList.add('menu-open');
                };
                const closePopup = () => {
                    popup.classList.remove('open');
                    popup.setAttribute('aria-hidden', 'true');
                    document.body.classList.remove('menu-open');
                    markSeen();
                };

                popup.querySelector('.emp-popup-close').addEventListener('click', closePopup);
                popup.addEventListener('click', (e) => { if (e.target === popup) closePopup(); });
                document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && popup.classList.contains('open')) closePopup(); });
                const ckLink = popup.querySelector('.emp-popup-link');
                if (ckLink) ckLink.addEventListener('click', markSeen);

                const isTouch = window.matchMedia('(hover: none)').matches || 'ontouchstart' in window;
                if (isTouch) {
                    // mobile has no exit-intent: show after a delay
                    setTimeout(openPopup, 30000);
                } else {
                    // desktop: trigger when the cursor leaves via the top of the viewport
                    document.addEventListener('mouseout', (e) => {
                        if (e.clientY <= 0 && !e.relatedTarget) openPopup();
                    });
                    setTimeout(openPopup, 60000); // safety fallback
                }

                const pForm = document.getElementById('empPopupForm');
                if (pForm) pForm.addEventListener('submit', (e) => {
                    e.preventDefault();
                    if (!pForm.checkValidity()) { pForm.reportValidity(); return; }
                    const phone = document.getElementById('empPopupPhone').value.trim();
                    const msg = "Hi, I'd like a free moving quote.\nMy phone: " + phone;
                    window.open("https://wa.me/918295588602?text=" + encodeURIComponent(msg), "_blank");
                    closePopup();
                });
            }

            // Cost calculator
            const calcForm = document.getElementById('calcForm');
            if (calcForm) {
                const base = { few:[1500,4000], '1rk':[2500,6000], '1bhk':[4000,9000], '2bhk':[7000,15000], '3bhk':[12000,25000], '4bhk':[20000,40000], office:[10000,40000] };
                const distF = { local:1, '300':2.2, '700':3.0, '1200':3.8, '1800':4.6 };
                const r500 = n => Math.round(n / 500) * 500;
                const inr = n => '₹' + n.toLocaleString('en-IN');
                calcForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const sizeEl = document.getElementById('calcSize');
                    const distEl = document.getElementById('calcDistance');
                    const floor = parseFloat(document.getElementById('calcFloor').value) || 1;
                    const range = base[sizeEl.value];
                    if (!range) { calcForm.reportValidity(); return; }
                    let lo = range[0], hi = range[1];
                    const f = distF[distEl.value] || 1;
                    lo *= f; hi *= f;
                    const packing = document.getElementById('calcPacking').checked;
                    const storage = document.getElementById('calcStorage').checked;
                    const vehicle = document.getElementById('calcVehicle').checked;
                    if (packing) { lo *= 1.15; hi *= 1.15; }
                    if (storage) { lo += 2000; hi += 5000; }
                    if (vehicle) { lo += 5000; hi += 12000; }
                    lo *= floor; hi *= floor;
                    lo = r500(lo); hi = r500(hi);

                    document.getElementById('calcAmount').textContent = inr(lo) + ' – ' + inr(hi);
                    const res = document.getElementById('calcResult');
                    res.hidden = false;

                    const addons = [];
                    if (packing) addons.push('Full packing');
                    if (storage) addons.push('Storage');
                    if (vehicle) addons.push('Vehicle transport');
                    let msg = "Hi, I used your cost calculator and would like an exact quote.\n\n";
                    msg += "Move: " + sizeEl.options[sizeEl.selectedIndex].text + "\n";
                    msg += "Distance: " + distEl.options[distEl.selectedIndex].text + "\n";
                    if (addons.length) msg += "Add-ons: " + addons.join(', ') + "\n";
                    msg += "Estimate shown: " + inr(lo) + " - " + inr(hi);
                    document.getElementById('calcWa').href = "https://wa.me/918295588602?text=" + encodeURIComponent(msg);

                    res.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                });
            }

            // Gallery lightbox
            const galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
            if (galleryItems.length) {
                const lb = document.createElement('div');
                lb.className = 'lightbox';
                lb.innerHTML =
                    '<button class="lb-btn lb-close" aria-label="Close">&times;</button>' +
                    '<button class="lb-btn lb-prev" aria-label="Previous">&#10094;</button>' +
                    '<img alt="">' +
                    '<button class="lb-btn lb-next" aria-label="Next">&#10095;</button>' +
                    '<div class="lb-cap"></div>';
                document.body.appendChild(lb);
                const lbImg = lb.querySelector('img');
                const lbCap = lb.querySelector('.lb-cap');
                const imgs = galleryItems.map(it => {
                    const i = it.querySelector('img');
                    return { src: i.getAttribute('src'), cap: i.getAttribute('alt') || '' };
                });
                let idx = 0;
                const show = (i) => {
                    idx = (i + imgs.length) % imgs.length;
                    lbImg.src = imgs[idx].src;
                    lbCap.textContent = imgs[idx].cap;
                };
                const openLb = (i) => { show(i); lb.classList.add('open'); document.body.classList.add('menu-open'); };
                const closeLb = () => { lb.classList.remove('open'); document.body.classList.remove('menu-open'); };
                galleryItems.forEach((it, i) => it.addEventListener('click', () => openLb(i)));
                lb.querySelector('.lb-close').addEventListener('click', closeLb);
                lb.querySelector('.lb-prev').addEventListener('click', (e) => { e.stopPropagation(); show(idx - 1); });
                lb.querySelector('.lb-next').addEventListener('click', (e) => { e.stopPropagation(); show(idx + 1); });
                lb.addEventListener('click', (e) => { if (e.target === lb) closeLb(); });
                document.addEventListener('keydown', (e) => {
                    if (!lb.classList.contains('open')) return;
                    if (e.key === 'Escape') closeLb();
                    else if (e.key === 'ArrowLeft') show(idx - 1);
                    else if (e.key === 'ArrowRight') show(idx + 1);
                });
            }
        });
    </script>
</body>
</html>
