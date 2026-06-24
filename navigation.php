<style>
	/* ===== Navigation ===== */
#navbar ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
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

#navbar > ul > li > a:not(.header-cta):hover:after,
#navbar > ul > li > a.active:after {
    width: calc(100% - 24px);
}

#navbar > ul > li > a.active {
    color: var(--primary-color);
}

/* Tighten the desktop nav on mid-size screens so all items fit on one line */
@media (min-width: 993px) and (max-width: 1200px) {
    #navbar a { padding: 10px 9px; font-size: 0.95rem; }
    .header-cta { margin-left: 14px; padding: 9px 14px; }
    .logo img { height: 50px; }
}

/* ===== Top-bar social icon buttons ===== */
.top-social a {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.12);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #dfe6f0;
    gap: 0;
    transition: var(--transition);
}
.top-social a:hover { background: var(--secondary-color); color: #fff; transform: translateY(-2px); }
.top-social svg { width: 16px; height: 16px; fill: currentColor; }

/* ===== Dropdown ===== */
.dropdown { position: relative; }
.dropdown > .dropbtn .caret {
    display: inline-block;
    margin-left: 4px;
    font-size: 0.7em;
    transition: transform 0.25s ease;
}
.dropdown.open > .dropbtn .caret { transform: rotate(180deg); }

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
.dropdown-content a { color: var(--text-color); padding: 11px 18px; font-weight: 500; display: block; }
.dropdown-content a:hover { background-color: var(--light-color); color: var(--primary-color); }

@media (min-width: 993px) {
    .dropdown:hover .dropdown-content,
    .dropdown.open .dropdown-content { display: block; }
}

/* ===== Mobile drawer head + CTA (hidden on desktop) ===== */
.nav-close, .nav-mobile-cta, .nav-mobile-contact { display: none; }
.nav-overlay { display: none; }

/* ===== Mobile + tablet drawer (hamburger range) ===== */
@media (max-width: 992px) {
    #navbar { padding: 0; display: flex; flex-direction: column; }
    #navbar ul { flex-direction: column; align-items: stretch; padding: 8px 0 0; width: 100%; }
    #navbar li { width: 100%; margin: 0; }

    #navbar > ul > li > a {
        padding: 15px 24px;
        border-bottom: 1px solid var(--border);
        font-size: 1.02rem;
    }
    #navbar > ul > li > a:after { display: none; }
    #navbar > ul > li > a.active { color: var(--primary-color); border-left: 3px solid var(--secondary-color); padding-left: 21px; }

    /* dropdown becomes an inline accordion */
    .dropdown-content {
        position: static;
        box-shadow: none;
        border: none;
        border-radius: 0;
        min-width: 0;
        padding: 0;
        background: var(--light-color);
    }
    .dropdown.open .dropdown-content { display: block; }
    .dropdown-content a { padding: 12px 24px 12px 38px; border-bottom: 1px solid var(--border); }

    /* close button */
    .nav-close {
        display: block;
        align-self: flex-end;
        background: none;
        border: none;
        font-size: 2rem;
        line-height: 1;
        color: var(--dark-color);
        cursor: pointer;
        padding: 12px 20px 4px;
    }

    /* CTA block at the bottom of the drawer */
    .nav-mobile-cta {
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 20px 24px;
        margin-top: auto;
    }
    .nav-mobile-cta .btn { width: 100%; }
    .nav-mobile-contact {
        display: block;
        padding: 0 24px 24px;
        font-size: 0.9rem;
        color: var(--muted);
    }
    .nav-mobile-contact a { color: var(--primary-color); font-weight: 700; }

    /* dim overlay behind the drawer */
    .nav-overlay {
        display: block;
        position: fixed;
        inset: 0;
        background: rgba(15, 23, 42, 0.5);
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease;
        z-index: 998;
    }
    .nav-overlay.active { opacity: 1; visibility: visible; }
}

/* Lock background scroll while the drawer is open */
body.menu-open { overflow: hidden; }

/* Subtle premium shadow once the page is scrolled */
header { transition: box-shadow 0.3s ease; }
header.scrolled { box-shadow: 0 6px 22px rgba(0, 0, 0, 0.13); }
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
                <a href="https://wa.me/<?php echo $emp_whatsapp; ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
                    <svg viewBox="0 0 32 32" aria-hidden="true"><path d="M16.04 4C9.96 4 5.02 8.94 5.02 15.02c0 1.94.51 3.84 1.48 5.51L4.93 28l7.66-1.55a11 11 0 0 0 5.43 1.42h.01c6.08 0 11.02-4.94 11.02-11.02C29.05 8.94 24.12 4 16.04 4zm6.46 15.74c-.27.76-1.6 1.46-2.2 1.52-.59.06-1.13.27-3.8-.8-3.21-1.27-5.25-4.57-5.41-4.78-.16-.21-1.3-1.72-1.3-3.28s.82-2.33 1.11-2.65c.29-.32.63-.4.84-.4.21 0 .42 0 .6.01.19.01.45-.07.7.54.27.65.92 2.25 1 2.41.08.16.13.35.02.56-.11.21-.16.35-.32.54-.16.19-.34.42-.48.56-.16.16-.33.33-.14.65.19.32.84 1.39 1.81 2.25 1.24 1.11 2.29 1.45 2.61 1.61.32.16.51.13.7-.08.19-.21.81-.94 1.03-1.27.21-.32.43-.27.72-.16.29.11 1.85.87 2.17 1.03.32.16.53.24.6.37.08.14.08.74-.19 1.5z"/></svg>
                </a>
                <a href="#" aria-label="Facebook">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13.5 21v-7h2.3l.4-2.7h-2.7V9.5c0-.8.2-1.3 1.4-1.3H16V5.8c-.3 0-1.1-.1-2-.1-2 0-3.4 1.2-3.4 3.5v1.9H8.3V14h2.3v7h2.9z"/></svg>
                </a>
                <a href="#" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 1.8.3 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.4 1 .4 2.2.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.3 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1 .4-2.2.4-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.8-.3-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.2.3-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.2 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2zm0 1.8c-3.1 0-3.5 0-4.7.1-.9 0-1.4.2-1.7.3-.4.2-.7.4-1 .7-.3.3-.5.6-.7 1-.1.3-.3.8-.3 1.7-.1 1.2-.1 1.6-.1 4.7s0 3.5.1 4.7c0 .9.2 1.4.3 1.7.2.4.4.7.7 1 .3.3.6.5 1 .7.3.1.8.3 1.7.3 1.2.1 1.6.1 4.7.1s3.5 0 4.7-.1c.9 0 1.4-.2 1.7-.3.4-.2.7-.4 1-.7.3-.3.5-.6.7-1 .1-.3.3-.8.3-1.7.1-1.2.1-1.6.1-4.7s0-3.5-.1-4.7c0-.9-.2-1.4-.3-1.7-.2-.4-.4-.7-.7-1-.3-.3-.6-.5-1-.7-.3-.1-.8-.3-1.7-.3-1.2-.1-1.6-.1-4.7-.1zm0 3.1a4.9 4.9 0 100 9.8 4.9 4.9 0 000-9.8zm0 8.1a3.2 3.2 0 110-6.4 3.2 3.2 0 010 6.4zm6.2-8.3a1.15 1.15 0 11-2.3 0 1.15 1.15 0 012.3 0z"/></svg>
                </a>
            </div>
        </div>
    </div>

    <div class="container header-container">
        <div class="logo">
            <a href="/"><img src="/excellent_movers_packers.png" alt="Excellent Movers & Packers Logo" style="height: 60px; width: auto;"></a>
        </div>
        <div class="header-actions">
            <nav id="navbar">
                <button class="nav-close" aria-label="Close menu">&times;</button>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Services <span class="caret">&#9662;</span></a>
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
                    <li><a href="https://excellentmoversandpackers.com/about.php">About</a></li>
                    <li><a href="https://excellentmoversandpackers.com/why-us.php">Why Us</a></li>
                    <li><a href="https://excellentmoversandpackers.com/blog/">Blog</a></li>
                    <li><a href="https://excellentmoversandpackers.com/faq.php">FAQ</a></li>
                    <li><a href="https://excellentmoversandpackers.com/contact-us.php">Contact Us</a></li>
                </ul>

                <!-- Mobile-only CTA inside the drawer -->
                <div class="nav-mobile-cta">
                    <a href="tel:<?php echo $emp_phone_tel; ?>" class="btn btn-secondary">📞 Call Now</a>
                    <a href="https://wa.me/<?php echo $emp_whatsapp; ?>?text=Hi%2C%20I%20need%20a%20free%20quote." target="_blank" rel="noopener" class="btn btn-whatsapp">💬 WhatsApp Quote</a>
                </div>
                <div class="nav-mobile-contact">
                    Call us: <a href="tel:<?php echo $emp_phone_tel; ?>"><?php echo $emp_phone_disp; ?></a>
                </div>
            </nav>
            <a href="tel:<?php echo $emp_phone_tel; ?>" class="header-cta">📞 Call Now</a>
            <button class="mobile-menu-btn" aria-label="Toggle menu" aria-expanded="false">☰</button>
        </div>
    </div>
</header>
<div class="nav-overlay"></div>


<script>
    // Toggle the Services dropdown on click (works on desktop + mobile)
    document.querySelectorAll('.dropdown > .dropbtn').forEach(function (btn) {
        btn.addEventListener('click', function (event) {
            event.preventDefault();
            btn.parentElement.classList.toggle('open');
        });
    });
</script>
