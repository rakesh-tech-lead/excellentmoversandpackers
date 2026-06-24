<style>
	/* Basic navigation styling */
#navbar ul {
    list-style-type: none;
    padding: 0;
    display: flex;
    align-items: center;
}

#navbar li {
    position: relative;
}

#navbar a {
    display: block;
    padding: 10px 12px;
    text-decoration: none;
    color: var(--dark-color);
    font-weight: 600;
    white-space: nowrap;
}

/* Slightly tighten the desktop nav on mid-size screens so all items fit on one line */
@media (min-width: 993px) and (max-width: 1200px) {
    #navbar a { padding: 10px 9px; font-size: 0.95rem; }
    .header-cta { margin-left: 14px; padding: 9px 14px; }
    .logo img { height: 50px; }
}

#navbar > ul > li > a:not(.header-cta) {
    position: relative;
}

#navbar > ul > li > a:not(.header-cta):after {
    content: '';
    position: absolute;
    bottom: 2px;
    left: 12px;
    width: 0;
    height: 2px;
    background: var(--secondary-color);
    transition: var(--transition);
}

#navbar > ul > li > a:not(.header-cta):hover:after {
    width: calc(100% - 24px);
}

/* Dropdown menu styling */
.dropdown {
    position: relative;
}

.dropdown > .dropbtn:after {
    content: ' \25BE';
    font-size: 0.8em;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: var(--white);
    min-width: 230px;
    box-shadow: var(--shadow-md);
    border-radius: 10px;
    overflow: hidden;
    z-index: 1;
    padding: 6px 0;
    border: 1px solid var(--border);
}

.dropdown-content a {
    color: var(--text-color);
    padding: 11px 18px;
    font-weight: 500;
    display: block;
}

.dropdown-content a:hover {
    background-color: var(--light-color);
    color: var(--primary-color);
}

/* Show the dropdown when hovering over the parent li (desktop) */
@media (min-width: 993px) {
    .dropdown:hover .dropdown-content,
    .dropdown.open .dropdown-content {
        display: block;
    }
}

/* Mobile + tablet: dropdown becomes inline accordion inside the slide-in nav */
@media (max-width: 992px) {
    .dropdown-content {
        position: static;
        box-shadow: none;
        border: none;
        border-radius: 0;
        min-width: 0;
        padding-left: 12px;
        background: var(--light-color);
    }
    .dropdown.open .dropdown-content {
        display: block;
    }
}
</style>

<?php
/* Shared business contact details for CTAs */
$emp_phone_disp = '+91 82955 88602';
$emp_phone_tel  = '+918295588602';
$emp_whatsapp   = '918295588602';
$emp_email      = 'excellentmoversandpackers68@gmail.com';
?>

<header>
    <!-- Top contact bar (desktop / tablet) -->
    <div class="top-bar">
        <div class="top-bar-inner">
            <div class="top-contacts">
                <a href="tel:<?php echo $emp_phone_tel; ?>">📞 <?php echo $emp_phone_disp; ?></a>
                <a href="mailto:<?php echo $emp_email; ?>">✉️ <?php echo $emp_email; ?></a>
                <span>🕒 Mon–Sat: 8AM–8PM</span>
            </div>
            <div class="top-social">
                <a href="https://wa.me/<?php echo $emp_whatsapp; ?>" target="_blank" rel="noopener">WhatsApp</a>
                <a href="#" aria-label="Facebook">Facebook</a>
                <a href="#" aria-label="Instagram">Instagram</a>
            </div>
        </div>
    </div>

    <div class="container header-container">
        <div class="logo">
            <a href="/"><img src="/excellent_movers_packers.png" alt="Excellent Movers & Packers Logo" style="height: 60px; width: auto;"></a>
        </div>
        <div class="header-actions">
            <nav id="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Services</a>
                        <div class="dropdown-content">
                            <a href="https://excellentmoversandpackers.com/packers-movers/home-relocation.php">Home Relocation</a>
                            <a href="https://excellentmoversandpackers.com/packers-movers/office-relocation.php">Office Relocation</a>
                            <a href="https://excellentmoversandpackers.com/packers-movers/packing-unpacking.php">Packing &amp; Unpacking</a>
                            <a href="https://excellentmoversandpackers.com/packers-movers/furniture-assembly.php">Furniture Assembly</a>
                            <a href="https://excellentmoversandpackers.com/packers-movers/storage-solutions.php">Storage Solutions</a>
                            <a href="https://excellentmoversandpackers.com/packers-movers/vehicle-transportation.php">Vehicle Transportation</a>
                        </div>
                    </li>
                    <li><a href="https://excellentmoversandpackers.com/areas/">Areas</a></li>
                    <li><a href="https://excellentmoversandpackers.com/states/">States</a></li>
                    <li><a href="/#about">About</a></li>
                    <li><a href="/#why-us">Why Us</a></li>
                    <li><a href="https://excellentmoversandpackers.com/blog/">Blog</a></li>
                    <li><a href="https://excellentmoversandpackers.com/faq.php">FAQ</a></li>
                    <li><a href="https://excellentmoversandpackers.com/contact-us.php">Contact Us</a></li>
                </ul>
            </nav>
            <a href="tel:<?php echo $emp_phone_tel; ?>" class="header-cta">📞 Call Now</a>
            <button class="mobile-menu-btn" aria-label="Toggle menu" aria-expanded="false">☰</button>
        </div>
    </div>
</header>


<script>
    // Toggle the Services dropdown on click (works on desktop + mobile)
    document.querySelectorAll('.dropdown > .dropbtn').forEach(function (btn) {
        btn.addEventListener('click', function (event) {
            event.preventDefault();
            btn.parentElement.classList.toggle('open');
        });
    });
</script>
