<?php 

$title = "Furniture Assembly Services | Excellent Movers and Packers Visakhapatnam";
$description = "Professional furniture assembly and disassembly services in Visakhapatnam. Excellent Movers and Packers ensures your furniture is safely taken apart, transported, and reassembled at your new location.";
$keywords = "furniture assembly Visakhapatnam, furniture disassembly, furniture installation, furniture setup, furniture reassembly, moving furniture";


include('../header.php') 
?>
<?php include('../css.php') ?>
<style>    
        /* Hero Section */
        .hero-section {
             background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../movers-packers/excellent-movers-and-packers-faq.jpeg?height=800&width=1600') no-repeat center center/cover;
            color: var(--white);
            padding: 100px 0;
            text-align: center;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero-content h1 {
            color: var(--white);
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
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
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--white);
        }
        
        .btn-outline:hover {
            background: var(--white);
            color: var(--primary-color);
        }
        
        /* Service Overview Section */
        .service-overview {
            padding: 80px 0;
        }
        
        .overview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }
        
        .overview-item {
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 30px;
            transition: var(--transition);
        }
        
        .overview-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .overview-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .overview-item h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        /* Furniture Types Section */
        .furniture-types {
            padding: 80px 0;
            background-color: var(--white);
        }
        
        .types-container {
            margin-top: 40px;
        }
        
        .type-item {
            background-color: var(--light-color);
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 30px;
            margin-bottom: 30px;
            display: flex;
            flex-wrap: wrap;
        }
        
        .type-image {
            flex: 0 0 300px;
            margin-right: 30px;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .type-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .type-content {
            flex: 1;
            min-width: 300px;
        }
        
        .type-content h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        /* Process Section */
        .process-section {
            padding: 80px 0;
            background-color: var(--light-color);
        }
        
        .process-container {
            margin-top: 40px;
        }
        
        .process-step {
            display: flex;
            margin-bottom: 50px;
            position: relative;
        }
        
        .process-step:last-child {
            margin-bottom: 0;
        }
        
        .step-number {
            flex: 0 0 80px;
            height: 80px;
            background-color: var(--primary-color);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.8rem;
            font-weight: 700;
            margin-right: 30px;
        }
        
        .step-content {
            flex: 1;
        }
        
        .step-content h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .process-step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 80px;
            left: 40px;
            width: 2px;
            height: calc(100% - 30px);
            background-color: var(--primary-color);
        }
        
        /* Benefits Section */
        .benefits-section {
            padding: 80px 0;
            background-color: var(--white);
        }
        
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .benefit-item {
            background-color: var(--light-color);
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 25px;
            transition: var(--transition);
            border-top: 4px solid var(--primary-color);
        }
        
        .benefit-item h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        /* FAQ Section */
        .faq-section {
            padding: 80px 0;
            background-color: var(--light-color);
        }
        
        .faq-container {
            margin-top: 40px;
        }
        
        .faq-item {
            margin-bottom: 20px;
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .faq-question {
            background-color: var(--white);
            padding: 15px 20px;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .faq-question:hover {
            background-color: #e9ecef;
        }
        
        .faq-question::after {
            content: '+';
            font-size: 1.5rem;
            transition: var(--transition);
        }
        
        .faq-item.active .faq-question::after {
            content: '-';
        }
        
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            background-color: var(--white);
        }
        
        .faq-item.active .faq-answer {
            padding: 20px;
            max-height: 1000px;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('/placeholder.svg?height=400&width=1200') no-repeat center center/cover;
            color: var(--white);
            text-align: center;
        }
        
        .cta-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .cta-content h2 {
            color: var(--white);
            margin-bottom: 20px;
        }
        
        .cta-content h2:after {
            left: 50%;
            transform: translateX(-50%);
            background: var(--white);
        }
        
        .cta-buttons {
            margin-top: 30px;
        }
        
        .cta-buttons .btn {
            margin: 0 10px;
        }
        
        /* Testimonial Section */
        .testimonial-section {
            padding: 80px 0;
            background-color: var(--light-color);
        }
        
        .testimonial-container {
            margin-top: 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-item {
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 30px;
            position: relative;
        }
        
        .testimonial-item::before {
            content: '"';
            font-size: 5rem;
            color: rgba(0, 86, 179, 0.1);
            position: absolute;
            top: 10px;
            left: 20px;
            line-height: 1;
        }
        
        .testimonial-content {
            position: relative;
            z-index: 1;
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }
        
        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .author-info h4 {
            margin-bottom: 5px;
        }
        
        .author-info p {
            color: #777;
            font-size: 0.9rem;
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
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .type-image {
                flex: 0 0 250px;
                margin-right: 20px;
            }
        }
        
        @media (max-width: 768px) {
            nav ul {
                display: none;
            }
            
            .hero-content h1 {
                font-size: 2.2rem;
            }
            
            .type-item {
                flex-direction: column;
            }
            
            .type-image {
                flex: 0 0 auto;
                margin-right: 0;
                margin-bottom: 20px;
                max-width: 100%;
            }
            
            .process-step {
                flex-direction: column;
            }
            
            .step-number {
                margin-bottom: 20px;
                margin-right: 0;
            }
            
            .process-step:not(:last-child)::after {
                display: none;
            }
            
            .cta-buttons .btn {
                display: block;
                margin: 10px auto;
                max-width: 200px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1rem;
            }
            
            .btn {
                padding: 10px 20px;
                font-size: 0.8rem;
            }
        }
    </style>

<?php include('../navigation.php') ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>Furniture Assembly & Disassembly Services</h1>
                <p>Expert furniture assembly and disassembly services in Visakhapatnam. We handle everything from IKEA furniture to complex custom pieces with precision and care.</p>
                <div class="hero-buttons">
                    <a href="../contact-us.php" class="btn">Get a Free Quote</a>
                    <a href="#furniture-types" class="btn btn-outline">Furniture We Handle</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview Section -->
    <section class="service-overview">
        <div class="container">
            <h2>Our Furniture Assembly Services</h2>
            <p>At Excellent Movers and Packers, we understand that furniture assembly and disassembly can be challenging, time-consuming, and sometimes frustrating. Our professional furniture assembly services are designed to save you time, prevent damage to your furniture, and ensure everything is properly set up in your new space.</p>
            
            <div class="overview-grid">
                <div class="overview-item">
                    <div class="overview-icon">🔧</div>
                    <h3>Furniture Disassembly</h3>
                    <p>Our skilled technicians carefully take apart your furniture for safe transportation, labeling all components and hardware to ensure nothing gets lost during the move.</p>
                </div>
                
                <div class="overview-item">
                    <div class="overview-icon">🛠️</div>
                    <h3>Furniture Reassembly</h3>
                    <p>We reassemble your furniture at your new location according to manufacturer specifications, ensuring everything is stable, properly aligned, and ready to use.</p>
                </div>
                
                <div class="overview-item">
                    <div class="overview-icon">📦</div>
                    <h3>New Furniture Assembly</h3>
                    <p>Purchased new furniture that comes in boxes? Our team can assemble it for you, saving you time and the frustration of deciphering complex instructions.</p>
                </div>
                
                <div class="overview-item">
                    <div class="overview-icon">🏠</div>
                    <h3>Furniture Placement</h3>
                    <p>We position your assembled furniture according to your preferences, helping you arrange your space exactly as you envision it.</p>
                </div>
                
                <div class="overview-item">
                    <div class="overview-icon">🔩</div>
                    <h3>Hardware Management</h3>
                    <p>We keep track of all screws, bolts, and other hardware during disassembly, ensuring everything is available when it's time to reassemble your furniture.</p>
                </div>
                
                <div class="overview-item">
                    <div class="overview-icon">🧰</div>
                    <h3>Professional Tools</h3>
                    <p>Our team comes equipped with professional-grade tools specifically designed for furniture assembly and disassembly, ensuring efficient and damage-free service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Furniture Types Section -->
    <section id="furniture-types" class="furniture-types">
        <div class="container">
            <h2>Types of Furniture We Handle</h2>
            <p>Our experienced team is skilled in assembling and disassembling a wide range of furniture types, from simple pieces to complex custom installations.</p>
            
            <div class="types-container">
                <div class="type-item">
                    <div class="type-image">
                        <img src="/placeholder.svg?height=250&width=300" alt="Bedroom Furniture">
                    </div>
                    <div class="type-content">
                        <h3>Bedroom Furniture</h3>
                        <p>We expertly handle all types of bedroom furniture, including:</p>
                        <ul>
                            <li>Bed frames and headboards of all sizes and styles</li>
                            <li>Wardrobes and armoires, including mirrored and sliding door designs</li>
                            <li>Dressers and chest of drawers</li>
                            <li>Nightstands and bedside tables</li>
                            <li>Vanity tables and mirrors</li>
                            <li>Storage beds with hydraulic mechanisms</li>
                            <li>Bunk beds and loft beds</li>
                        </ul>
                        <p>We take special care with bedroom furniture to ensure it's stable and safe, particularly for beds and children's furniture.</p>
                    </div>
                </div>
                
                <div class="type-item">
                    <div class="type-image">
                        <img src="/placeholder.svg?height=250&width=300" alt="Living Room Furniture">
                    </div>
                    <div class="type-content">
                        <h3>Living Room Furniture</h3>
                        <p>Our team is experienced in handling living room furniture such as:</p>
                        <ul>
                            <li>Sofas and sectionals, including those with reclining mechanisms</li>
                            <li>Entertainment centers and TV stands</li>
                            <li>Bookshelves and display cabinets</li>
                            <li>Coffee tables and side tables</li>
                            <li>Console tables and media units</li>
                            <li>Wall units and modular shelving systems</li>
                            <li>Recliners and accent chairs</li>
                        </ul>
                        <p>We ensure all mechanisms work properly and that entertainment units are stable and correctly aligned.</p>
                    </div>
                </div>
                
                <div class="type-item">
                    <div class="type-image">
                        <img src="/placeholder.svg?height=250&width=300" alt="Dining Room Furniture">
                    </div>
                    <div class="type-content">
                        <h3>Dining Room Furniture</h3>
                        <p>We assemble and disassemble dining room furniture including:</p>
                        <ul>
                            <li>Dining tables of all shapes and sizes</li>
                            <li>Dining chairs and benches</li>
                            <li>China cabinets and hutches</li>
                            <li>Buffets and sideboards</li>
                            <li>Bar carts and serving trolleys</li>
                            <li>Extendable and drop-leaf tables</li>
                            <li>Kitchen islands and breakfast bars</li>
                        </ul>
                        <p>We pay special attention to the stability of dining tables and the proper functioning of extension mechanisms.</p>
                    </div>
                </div>
                
                <div class="type-item">
                    <div class="type-image">
                        <img src="/placeholder.svg?height=250&width=300" alt="Office Furniture">
                    </div>
                    <div class="type-content">
                        <h3>Office Furniture</h3>
                        <p>Our expertise extends to office furniture such as:</p>
                        <ul>
                            <li>Desks and workstations</li>
                            <li>Office chairs and task seating</li>
                            <li>Filing cabinets and storage units</li>
                            <li>Bookcases and shelving systems</li>
                            <li>Conference tables and meeting room furniture</li>
                            <li>Standing desks and adjustable height workstations</li>
                            <li>Cubicle and partition systems</li>
                        </ul>
                        <p>We ensure all ergonomic features and adjustment mechanisms work properly for your comfort and productivity.</p>
                    </div>
                </div>
                
                <div class="type-item">
                    <div class="type-image">
                        <img src="/placeholder.svg?height=250&width=300" alt="Specialty Furniture">
                    </div>
                    <div class="type-content">
                        <h3>Specialty and Custom Furniture</h3>
                        <p>We also handle specialty and custom furniture including:</p>
                        <ul>
                            <li>IKEA and other flat-pack furniture brands</li>
                            <li>Wall-mounted shelving and entertainment systems</li>
                            <li>Murphy beds and wall beds</li>
                            <li>Custom built-in units and cabinetry</li>
                            <li>Outdoor and patio furniture</li>
                            <li>Gym equipment and home fitness stations</li>
                            <li>Children's furniture and play equipment</li>
                        </ul>
                        <p>Our team has experience with a wide range of furniture brands and styles, ensuring proper assembly regardless of complexity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2>Our Furniture Assembly Process</h2>
            <p>We follow a systematic approach to ensure your furniture is properly disassembled, transported, and reassembled with care and precision.</p>
            
            <div class="process-container">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Initial Assessment</h3>
                        <p>Our technicians assess each piece of furniture to determine the best approach for disassembly or assembly. We identify any special requirements, potential challenges, and the tools needed for the job. For new furniture, we review the manufacturer's instructions to understand the assembly process.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Preparation and Space Organization</h3>
                        <p>We prepare the work area by clearing space and laying down protective materials if needed. For disassembly, we set up containers to organize hardware and small components. For new furniture assembly, we unpack all components and arrange them in a logical order.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Systematic Disassembly</h3>
                        <p>For furniture that needs to be moved, we carefully disassemble each piece in the reverse order of assembly. We document the process with photos when necessary and use a labeling system to mark components and hardware. All small parts are placed in labeled bags and securely attached to the corresponding furniture pieces.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Protective Wrapping</h3>
                        <p>After disassembly, we wrap individual components with appropriate protective materials. Delicate surfaces receive extra padding, and hardware packages are securely attached to the main components to prevent loss during transportation.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Safe Transportation</h3>
                        <p>We carefully load the disassembled furniture into our vehicles, securing components to prevent movement during transit. For new furniture, we transport the unopened boxes with proper handling to avoid damage.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Reassembly Planning</h3>
                        <p>At your new location, we discuss the placement of each furniture piece with you before beginning reassembly. We ensure there's adequate space for assembly and that the final position meets your requirements.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">7</div>
                    <div class="step-content">
                        <h3>Precise Reassembly</h3>
                        <p>We carefully reassemble each piece of furniture according to the manufacturer's specifications or our documentation from disassembly. We use the proper tools and techniques to ensure everything is correctly aligned, tightened, and stable.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">8</div>
                    <div class="step-content">
                        <h3>Quality Check</h3>
                        <p>After assembly, we perform a thorough quality check to ensure all components are properly installed, all hardware is tightened, and all moving parts function correctly. We test drawers, doors, reclining mechanisms, and other functional elements.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">9</div>
                    <div class="step-content">
                        <h3>Final Placement and Cleanup</h3>
                        <p>We position the assembled furniture in its final location according to your preferences. We then clean up the work area, removing all packaging materials, debris, and tools, leaving your space neat and ready to use.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <h2>Benefits of Professional Furniture Assembly</h2>
            <p>Hiring our professional furniture assembly and disassembly services offers numerous advantages that save you time, prevent damage, and ensure your furniture is properly set up.</p>
            
            <div class="benefits-grid">
                <div class="benefit-item">
                    <h3>Time Saving</h3>
                    <p>What might take you hours or even days to complete, our experienced team can accomplish efficiently and quickly, allowing you to focus on other aspects of your move or home setup.</p>
                </div>
                
                <div class="benefit-item">
                    <h3>Proper Tools and Expertise</h3>
                    <p>Our technicians come equipped with professional-grade tools specifically designed for furniture assembly and have the expertise to handle complex pieces that require specialized knowledge.</p>
                </div>
                
                <div class="benefit-item">
                    <h3>Damage Prevention</h3>
                    <p>Improper disassembly or assembly can damage furniture. Our professional approach ensures your pieces are handled correctly, preserving their integrity and appearance.</p>
                </div>
                
                <div class="benefit-item">
                    <h3>Safety Assurance</h3>
                    <p>Properly assembled furniture is safer to use. We ensure all components are correctly installed and secured, reducing the risk of accidents or injuries from unstable furniture.</p>
                </div>
                
                <div class="benefit-item">
                    <h3>Stress Reduction</h3>
                    <p>Furniture assembly can be frustrating and stressful, especially with complex pieces or unclear instructions. Our service eliminates this stress, providing peace of mind.</p>
                </div>
                
                <div class="benefit-item">
                    <h3>Warranty Protection</h3>
                    <p>Some furniture warranties require professional assembly. Our service helps ensure your warranty remains valid, protecting your investment in quality furniture.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2>Frequently Asked Questions About Furniture Assembly</h2>
            <p>Find answers to common questions about our furniture assembly and disassembly services in Visakhapatnam.</p>
            
            <div class="faq-container">
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="faq-question" itemprop="name">What types of furniture can you assemble and disassemble?</div>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>We can assemble and disassemble virtually all types of furniture, including but not limited to: beds and bedroom sets, wardrobes, sofas and sectionals, dining tables and chairs, entertainment centers, office furniture, bookshelves, IKEA and other flat-pack furniture, outdoor furniture, and specialty items like wall beds or custom built-ins. Our technicians are experienced with furniture from a wide range of manufacturers and styles, from simple pieces to complex custom installations.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="faq-question" itemprop="name">How long does furniture assembly typically take?</div>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>The time required for furniture assembly varies depending on the complexity and number of pieces. As a general guideline: simple items like a basic bed frame or small bookshelf typically take 30-60 minutes; medium-complexity items like a standard wardrobe or dining table with chairs take 1-2 hours; complex items like large entertainment centers, sectional sofas with recliners, or IKEA PAX wardrobes with custom configurations can take 2-4 hours. When we provide a quote, we'll give you a more specific time estimate based on your particular furniture items.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="faq-question" itemprop="name">Do I need to provide any tools or materials for the assembly?</div>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>No, our technicians come fully equipped with all the necessary tools and equipment for furniture assembly and disassembly. We bring professional-grade tools specifically designed for furniture work, including power drills, various screwdrivers, wrenches, Allen keys, mallets, and specialized furniture assembly tools. For new furniture, we use the hardware provided by the manufacturer. If any additional hardware is needed (such as replacement screws or bolts), we typically have common sizes available. For unusual or specialized hardware requirements, we'll let you know in advance if anything needs to be purchased.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="faq-question" itemprop="name">How do you ensure my furniture is assembled correctly and safely?</div>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>We take several measures to ensure correct and safe assembly: 1) Our technicians are trained in proper furniture assembly techniques and follow manufacturer instructions precisely; 2) We use the appropriate tools for each task to avoid damaging components or stripping screws; 3) We ensure all connections are properly tightened—not too loose, which could make the furniture unstable, and not too tight, which could damage the materials; 4) For items with moving parts like drawers or reclining mechanisms, we test functionality to ensure smooth operation; 5) We check the stability of the assembled furniture, making adjustments as needed; 6) For wall-mounted items, we use appropriate anchors and mounting hardware for your wall type; 7) We perform a final quality inspection after assembly is complete. Our goal is to ensure your furniture is not only aesthetically pleasing but also safe and functional.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="faq-question" itemprop="name">Can you disassemble furniture that wasn't originally assembled by your team?</div>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Yes, we can disassemble furniture that was assembled by someone else, including pieces that you assembled yourself or that came with your home. Our technicians are skilled at understanding furniture construction and can carefully take apart most types of furniture, even without the original instructions. We take extra care with older or antique furniture that may have unique joinery or delicate components. If we encounter any unusual mechanisms or construction methods, we'll assess the best approach to disassembly to prevent damage. We document the disassembly process as needed to ensure proper reassembly later.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="faq-question" itemprop="name">Do you offer furniture assembly for businesses and offices?</div>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Yes, we provide furniture assembly services for businesses and commercial spaces in Visakhapatnam. Our commercial furniture assembly services include: 1) Office furniture such as desks, workstations, conference tables, and filing cabinets; 2) Cubicle and partition systems; 3) Reception area furniture; 4) Break room and cafeteria furniture; 5) Executive office suites; 6) Commercial shelving and storage systems. We understand that business downtime is costly, so we can schedule assembly during evenings or weekends to minimize disruption to your operations. For large office setups, we can provide a team of technicians to complete the job efficiently. We also work with interior designers and office planners to ensure furniture is assembled according to the specified layout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <h2>What Our Customers Say</h2>
            <p>Read about the experiences of customers who have used our furniture assembly and disassembly services in Visakhapatnam.</p>
            
            <div class="testimonial-container">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>I recently purchased several pieces of IKEA furniture for my new apartment and was dreading the assembly process. The team from Excellent Movers arrived on time, worked efficiently, and assembled everything perfectly. What would have taken me days was completed in just a few hours. They even adjusted some wobbly pieces that I had attempted to assemble myself. Highly recommended!</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Aditya Kumar">
                        </div>
                        <div class="author-info">
                            <h4>Aditya Kumar</h4>
                            <p>Madhurawada, Visakhapatnam</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>We needed to move a large custom wall unit that seemed impossible to transport without damaging it. The furniture assembly team carefully disassembled it, labeled every piece, and reassembled it perfectly in our new home. They were meticulous, patient, and clearly knew what they were doing. The unit looks exactly as it did before, with no damage whatsoever.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Priya & Suresh Reddy">
                        </div>
                        <div class="author-info">
                            <h4>Priya & Suresh Reddy</h4>
                            <p>MVP Colony, Visakhapatnam</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>As a small business owner, I needed to set up our new office quickly. The furniture assembly team from Excellent Movers assembled all our desks, chairs, conference table, and storage units in one day. They were professional, efficient, and helped us arrange the furniture according to our floor plan. Their service allowed us to open our office on schedule without any delays.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Vikram Joshi">
                        </div>
                        <div class="author-info">
                            <h4>Vikram Joshi</h4>
                            <p>Dwaraka Nagar, Visakhapatnam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready for Expert Furniture Assembly?</h2>
                <p>Contact Excellent Movers and Packers today for professional furniture assembly and disassembly services in Visakhapatnam. Save time and ensure your furniture is properly assembled by our experienced technicians.</p>
                <div class="cta-buttons">
                    <a href="contact-us.html" class="btn">Get a Free Quote</a>
                    <a href="tel:+918295588602" class="btn btn-outline">Call Us: +91 82955 88602</a>
                </div>
            </div>
        </div>
    </section>   

    <!-- JavaScript for FAQ Accordion -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', function() {
                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });
                    
                    // Toggle current item
                    item.classList.toggle('active');
                });
            });
        });
    </script>

    <!-- Schema.org Markup for Furniture Assembly Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Furniture Assembly Service",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Excellent Movers and Packers",
            "image": "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/excellent_movers_packers-EymgZQsnErtXOQyIbQyAZyLzISMGEL.png",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "S/O Tallewar Dammayya, D NO 3-19/5, Saniwada, Aganampudi",
                "addressLocality": "Visakhapatnam",
                "addressRegion": "Andhra Pradesh",
                "postalCode": "530046",
                "addressCountry": "IN"
            },
            "telephone": "+918295588602",
            "priceRange": "₹₹-₹₹₹",
            "sameAs": ["https://www.excellentmoversandpackers.com"]
        },
        "areaServed": {
            "@type": "City",
            "name": "Visakhapatnam"
        },
        "description": "Professional furniture assembly and disassembly services in Visakhapatnam. We handle everything from IKEA furniture to complex custom pieces with precision and care.",
        "offers": {
            "@type": "Offer",
            "availability": "https://schema.org/InStock",
            "priceSpecification": {
                "@type": "PriceSpecification",
                "priceCurrency": "INR"
            }
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Furniture Assembly Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Furniture Disassembly"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Furniture Reassembly"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "New Furniture Assembly"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Furniture Placement"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Hardware Management"
                    }
                }
            ]
        },
        "review": [
            {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "5",
                    "bestRating": "5"
                },
                "author": {
                    "@type": "Person",
                    "name": "Aditya Kumar"
                },
                "reviewBody": "I recently purchased several pieces of IKEA furniture for my new apartment and was dreading the assembly process. The team from Excellent Movers arrived on time, worked efficiently, and assembled everything perfectly."
            },
            {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "5",
                    "bestRating": "5"
                },
                "author": {
                    "@type": "Person",
                    "name": "Priya & Suresh Reddy"
                },
                "reviewBody": "We needed to move a large custom wall unit that seemed impossible to transport without damaging it. The furniture assembly team carefully disassembled it, labeled every piece, and reassembled it perfectly in our new home."
            }
        ]
    }
    </script>

    <!-- Schema.org FAQ Page Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What types of furniture can you assemble and disassemble?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We can assemble and disassemble virtually all types of furniture, including but not limited to: beds and bedroom sets, wardrobes, sofas and sectionals, dining tables and chairs, entertainment centers, office furniture, bookshelves, IKEA and other flat-pack furniture, outdoor furniture, and specialty items like wall beds or custom built-ins."
                }
            },
            {
                "@type": "Question",
                "name": "How long does furniture assembly typically take?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The time required for furniture assembly varies depending on the complexity and number of pieces. As a general guideline: simple items like a basic bed frame or small bookshelf typically take 30-60 minutes; medium-complexity items like a standard wardrobe or dining table with chairs take 1-2 hours; complex items like large entertainment centers, sectional sofas with recliners, or IKEA PAX wardrobes with custom configurations can take 2-4 hours."
                }
            },
            {
                "@type": "Question",
                "name": "Do I need to provide any tools or materials for the assembly?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No, our technicians come fully equipped with all the necessary tools and equipment for furniture assembly and disassembly. We bring professional-grade tools specifically designed for furniture work, including power drills, various screwdrivers, wrenches, Allen keys, mallets, and specialized furniture assembly tools."
                }
            },
            {
                "@type": "Question",
                "name": "How do you ensure my furniture is assembled correctly and safely?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We take several measures to ensure correct and safe assembly: 1) Our technicians are trained in proper furniture assembly techniques and follow manufacturer instructions precisely; 2) We use the appropriate tools for each task to avoid damaging components or stripping screws; 3) We ensure all connections are properly tightened; 4) For items with moving parts like drawers or reclining mechanisms, we test functionality to ensure smooth operation; 5) We check the stability of the assembled furniture, making adjustments as needed."
                }
            },
            {
                "@type": "Question",
                "name": "Can you disassemble furniture that wasn't originally assembled by your team?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we can disassemble furniture that was assembled by someone else, including pieces that you assembled yourself or that came with your home. Our technicians are skilled at understanding furniture construction and can carefully take apart most types of furniture, even without the original instructions."
                }
            }
        ]
    }
    </script>
    <?php include('../footer.php') ?>
    <?php include('../js.php') ?>