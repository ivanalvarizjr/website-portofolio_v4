@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="hero-container">
    <!-- Subtle Background -->
    <div class="background-overlay">
        <div class="gradient-orb orb-1"></div>
        <div class="gradient-orb orb-2"></div>
    </div>
    
    <!-- Main Content -->
    <main class="main-content">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-content">
                <!-- Profile Photo -->
                <div class="profile-container">
                    <div class="profile-image">
                        <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo" class="profile-photo">
                        <div class="profile-ring"></div>
                    </div>
                </div>
                <h1 class="hero-title">
                    Selamat Datang di
                    <span class="title-accent">Portofolio Saya</span>
                </h1>
                
                <p class="hero-description">
                    Menciptakan solusi digital yang fungsional dan estetis melalui pendekatan yang 
                    berfokus pada detail, kualitas, dan pengalaman pengguna yang optimal.
                </p>
                
                <div class="hero-actions">
                    <a href="/projek" class="btn btn-primary">
                        Lihat Karya Saya
                    </a>
                    <a href="/contact" class="btn btn-secondary">
                        Hubungi Saya
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Stats Section -->
        <section class="stats-section">
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Proyek Diselesaikan</div>
                </div>
                
                <div class="stat-divider"></div>
                
                <div class="stat-item">
                    <div class="stat-number">2+</div>
                    <div class="stat-label">Tahun Pengalaman</div>
                </div>
                
                <div class="stat-divider"></div>
                
                <div class="stat-item">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Komitmen Kualitas</div>
                </div>
            </div>
        </section>
        
        <!-- About Section -->
        <section class="about-section">
            <div class="about-content">
                <h2 class="section-title">
                    Mengubah Ide Menjadi Solusi Digital
                </h2>
                <p class="section-description">
                    Dengan pendekatan yang sistematis dan perhatian terhadap detail, saya mengembangkan 
                    aplikasi web dan mobile yang tidak hanya memenuhi kebutuhan bisnis, tetapi juga 
                    memberikan pengalaman yang intuitif bagi pengguna.
                </p>
                
                <div class="expertise-tags">
                    <span class="tag">Web Development</span>
                    <span class="tag">UI/UX Design</span>
                    <span class="tag">Mobile Apps</span>
                    <span class="tag">3D Modeling</span>
                </div>
            </div>
        </section>
    </main>
</div>

<style>
/* CSS Variables - Subtle Professional Colors */
:root {
    --color-primary: #4f46e5;
    --color-primary-light: #6366f1;
    --color-accent: #1f2937;
    --color-text-primary: #111827;
    --color-text-secondary: #6b7280;
    --color-text-muted: #9ca3af;
    --color-background: #fafafa;
    --color-surface: #ffffff;
    --color-border: #e5e7eb;
    --color-border-light: #f3f4f6;
    
    --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    
    --radius-sm: 8px;
    --radius-md: 12px;
    --radius-lg: 16px;
    --radius-xl: 24px;
    
    --spacing-xs: 0.5rem;
    --spacing-sm: 1rem;
    --spacing-md: 1.5rem;
    --spacing-lg: 2rem;
    --spacing-xl: 3rem;
    --spacing-2xl: 4rem;
}

/* Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.hero-container {
    min-height: 100vh;
    background: var(--color-background);
    position: relative;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: var(--color-text-primary);
}

/* Subtle Background */
.background-overlay {
    position: absolute;
    inset: 0;
    overflow: hidden;
    z-index: 1;
}

.gradient-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.3;
    pointer-events: none;
}

.orb-1 {
    width: 400px;
    height: 400px;
    background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
    top: -200px;
    right: -200px;
    animation: float-gentle 20s ease-in-out infinite;
}

.orb-2 {
    width: 300px;
    height: 300px;
    background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
    bottom: -150px;
    left: -150px;
    animation: float-gentle 25s ease-in-out infinite reverse;
}

/* Main Content */
.main-content {
    position: relative;
    z-index: 2;
    max-width: 1100px;
    margin: 0 auto;
    padding: var(--spacing-lg);
}

/* Profile Photo */
.profile-container {
    margin-bottom: var(--spacing-lg);
    display: flex;
    justify-content: center;
}

.profile-image {
    position: relative;
    width: 120px;
    height: 120px;
}

.profile-photo {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--color-surface);
    box-shadow: var(--shadow-lg);
    transition: all 0.3s ease;
}

.profile-ring {
    position: absolute;
    inset: -4px;
    border: 2px solid var(--color-primary);
    border-radius: 50%;
    opacity: 0;
    transition: all 0.3s ease;
}

.profile-image:hover .profile-photo {
    transform: scale(1.05);
    box-shadow: var(--shadow-xl);
}

.profile-image:hover .profile-ring {
    opacity: 1;
    transform: scale(1.1);
}
.hero-section {
    padding: var(--spacing-2xl) 0;
    text-align: center;
    margin-bottom: var(--spacing-2xl);
}

.hero-content {
    max-width: 700px;
    margin: 0 auto;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-xl);
    padding: var(--spacing-xs) var(--spacing-md);
    margin-bottom: var(--spacing-lg);
    box-shadow: var(--shadow-sm);
}

.badge-text {
    font-size: 0.875rem;
    font-weight: 500;
    color: var(--color-text-secondary);
    letter-spacing: 0.05em;
}

.hero-title {
    font-size: clamp(2.25rem, 5vw, 3.5rem);
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: var(--spacing-md);
    color: var(--color-text-primary);
}

.title-accent {
    color: var(--color-primary);
    display: block;
    margin-top: var(--spacing-xs);
}

.hero-description {
    font-size: 1.125rem;
    line-height: 1.7;
    color: var(--color-text-secondary);
    margin-bottom: var(--spacing-xl);
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.hero-actions {
    display: flex;
    gap: var(--spacing-md);
    justify-content: center;
    flex-wrap: wrap;
}

/* Buttons */
.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: var(--spacing-md) var(--spacing-xl);
    border-radius: var(--radius-md);
    font-size: 1rem;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.2s ease;
    cursor: pointer;
    border: none;
    min-width: 140px;
}

.btn-primary {
    background: var(--color-primary);
    color: white;
    box-shadow: var(--shadow-md);
}

.btn-primary:hover {
    background: var(--color-primary-light);
    transform: translateY(-1px);
    box-shadow: var(--shadow-lg);
}

.btn-secondary {
    background: var(--color-surface);
    color: var(--color-text-primary);
    border: 1px solid var(--color-border);
    box-shadow: var(--shadow-sm);
}

.btn-secondary:hover {
    background: var(--color-border-light);
    transform: translateY(-1px);
    box-shadow: var(--shadow-md);
}

/* Stats Section */
.stats-section {
    margin-bottom: var(--spacing-2xl);
}

.stats-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--spacing-xl);
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    box-shadow: var(--shadow-sm);
    max-width: 600px;
    margin: 0 auto;
}

.stat-item {
    text-align: center;
    flex: 1;
}

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: var(--color-primary);
    margin-bottom: var(--spacing-xs);
    line-height: 1;
}

.stat-label {
    font-size: 0.875rem;
    color: var(--color-text-secondary);
    font-weight: 500;
    line-height: 1.4;
}

.stat-divider {
    width: 1px;
    height: 40px;
    background: var(--color-border);
}

/* About Section */
.about-section {
    text-align: center;
    padding: var(--spacing-2xl) 0;
}

.about-content {
    max-width: 700px;
    margin: 0 auto;
}

.section-title {
    font-size: clamp(1.75rem, 4vw, 2.5rem);
    font-weight: 600;
    color: var(--color-text-primary);
    margin-bottom: var(--spacing-md);
    line-height: 1.3;
}

.section-description {
    font-size: 1.125rem;
    line-height: 1.7;
    color: var(--color-text-secondary);
    margin-bottom: var(--spacing-xl);
}

.expertise-tags {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    justify-content: center;
}

.tag {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    color: var(--color-text-secondary);
    padding: var(--spacing-xs) var(--spacing-md);
    border-radius: var(--radius-xl);
    font-size: 0.875rem;
    font-weight: 500;
    transition: all 0.2s ease;
    box-shadow: var(--shadow-sm);
}

.tag:hover {
    border-color: var(--color-primary);
    color: var(--color-primary);
    transform: translateY(-1px);
    box-shadow: var(--shadow-md);
}

/* Animations */
@keyframes float-gentle {
    0%, 100% {
        transform: translate(0, 0) scale(1);
    }
    25% {
        transform: translate(20px, -20px) scale(1.05);
    }
    50% {
        transform: translate(-10px, 30px) scale(0.95);
    }
    75% {
        transform: translate(-20px, -10px) scale(1.02);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .main-content {
        padding: var(--spacing-md);
    }
    
    .hero-section {
        padding: var(--spacing-xl) 0;
    }
    
    .hero-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .btn {
        width: 100%;
        max-width: 280px;
    }
    
    .stats-container {
        flex-direction: column;
        gap: var(--spacing-lg);
        padding: var(--spacing-lg);
    }
    
    .stat-divider {
        width: 40px;
        height: 1px;
    }
    
    .expertise-tags {
        gap: var(--spacing-xs);
    }
    
    .tag {
        font-size: 0.8rem;
        padding: 6px var(--spacing-sm);
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-description,
    .section-description {
        font-size: 1rem;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
}

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}

/* Focus styles */
.btn:focus-visible {
    outline: 2px solid var(--color-primary);
    outline-offset: 2px;
}

.tag:focus-visible {
    outline: 2px solid var(--color-primary);
    outline-offset: 2px;
}

/* Print styles */
@media print {
    .background-overlay {
        display: none;
    }
    
    .hero-container {
        background: white;
        color: black;
    }
}
</style>
@endsection