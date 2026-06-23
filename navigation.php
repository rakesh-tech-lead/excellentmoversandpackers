<style>
	/* Basic navigation styling */
#navbar ul {
    list-style-type: none;
    padding: 0;
}

#navbar li {
    display: inline-block;
    position: relative;
}

#navbar a {
    display: block;
    padding: 10px 15px;
    text-decoration: none;
}

/* Dropdown menu styling */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

/* Show the dropdown when hovering over the parent li */
.dropdown:hover .dropdown-content {
    display: block;
}

</style>

<header>
        <div class="container header-container">
            <div class="logo">
				<img src="/excellent_movers_packers.png" alt="Excellent Movers & Packers Logo" style="scale:1; height: 60px; width: auto;">
			</div>
            <button class="mobile-menu-btn">☰</button>
            <nav id="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="dropdown">
						<a href="#" class="dropbtn">Services</a>
						<div class="dropdown-content">
							<a href="https://excellentmoversandpackers.com/packers-movers/home-relocation.php">Home Relocation</a>
							<a href="https://excellentmoversandpackers.com/packers-movers/office-relocation.php">Office Relocation</a>
							<a href="https://excellentmoversandpackers.com/packers-movers/packing-unpacking.php">Packing & Unpacking</a>
							<a href="https://excellentmoversandpackers.com/packers-movers/furniture-assembly.php">Furniture Assembly</a>
							<a href="https://excellentmoversandpackers.com/packers-movers/storage-solutions.php">Storage Solutions</a>
							<a href="https://excellentmoversandpackers.com/packers-movers/vehicle-transportation.php">Vehicle Transportation</a>
						</div>
					</li>
                    <li><a href="https://excellentmoversandpackers.com/areas/">Areas We Serve</a></li>
                    <li><a href="/#about">About</a></li>
                    <li><a href="/#why-us">Why Us</a></li>
                    <li><a href="https://excellentmoversandpackers.com/faq.php">FAQ</a></li>
                    <li><a href="https://excellentmoversandpackers.com/contact-us.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>


<script>
    // Toggle the dropdown when clicking on the 'Services' link
    document.querySelector('.dropbtn').addEventListener('click', function(event) {
        var dropdown = document.querySelector('.dropdown-content');
        dropdown.style.display = (dropdown.style.display === 'block' ? 'none' : 'block');
        event.preventDefault(); // Prevent the default action (e.g., jumping to #)
    });
</script>
