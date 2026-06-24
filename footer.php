<?php include __DIR__ . '/locations-links.php'; ?>

<!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>Excellent Movers & Packers</h3>
					<div style="background:white;">
						<img src="/excellent_movers_packers.png" alt="Excellent Movers & Packers Logo" style="scale:1;">
					</div>
                    <p>Professional moving and packing services in Visakhapatnam, Andhra Pradesh. We make your relocation stress-free and efficient.</p>
                    <?php
                    $emp_socials = function_exists('emp_social_links') ? emp_social_links() : array();
                    $emp_social_labels = array('google'=>'Google','facebook'=>'Facebook','instagram'=>'Instagram','justdial'=>'JustDial','sulekha'=>'Sulekha','youtube'=>'YouTube','linkedin'=>'LinkedIn');
                    ?>
                    <div class="social-links">
                        <a href="https://wa.me/918295588602" target="_blank" rel="noopener" aria-label="WhatsApp">WA</a>
                        <?php foreach ($emp_socials as $emp_sk => $emp_su): ?>
                        <a href="<?php echo $emp_su; ?>" target="_blank" rel="noopener" aria-label="<?php echo isset($emp_social_labels[$emp_sk]) ? $emp_social_labels[$emp_sk] : $emp_sk; ?>"><?php echo strtoupper(substr($emp_sk, 0, 2)); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#why-us">Why Choose Us</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="#services">Home Relocation</a></li>
                        <li><a href="#services">Office Relocation</a></li>
                        <li><a href="#services">Packing & Unpacking</a></li>
                        <li><a href="#services">Furniture Assembly</a></li>
                        <li><a href="#services">Storage Solutions</a></li>
                        <li><a href="#services">Vehicle Transportation</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Popular Areas</h3>
                    <ul class="footer-links">
                        <li><a href="/areas/mvp-colony">Packers &amp; Movers MVP Colony</a></li>
                        <li><a href="/areas/madhurawada">Packers &amp; Movers Madhurawada</a></li>
                        <li><a href="/areas/kurmannapalem-gajuwaka">Packers &amp; Movers Gajuwaka</a></li>
                        <li><a href="/areas/gopalapatnam">Packers &amp; Movers Gopalapatnam</a></li>
                        <li><a href="/areas/pendurthi">Packers &amp; Movers Pendurthi</a></li>
                        <li><a href="/areas/">View All Service Areas</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Info</h3>
                    <ul class="footer-links">
                        <li>S/O Tallewar</li>
                        <li>Dammayya, D NO 3-19/5,</li>
						<li>Saniwada, Aganampudi,</li>
						<li>Visakhapatnam, Andhra Pradesh, 530046</li>
						<li>Phone: <a href="tel:+918295588602">+91 82955 88602</a></li>
                        <li>Email: <a href="mailto:excellentmoversandpackers68@gmail.com">excellentmoversandpackers68@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
				<p>Develop & Design by <a href="https://rkaybhaker.github.io/Profile/" target="_blank">Rakesh Bhaker</a> &copy; 2025 Excellent Movers and Packers. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating action buttons (call + WhatsApp) -->
    <div class="fab-stack">
        <a class="fab fab-whatsapp" href="https://wa.me/918295588602?text=Hi%2C%20I%20need%20a%20quote%20for%20moving%20and%20packing%20services." target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
            <svg viewBox="0 0 32 32" width="30" height="30" fill="currentColor" aria-hidden="true"><path d="M16.04 4C9.96 4 5.02 8.94 5.02 15.02c0 1.94.51 3.84 1.48 5.51L4.93 28l7.66-1.55a11 11 0 0 0 5.43 1.42h.01c6.08 0 11.02-4.94 11.02-11.02C29.05 8.94 24.12 4 16.04 4zm6.46 15.74c-.27.76-1.6 1.46-2.2 1.52-.59.06-1.13.27-3.8-.8-3.21-1.27-5.25-4.57-5.41-4.78-.16-.21-1.3-1.72-1.3-3.28s.82-2.33 1.11-2.65c.29-.32.63-.4.84-.4.21 0 .42 0 .6.01.19.01.45-.07.7.54.27.65.92 2.25 1 2.41.08.16.13.35.02.56-.11.21-.16.35-.32.54-.16.19-.34.42-.48.56-.16.16-.33.33-.14.65.19.32.84 1.39 1.81 2.25 1.24 1.11 2.29 1.45 2.61 1.61.32.16.51.13.7-.08.19-.21.81-.94 1.03-1.27.21-.32.43-.27.72-.16.29.11 1.85.87 2.17 1.03.32.16.53.24.6.37.08.14.08.74-.19 1.5z"/></svg>
        </a>
        <a class="fab fab-call" href="tel:+918295588602" aria-label="Call now">
            <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor" aria-hidden="true"><path d="M6.62 10.79a15.5 15.5 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24 11.4 11.4 0 0 0 3.57.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57a1 1 0 0 1-.25 1.02l-2.2 2.2z"/></svg>
        </a>
    </div>

    <!-- Mobile sticky call / quote bar -->
    <div class="mobile-cta-bar">
        <a class="mc-call" href="tel:+918295588602">📞 Call Now</a>
        <a class="mc-quote" href="https://wa.me/918295588602?text=Hi%2C%20I%20need%20a%20free%20quote." target="_blank" rel="noopener">
            <svg viewBox="0 0 32 32" width="18" height="18" fill="currentColor" aria-hidden="true" style="vertical-align:-3px;"><path d="M16.04 4C9.96 4 5.02 8.94 5.02 15.02c0 1.94.51 3.84 1.48 5.51L4.93 28l7.66-1.55a11 11 0 0 0 5.43 1.42h.01c6.08 0 11.02-4.94 11.02-11.02C29.05 8.94 24.12 4 16.04 4zm6.46 15.74c-.27.76-1.6 1.46-2.2 1.52-.59.06-1.13.27-3.8-.8-3.21-1.27-5.25-4.57-5.41-4.78-.16-.21-1.3-1.72-1.3-3.28s.82-2.33 1.11-2.65c.29-.32.63-.4.84-.4.21 0 .42 0 .6.01.19.01.45-.07.7.54.27.65.92 2.25 1 2.41.08.16.13.35.02.56-.11.21-.16.35-.32.54-.16.19-.34.42-.48.56-.16.16-.33.33-.14.65.19.32.84 1.39 1.81 2.25 1.24 1.11 2.29 1.45 2.61 1.61.32.16.51.13.7-.08.19-.21.81-.94 1.03-1.27.21-.32.43-.27.72-.16.29.11 1.85.87 2.17 1.03.32.16.53.24.6.37.08.14.08.74-.19 1.5z"/></svg> Free Quote</a>
    </div>