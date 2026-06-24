<?php 

$title = "Contact Us | Excellent Movers and Packers Visakhapatnam";
$description = "Contact Excellent Movers and Packers in Visakhapatnam for professional moving, packing and relocation services. Call +91 82955 88602 or send us a message for a free quote today.";
$keywords = "contact movers Visakhapatnam, moving company contact, packers contact Vizag, relocation services contact, moving quote Visakhapatnam";
$canonical = "https://excellentmoversandpackers.com/contact-us.php";
include('header.php')
?>
<?php include('css.php') ?>
<style>
	.hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/movers-packers/excellent-movers-and-packers-faq.jpeg?height=800&width=1600') no-repeat center center/cover;
	}
	
	 :root {
            --primary-color: #0056b3;
            --secondary-color: #00a86b;
            --accent-color: #ffc107;
            --dark-color: #333;
            --light-color: #f8f9fa;
            --text-color: #444;
            --white: #fff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
            --error-color: #dc3545;
            --success-color: #28a745;
        }
        
	  /* Contact Section Styles */
        .contact-section {
            padding: 80px 0;
        }
        
        .contact-intro {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 50px;
        }
        
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }
        
        .contact-form-container {
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 40px;
        }
        
        .contact-info {
            background-color: var(--primary-color);
            color: var(--white);
            border-radius: 10px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .contact-info h3 {
            color: var(--white);
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .contact-info h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--accent-color);
        }
        
        .info-item {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
        }
        
        .info-item i {
            margin-right: 15px;
            font-size: 1.2rem;
            color: var(--accent-color);
        }
        
        .social-links {
            margin-top: 30px;
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            color: var(--white);
            margin-right: 10px;
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background-color: var(--accent-color);
            color: var(--dark-color);
            transform: translateY(-3px);
        }
        
        .contact-form h3 {
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.1);
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .btn {
            display: inline-block;
            background: var(--primary-color);
            color: var(--white);
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
        
        .btn:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }
        
        .btn-block {
            display: block;
            width: 100%;
        }
        
        .error-message {
            color: var(--error-color);
            font-size: 0.9rem;
            margin-top: 5px;
            display: none;
        }
        
        .success-message {
            background-color: var(--success-color);
            color: var(--white);
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            display: none;
        }
        
        /* Map Section */
        .map-section {
            padding: 0 0 80px;
        }
        
        .map-container {
            height: 450px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
        
        /* Footer Styles */
        footer {
            background-color: var(--dark-color);
            color: var(--white);
            padding: 50px 0 20px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-col h3 {
            color: var(--white);
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-col h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--secondary-color);
        }
        
        .footer-logo img {
            height: 80px;
            width: auto;
            margin-bottom: 20px;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ccc;
        }
        
        .footer-links a:hover {
            color: var(--secondary-color);
            padding-left: 5px;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #aaa;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.8rem;
            }
        }
        
        @media (max-width: 768px) {
            nav ul {
                display: none;
            }
            
            .contact-form-container {
                padding: 30px;
            }
            
            .map-container {
                height: 350px;
            }
        }
        
        @media (max-width: 576px) {
            .contact-form-container {
                padding: 20px;
            }
            
            .btn {
                padding: 10px 20px;
                font-size: 0.8rem;
            }
            
            .map-container {
                height: 300px;
            }
        }
</style>
<?php include('navigation.php') ?>
 <section id="home" class="hero">
        <div class="container hero-content">
            <h1>Contact Us | Excellent Movers and Packers Visakhapatnam</h1>
            <div>
                <a href="#contact" class="btn">Get Free Quote</a>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-intro">
                <h1>Contact Us</h1>
                <p>Have questions about our moving and packing services in Visakhapatnam? Need a quote for your upcoming move? We're here to help! Fill out the form below or use our contact information to get in touch with our team.</p>
            </div>

            <div class="contact-container">
                <div class="contact-form-container">
                    <div class="success-message" id="successMessage">
                        Opening WhatsApp with your enquiry details… If it doesn't open automatically, please call us at +91 82955 88602.
                    </div>

                    <div class="contact-form">
                        <h3>Get a Free Quote</h3>
                        <form id="contactForm" action="#" method="POST" novalidate>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Full Name*</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <div class="error-message" id="nameError">Please enter your name</div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address*</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="error-message" id="emailError">Please enter a valid email address</div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="phone">Phone Number*</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                    <div class="error-message" id="phoneError">Please enter a valid phone number</div>
                                </div>
                                <div class="form-group">
                                    <label for="moveDate">Planned Moving Date</label>
                                    <input type="date" class="form-control" id="moveDate" name="moveDate">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="moveType">Type of Move*</label>
                                <select class="form-control" id="moveType" name="moveType" required>
                                    <option value="">Select Move Type</option>
                                    <option value="Local Residential">Local Residential Move</option>
                                    <option value="Long Distance Residential">Long Distance Residential Move</option>
                                    <option value="Office/Commercial">Office/Commercial Move</option>
                                    <option value="Packing Services Only">Packing Services Only</option>
                                    <option value="Storage Services">Storage Services</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="error-message" id="moveTypeError">Please select a move type</div>
                            </div>
                            
                            <div class="form-group">
                                <label for="moveFrom">Moving From (Location)*</label>
                                <input type="text" class="form-control" id="moveFrom" name="moveFrom" required>
                                <div class="error-message" id="moveFromError">Please enter your current location</div>
                            </div>
                            
                            <div class="form-group">
                                <label for="moveTo">Moving To (Location)*</label>
                                <input type="text" class="form-control" id="moveTo" name="moveTo" required>
                                <div class="error-message" id="moveToError">Please enter your destination</div>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Additional Details*</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                <div class="error-message" id="messageError">Please provide some details about your move</div>
                            </div>
                            
                            <button type="submit" class="btn btn-block" style="background:#25d366;border-color:#25d366;color:#fff;">💬 Send on WhatsApp</button>
                        </form>
                    </div>
                </div>
                
                <div class="contact-info">
                    <div>
                        <h3>Contact Information</h3>
                        <div class="info-item">
                            <i>📍</i>
                            <div>
                                <p>S/O Tallewar Dammayya, D NO 3-19/5,</p>
                                <p>Saniwada, Aganampudi,</p>
                                <p>Visakhapatnam, Andhra Pradesh, 530046</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i>📞</i>
                            <div>
                                <p>+91 82955 88602</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i>✉️</i>
                            <div>
                                <p>info@excellentmoversandpackers.com</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i>⏰</i>
                            <div>
                                <p>Monday - Saturday: 8:00 AM - 8:00 PM</p>
                                <p>Sunday: 9:00 AM - 5:00 PM</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="#" aria-label="Facebook">f</a>
                        <a href="#" aria-label="Twitter">t</a>
                        <a href="#" aria-label="Instagram">i</a>
                        <a href="#" aria-label="LinkedIn">l</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="map-container">
                <!-- Replace the src with your actual Google Maps embed code for your location in Visakhapatnam -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121064.12364621105!2d83.1596273582031!3d17.73268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1710099284112!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

<script>
(function () {
    var form = document.getElementById('contactForm');
    if (!form) return;
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        if (!form.checkValidity()) { form.reportValidity(); return; }
        var g = function (id) { var el = document.getElementById(id); return el ? el.value.trim() : ''; };
        var typeSel = document.getElementById('moveType');
        var moveType = typeSel && typeSel.value ? typeSel.value : '';
        var text = "Hi, I'd like a free moving quote.\n\n"
            + "Name: " + g('name') + "\n"
            + "Phone: " + g('phone') + "\n"
            + (g('email') ? "Email: " + g('email') + "\n" : "")
            + "Move Type: " + moveType + "\n"
            + "From: " + g('moveFrom') + "\n"
            + "To: " + g('moveTo') + "\n"
            + (g('moveDate') ? "Preferred Date: " + g('moveDate') + "\n" : "")
            + "Details: " + g('message');
        window.open("https://wa.me/918295588602?text=" + encodeURIComponent(text), "_blank");
        var sm = document.getElementById('successMessage');
        if (sm) { sm.style.display = 'block'; sm.scrollIntoView({ behavior: 'smooth', block: 'center' }); }
        form.reset();
    });
})();
</script>
<?php include('footer.php') ?>
<?php include('js.php') ?>