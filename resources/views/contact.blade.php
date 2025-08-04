@extends('layouts.app')

@section('title', 'Hubungi Saya')

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
                <span class="breadcrumb-current">Hubungi Saya</span>
            </div>
            
            <h1 class="page-title">Hubungi Saya</h1>
            <p class="page-subtitle">
                Mari berkolaborasi dan wujudkan ide digital Anda bersama saya
            </p>
        </section>
        
        <!-- Contact Info -->
        <section class="contact-content">
            <div class="info-section">
                <div class="info-card">
                    <h2 class="info-title">Informasi Kontak</h2>
                    <p class="info-description">
                        Beberapa cara untuk menghubungi saya secara langsung
                    </p>
                    
                    <div class="contact-methods">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="contact-details">
                                <h3 class="contact-title">Email</h3>
                                <p class="contact-value">ivanalvarizjr@gmail.com</p>
                                <p class="contact-note">Respon dari jam 7-24</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div class="contact-details">
                                <h3 class="contact-title">Telepon</h3>
                                <p class="contact-value">+62 812 1303 9997</p>
                                <p class="contact-note">Senin - Jumat, 09:00 - 17:00</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div class="contact-details">
                                <h3 class="contact-title">Lokasi</h3>
                                <p class="contact-value">Jakarta, Indonesia</p>
                                <p class="contact-note">Tersedia untuk meeting online/offline</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="contact-details">
                                <h3 class="contact-title">Waktu Respon</h3>
                                <p class="contact-value">jam 7-24</p>
                                <p class="contact-note">Untuk semua inquiry</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    
                </div>
            </div>
        </section>
        
        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="section-header">
                <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
                <p class="section-description">
                    Beberapa pertanyaan umum yang mungkin Anda miliki
                </p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        <span>Berapa lama waktu pengerjaan proyek website?</span>
                        <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <polyline points="6,9 12,15 18,9"></polyline>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>Waktu pengerjaan bervariasi tergantung kompleksitas proyek. Website sederhana biasanya 2-4 minggu, website dengan fitur kompleks bisa 6-12 minggu. Saya akan memberikan timeline detail setelah diskusi requirement.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        <span>Apakah ada layanan maintenance setelah proyek selesai?</span>
                        <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <polyline points="6,9 12,15 18,9"></polyline>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>Ya, saya menyediakan layanan maintenance dan support. Terdapat garansi 3 bulan untuk bug fixing, dan maintenance bulanan untuk update konten, security patch, dan monitoring performance.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        <span>Bagaimana sistem pembayaran untuk proyek?</span>
                        <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <polyline points="6,9 12,15 18,9"></polyline>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>Sistem pembayaran fleksibel: 50% down payment untuk memulai proyek, 25% saat progress 50%, dan 25% sisanya saat proyek completed. Untuk proyek besar bisa dicicil sesuai milestone yang disepakati.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        <span>Teknologi apa saja yang Anda gunakan?</span>
                        <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <polyline points="6,9 12,15 18,9"></polyline>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>Saya menggunakan teknologi modern seperti Laravel, React, Vue.js, Node.js untuk backend, dan HTML5, CSS3, JavaScript untuk frontend. Database MySQL atau database yang sesuai kebutuhan proyek.</p>
                    </div>
                </div>
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
    --color-success: #10b981;
    --color-error: #ef4444;
    
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
    max-width: 1100px;
    margin: 0 auto;
    padding: var(--spacing-lg);
}

/* Page Header - Same as About */
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
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Contact Content */
.contact-content {
    max-width: 800px;
    margin: 0 auto var(--spacing-2xl);
}

/* Info Section */
.info-card {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    box-shadow: var(--shadow-sm);
}

.info-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--color-text-primary);
    margin-bottom: var(--spacing-sm);
}

.info-description {
    color: var(--color-text-secondary);
    margin-bottom: var(--spacing-xl);
    line-height: 1.6;
}

.contact-methods {
    margin-bottom: var(--spacing-xl);
}

.contact-item {
    display: flex;
    gap: var(--spacing-md);
    padding: var(--spacing-lg);
    border-radius: var(--radius-md);
    transition: background-color 0.2s ease;
}

.contact-item:hover {
    background: var(--color-border-light);
}

.contact-icon {
    width: 24px;
    height: 24px;
    color: var(--color-primary);
    flex-shrink: 0;
    margin-top: 2px;
}

.contact-icon svg {
    width: 100%;
    height: 100%;
}

.contact-details {
    flex: 1;
}

.contact-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--color-text-primary);
    margin-bottom: var(--spacing-xs);
}

.contact-value {
    font-size: 0.875rem;
    color: var(--color-text-secondary);
    margin-bottom: 2px;
}

.contact-note {
    font-size: 0.75rem;
    color: var(--color-text-muted);
}

/* Social Media */
.social-section {
    border-top: 1px solid var(--color-border);
    padding-top: var(--spacing-lg);
}

.social-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--color-text-primary);
    margin-bottom: var(--spacing-md);
}

.social-links {
    display: flex;
    gap: var(--spacing-md);
}

.social-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: var(--color-border-light);
    border-radius: var(--radius-sm);
    color: var(--color-text-secondary);
    transition: all 0.2s ease;
    text-decoration: none;
}

.social-link:hover {
    background: var(--color-primary);
    color: white;
    transform: translateY(-2px);
}

.social-link svg {
    width: 20px;
    height: 20px;
}

/* FAQ Section */
.faq-section {
    margin-bottom: var(--spacing-2xl);
}

.section-header {
    text-align: center;
    margin-bottom: var(--spacing-xl);
}

.section-title {
    font-size: clamp(1.75rem, 4vw, 2.5rem);
    font-weight: 600;
    color: var(--color-text-primary);
    margin-bottom: var(--spacing-sm);
}

.section-description {
    color: var(--color-text-secondary);
}

.faq-container {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-md);
    margin-bottom: var(--spacing-md);
    overflow: hidden;
}

.faq-question {
    width: 100%;
    padding: var(--spacing-lg);
    background: none;
    border: none;
    text-align: left;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1rem;
    font-weight: 500;
    color: var(--color-text-primary);
    transition: background-color 0.2s ease;
}

.faq-question:hover {
    background: var(--color-border-light);
}

.faq-icon {
    width: 20px;
    height: 20px;
    color: var(--color-text-secondary);
    transition: transform 0.2s ease;
}

.faq-item.active .faq-icon {
    transform: rotate(180deg);
}

.faq-answer {
    padding: 0 var(--spacing-lg);
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item.active .faq-answer {
    max-height: 200px;
    padding: 0 var(--spacing-lg) var(--spacing-lg);
}

.faq-answer p {
    color: var(--color-text-secondary);
    line-height: 1.6;
    margin: 0;
}

/* Animations */
@keyframes float-gentle {
    0%, 100% { transform: translate(0, 0) scale(1); }
    25% { transform: translate(20px, -20px) scale(1.05); }
    50% { transform: translate(-10px, 30px) scale(0.95); }
    75% { transform: translate(-20px, -10px) scale(1.02); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .main-content {
        padding: var(--spacing-md);
    }
    
    .contact-methods {
        gap: var(--spacing-sm);
    }
    
    .social-links {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .contact-item {
        padding: var(--spacing-md);
    }
    
    .faq-question {
        padding: var(--spacing-md);
        font-size: 0.9rem;
    }
    
    .faq-answer {
        padding: 0 var(--spacing-md);
    }
    
    .faq-item.active .faq-answer {
        padding: 0 var(--spacing-md) var(--spacing-md);
    }
}

/* Focus styles for accessibility */
.faq-question:focus {
    outline: 2px solid var(--color-primary);
    outline-offset: 2px;
}
</style>

<script>
function toggleFAQ(button) {
    const faqItem = button.parentElement;
    const isActive = faqItem.classList.contains('active');
    
    // Close all FAQ items
    document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('active');
    });
    
    // Open clicked item if it wasn't active
    if (!isActive) {
        faqItem.classList.add('active');
    }
}
</script>
@endsection