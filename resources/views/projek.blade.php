@extends('layouts.app')

@section('title', 'Proyek')

@section('content')
<div class="page-container">
    <!-- Subtle Background -->
    <div class="background-overlay">
        <div class="gradient-orb orb-1"></div>
        <div class="gradient-orb orb-2"></div>
    </div>
    
    <!-- Main Content -->
    <main class="main-content">
        <!-- Page Header -->
        <section class="page-header">
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-link">Beranda</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current">Proyek</span>
            </div>
            
            <h1 class="page-title">Proyek Saya</h1>
            <p class="page-subtitle">
                Koleksi karya dan solusi digital yang telah saya kembangkan dengan berbagai teknologi modern
            </p>
        </section>
        
        <!-- Filter Section -->
        <section class="filter-section">
            <div class="filter-container">
                <div class="filter-tabs">
                    <button class="filter-tab active" data-filter="all">Semua Proyek</button>
                </div>
                
                <div class="project-count">
                    <span class="count-number">5</span>
                    <span class="count-text">Proyek Ditemukan</span>
                </div>
            </div>
        </section>
        
        <!-- Projects Grid -->
        <section class="projects-section">
            <div class="projects-grid">
                <!-- Project 1 -->
                <article class="project-card" data-category="web fullstack">
                    <div class="project-image">
                        <img src="{{ asset('images/H!CAMP.png') }}" alt="Sistem Informasi Rental Camping" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-actions">
                                <a href="#" class="action-btn" aria-label="Lihat Demo">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                                <a href="#" class="action-btn" aria-label="Lihat Kode">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-content">
                        <div class="project-meta">
                            <span class="project-category">Full Stack</span>
                            <span class="project-date">2024</span>
                        </div>
                        
                        <h3 class="project-title">Sistem Informasi Rental Peralatan Camping</h3>
                        <p class="project-description">
                            Platform berbasis website untuk menyewakan peralatan camping dengan fitur pemesanan online, 
                            manajemen stok, pembayaran digital, dan sistem rating peralatan.
                        </p>
                        
                        <div class="project-tech">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">Bootstrap</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Midtrans API</span>
                        </div>
                        
                        <div class="project-stats">
                            <div class="stat">
                                <span class="stat-icon">⛺</span>
                                <span class="stat-text">50+ Peralatan</span>
                            
                        </div>
                    </div>
                </article>
                
                <!-- Project 2 -->
                <article class="project-card" data-category="mobile ui-ux">
                    <div class="project-image">
                        <img src="{{ asset('images/tiket.jpg') }}" alt="Prototipe Tiket Konser" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-actions">
                                <a href="#" class="action-btn" aria-label="Lihat Demo">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                                <a href="#" class="action-btn" aria-label="Lihat Prototipe">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-content">
                        <div class="project-meta">
                            <span class="project-category">UI/UX Design</span>
                            <span class="project-date">2024</span>
                        </div>
                        
                        <h3 class="project-title">Desain Aplikasi Mobile Tiket Konser</h3>
                        <p class="project-description">
                            Prototipe UI/UX interaktif untuk aplikasi pembelian tiket konser dengan fitur pemilihan kursi, 
                            pembayaran digital, e-ticket, dan reminder jadwal konser.
                        </p>
                        
                        <div class="project-tech">
                            <span class="tech-tag">Figma</span>
                            <span class="tech-tag">Adobe XD</span>
                            <span class="tech-tag">Prototyping</span>
                            <span class="tech-tag">User Flow</span>
                        </div>
                        
                        <div class="project-stats">
                            <div class="stat">
                                <span class="stat-icon">🎤</span>
                                <span class="stat-text">10+ Event</span>
                            </div>
                            <div class="stat">
                                <span class="stat-icon">📱</span>
                                <span class="stat-text">Mobile First</span>
                            </div>
                        </div>
                    </div>
                </article>
                
                <!-- Project 3 -->
                <article class="project-card" data-category="web fullstack">
                    <div class="project-image">
                        <img src="{{ asset('images/paud.jpg') }}" alt="Pendaftaran PAUD Harum" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-actions">
                                <a href="#" class="action-btn" aria-label="Lihat Demo">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                                <a href="#" class="action-btn" aria-label="Lihat Kode">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-content">
                        <div class="project-meta">
                            <span class="project-category">Full Stack</span>
                            <span class="project-date">2022</span>
                        </div>
                        
                        <h3 class="project-title">Sistem Informasi Pendaftaran PAUD Harum</h3>
                        <p class="project-description">
                            Sistem pendaftaran online untuk calon siswa PAUD dengan fitur formulir digital, 
                            upload dokumen, seleksi administrasi, dan pengumuman hasil penerimaan.
                        </p>
                        
                        <div class="project-tech">
                            <span class="tech-tag">CodeIgniter</span>
                            <span class="tech-tag">jQuery</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Bootstrap</span>
                        </div>
                        
                        <div class="project-stats">
                            <div class="stat">
                                <span class="stat-icon">👶</span>
                                <span class="stat-text">150+ Pendaftar</span>
                            </div>
                            <div class="stat">
                                <span class="stat-icon">📊</span>
                                <span class="stat-text">Paperless System</span>
                            </div>
                        </div>
                    </div>
                </article>
                
                <!-- Project 4 -->
                <article class="project-card" data-category="mobile">
                    <div class="project-image">
                        <img src="{{ asset('images/paud.jpg') }}" alt="Aplikasi PAUD Harum" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-actions">
                                <a href="#" class="action-btn" aria-label="Lihat Demo">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                                <a href="#" class="action-btn" aria-label="Download App">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-content">
                        <div class="project-meta">
                            <span class="project-category">Mobile App</span>
                            <span class="project-date">2025</span>
                        </div>
                        
                        <h3 class="project-title">Sistem Informasi PAUD Harum Mobile</h3>
                        <p class="project-description">
                            Aplikasi mobile untuk melihat informasi PAUD Harum dengan fitur pendaftaran, informasi paud dan agenda kegiatan.
                        </p>
                        
                        <div class="project-tech">
                            <span class="tech-tag">Flutter</span>
                            <span class="tech-tag">Dart</span>
                            <span class="tech-tag">Firebase</span>
                            <span class="tech-tag">API Integration</span>
                        </div>
                        
                        <div class="project-stats">
                            <div class="stat">
                                <span class="stat-icon">👨‍👩‍👧‍👦</span>
                                <span class="stat-text">50+ Keluarga</span>
                            </div>
                            <div class="stat">
                                <span class="stat-icon">📊</span>
                                <span class="stat-text">Paperless System</span>
                            </div>
                        </div>
                    </div>
                </article>
                
                <!-- Project 5 -->
                <article class="project-card" data-category="web fullstack">
                    <div class="project-image">
                        <img src="{{ asset('images/silaga.png') }}" alt="Lapor Warga Desa" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-actions">
                                <a href="#" class="action-btn" aria-label="Lihat Demo">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                                <a href="#" class="action-btn" aria-label="Lihat Kode">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-content">
                        <div class="project-meta">
                            <span class="project-category">Full Stack</span>
                            <span class="project-date">2024</span>
                        </div>
                        
                        <h3 class="project-title">Sistem Informasi Lapor Warga Desa</h3>
                        <p class="project-description">
                            Platform pelaporan warga untuk masalah infrastruktur desa dengan fitur pelaporan, 
                            tracking status laporan, notifikasi, dan sistem prioritas penanganan.
                        </p>
                        
                        <div class="project-tech">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">Vue.js</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Google Maps API</span>
                        </div>
                        
                        <div class="project-stats">
                            <div class="stat">
                                <span class="stat-icon">🏘️</span>
                                <span class="stat-text">1 Desa</span>
                            </div>
                            <div class="stat">
                                <span class="stat-icon">📝</span>
                                <span class="stat-text">100+ Laporan</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>
</div>

<style>
/* Using same CSS variables as previous pages */
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

.page-container {
    min-height: 100vh;
    background: var(--color-background);
    position: relative;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: var(--color-text-primary);
}

/* Background - Same as other pages */
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

.main-content {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: var(--spacing-lg);
}

/* Page Header - Same as other pages */
.page-header {
    text-align: center;
    margin-bottom: var(--spacing-2xl);
    padding-top: var(--spacing-xl);
}

.breadcrumb {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--spacing-xs);
    margin-bottom: var(--spacing-md);
    font-size: 0.875rem;
}

.breadcrumb-link {
    color: var(--color-text-secondary);
    text-decoration: none;
    transition: color 0.2s ease;
}

.breadcrumb-link:hover {
    color: var(--color-primary);
}

.breadcrumb-separator {
    color: var(--color-text-muted);
}

.breadcrumb-current {
    color: var(--color-primary);
    font-weight: 500;
}

.page-title {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 700;
    color: var(--color-text-primary);
    margin-bottom: var(--spacing-md);
}

.page-subtitle {
    font-size: 1.125rem;
    color: var(--color-text-secondary);
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Filter Section */
.filter-section {
    margin-bottom: var(--spacing-2xl);
}

.filter-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: var(--spacing-md);
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    box-shadow: var(--shadow-sm);
}

.filter-tabs {
    display: flex;
    gap: var(--spacing-sm);
    flex-wrap: wrap;
}

.filter-tab {
    padding: var(--spacing-sm) var(--spacing-md);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-md);
    background: var(--color-surface);
    color: var(--color-text-secondary);
    font-size: 0.875rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
}

.filter-tab:hover {
    border-color: var(--color-primary);
    color: var(--color-primary);
}

.filter-tab.active {
    background: var(--color-primary);
    color: white;
    border-color: var(--color-primary);
}

.project-count {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
}

.count-number {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--color-primary);
}

.count-text {
    font-size: 0.875rem;
    color: var(--color-text-secondary);
}

/* Projects Grid */
.projects-section {
    margin-bottom: var(--spacing-2xl);
}

.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: var(--spacing-xl);
}

/* Project Card */
.project-card {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: all 0.3s ease;
}

.project-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
    border-color: var(--color-primary);
}

.project-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.project-card:hover .project-image img {
    transform: scale(1.05);
}

.project-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.project-card:hover .project-overlay {
    opacity: 1;
}

.project-actions {
    display: flex;
    gap: var(--spacing-md);
}

.action-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    background: var(--color-surface);
    color: var(--color-text-primary);
    border-radius: var(--radius-md);
    text-decoration: none;
    transition: all 0.2s ease;
    box-shadow: var(--shadow-md);
}

.action-btn:hover {
    background: var(--color-primary);
    color: white;
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

.action-btn svg {
    width: 20px;
    height: 20px;
}

/* Project Content */
.project-content {
    padding: var(--spacing-xl);
}

.project-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-md);
}

.project-category {
    background: var(--color-border-light);
    color: var(--color-primary);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-sm);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.project-date {
    font-size: 0.875rem;
    color: var(--color-text-muted);
    font-weight: 500;
}

.project-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--color-text-primary);
    margin-bottom: var(--spacing-sm);
    line-height: 1.3;
}

.project-description {
    color: var(--color-text-secondary);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
    font-size: 0.9rem;
}

.project-tech {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-xs);
    margin-bottom: var(--spacing-lg);
}

.tech-tag {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    color: var(--color-text-secondary);
    padding: 4px var(--spacing-sm);
    border-radius: var(--radius-sm);
    font-size: 0.75rem;
    font-weight: 500;
    transition: all 0.2s ease;
}

.tech-tag:hover {
    border-color: var(--color-primary);
    color: var(--color-primary);
    background: var(--color-border-light);
}

.project-stats {
    display: flex;
    gap: var(--spacing-lg);
    padding-top: var(--spacing-md);
    border-top: 1px solid var(--color-border);
}

.stat {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
}

.stat-icon {
    font-size: 1rem;
}

.stat-text {
    font-size: 0.75rem;
    color: var(--color-text-secondary);
    font-weight: 500;
}

/* Animations */
@keyframes float-gentle {
    0%, 100% { transform: translate(0, 0) scale(1); }
    25% { transform: translate(20px, -20px) scale(1.05); }
    50% { transform: translate(-10px, 30px) scale(0.95); }
    75% { transform: translate(-20px, -10px) scale(1.02); }
}

/* Filter Animation */
.project-card {
    animation: fadeInUp 0.5s ease forwards;
}

.project-card.filtering {
    animation: fadeOut 0.3s ease forwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeOut {
    to {
        opacity: 0;
        transform: scale(0.9);
    }
}

/* Responsive Design */
@media (max-width: 1024px) {
    .projects-grid {
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: var(--spacing-lg);
    }
}

@media (max-width: 768px) {
    .main-content {
        padding: var(--spacing-md);
    }
    
    .filter-container {
        flex-direction: column;
        align-items: stretch;
        gap: var(--spacing-lg);
    }
    
    .filter-tabs {
        justify-content: center;
    }
    
    .project-count {
        justify-content: center;
    }
    
    .projects-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .project-stats {
        justify-content: space-between;
    }
}

@media (max-width: 480px) {
    .filter-tabs {
        flex-direction: column;
    }
    
    .filter-tab {
        text-align: center;
    }
    
    .project-image {
        height: 200px;
    }
    
    .project-content {
        padding: var(--spacing-lg);
    }
    
    .project-actions {
        gap: var(--spacing-sm);
    }
    
    .action-btn {
        width: 40px;
        height: 40px;
    }
    
    .project-tech {
        gap: 4px;
    }
    
    .tech-tag {
        font-size: 0.7rem;
        padding: 2px 8px;
    }
}

/* Focus styles for accessibility */
.filter-tab:focus,
.action-btn:focus,
.btn:focus {
    outline: 2px solid var(--color-primary);
    outline-offset: 2px;
}

/* Print styles */
@media print {
    .background-overlay,
    .filter-section,
    .load-more-section {
        display: none;
    }
    
    .project-overlay {
        display: none;
    }
    
    .projects-grid {
        grid-template-columns: 1fr 1fr;
        gap: var(--spacing-md);
    }
}

/* Dark mode support */
@media (prefers-color-scheme: dark) {
    .project-image img {
        filter: brightness(0.9);
    }
}

/* Reduced motion */
@media (prefers-reduced-motion: reduce) {
    .project-card,
    .project-image img,
    .project-overlay,
    .action-btn,
    .btn-icon {
        transition: none;
    }
    
    .project-card:hover {
        transform: none;
    }
    
    .project-card:hover .project-image img {
        transform: none;
    }
}
</style>

<script>
// Filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterTabs = document.querySelectorAll('.filter-tab');
    const projectCards = document.querySelectorAll('.project-card');
    const countNumber = document.querySelector('.count-number');
    
    filterTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active tab
            filterTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Filter projects
            let visibleCount = 0;
            projectCards.forEach(card => {
                const categories = card.getAttribute('data-category').split(' ');
                
                if (filter === 'all' || categories.includes(filter)) {
                    card.style.display = 'block';
                    card.classList.remove('filtering');
                    visibleCount++;
                } else {
                    card.classList.add('filtering');
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
            
            // Update count
            countNumber.textContent = visibleCount;
        });
    });
});
</script>
@endsection