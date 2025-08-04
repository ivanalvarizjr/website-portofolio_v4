<nav class="main-navbar">
    <div class="navbar-container">
        <!-- Logo/Brand (optional) -->
        <div class="navbar-brand">
            <a href="{{ route('home') }}" class="brand-link">
                <span class="brand-text">Ivan Variz</span>
            </a>
        </div>
        
        <!-- Navigation Links -->
        <ul class="navbar-menu">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link active">Tentang Saya</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('projek') }}" class="nav-link">Project</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('contact') }}" class="nav-link">Kontak</a>
            </li>
        </ul>
        
        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle" aria-label="Toggle Menu">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
    </div>
</nav>

<style>
/* Navbar Styles - Menggunakan CSS variables yang sama */
.main-navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border-bottom: 1px solid var(--color-border);
    z-index: 1000;
    transition: all 0.3s ease;
}

.navbar-container {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: var(--spacing-md) var(--spacing-lg);
}

/* Brand/Logo */
.navbar-brand .brand-link {
    text-decoration: none;
    color: var(--color-text-primary);
}

.brand-text {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--color-primary);
}

/* Navigation Menu */
.navbar-menu {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: var(--spacing-lg);
}

.nav-item {
    position: relative;
}

.nav-link {
    display: block;
    padding: var(--spacing-xs) var(--spacing-md);
    text-decoration: none;
    color: var(--color-text-secondary);
    font-weight: 500;
    font-size: 0.875rem;
    border-radius: var(--radius-sm);
    transition: all 0.3s ease;
    position: relative;
}

.nav-link:hover {
    color: var(--color-primary);
    background: rgba(79, 70, 229, 0.05);
}

/* Active Link Styling */
.nav-link.active {
    color: var(--color-primary);
    background: rgba(79, 70, 229, 0.1);
}

.nav-link.active::after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
    width: 20px;
    height: 2px;
    background: var(--color-primary);
    border-radius: 1px;
}

/* Mobile Menu Toggle */
.mobile-menu-toggle {
    display: none;
    flex-direction: column;
    gap: 3px;
    background: none;
    border: none;
    padding: var(--spacing-xs);
    cursor: pointer;
    border-radius: var(--radius-sm);
    transition: background 0.3s ease;
}

.mobile-menu-toggle:hover {
    background: rgba(79, 70, 229, 0.05);
}

.hamburger-line {
    width: 20px;
    height: 2px;
    background: var(--color-text-secondary);
    transition: all 0.3s ease;
    border-radius: 1px;
}

/* Scrolled navbar effect */
.main-navbar.scrolled {
    background: rgba(255, 255, 255, 0.98);
    box-shadow: var(--shadow-sm);
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .navbar-container {
        padding: var(--spacing-sm) var(--spacing-md);
    }
    
    .mobile-menu-toggle {
        display: flex;
    }
    
    .navbar-menu {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(20px);
        border-bottom: 1px solid var(--color-border);
        flex-direction: column;
        gap: 0;
        padding: var(--spacing-md) 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
    }
    
    .navbar-menu.mobile-open {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    
    .nav-item {
        padding: 0 var(--spacing-lg);
    }
    
    .nav-link {
        padding: var(--spacing-md);
        border-radius: 0;
    }
    
    .nav-link.active::after {
        display: none;
    }
    
    /* Mobile menu toggle animation */
    .mobile-menu-toggle.active .hamburger-line:first-child {
        transform: rotate(45deg) translate(5px, 5px);
    }
    
    .mobile-menu-toggle.active .hamburger-line:nth-child(2) {
        opacity: 0;
    }
    
    .mobile-menu-toggle.active .hamburger-line:last-child {
        transform: rotate(-45deg) translate(7px, -6px);
    }
}

@media (max-width: 480px) {
    .navbar-container {
        padding: var(--spacing-sm);
    }
    
    .brand-text {
        font-size: 1.125rem;
    }
}

/* Body padding to account for fixed navbar */
body {
    padding-top: 80px; /* Adjust based on navbar height */
}

/* Page content adjustment */
.page-container {
    padding-top: 0; /* Remove default padding since we have fixed navbar */
}

.main-content {
    padding-top: var(--spacing-xl); /* Add some space after navbar */
}
</style>

<script>
// JavaScript untuk mobile menu toggle dan scroll effect
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.main-navbar');
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');
    
    // Mobile menu toggle
    if (mobileToggle && navbarMenu) {
        mobileToggle.addEventListener('click', function() {
            mobileToggle.classList.toggle('active');
            navbarMenu.classList.toggle('mobile-open');
        });
        
        // Close mobile menu when clicking on nav links
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileToggle.classList.remove('active');
                navbarMenu.classList.remove('mobile-open');
            });
        });
    }
    
    // Navbar scroll effect
    if (navbar) {
        let lastScrollY = window.scrollY;
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }
    
    // Set active nav link based on current route (Laravel helper)
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').includes(currentPath.split('/').pop())) {
            link.classList.add('active');
        }
    });
});
</script>