@extends('layouts.app')

@section('title', 'Tentang Saya')

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
                <span class="breadcrumb-current">Tentang Saya</span>
            </div>
            
            <h1 class="page-title">Tentang Saya</h1>
            <p class="page-subtitle">
                Mengenal lebih dekat perjalanan, keahlian, dan visi saya dalam dunia teknologi
            </p>
        </section>
        
        <!-- About Content -->
        <section class="about-content">
            <div class="content-grid">
                <!-- Profile Section -->
                <div class="profile-section">
                    <div class="profile-card">
                        <div class="profile-image-large">
                            <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo" class="profile-photo-large">
                        </div>
                        
                        <div class="profile-info">
                            <h2 class="profile-name">Ivan Variz Febrinanda</h2>
                            <p class="profile-title">UBSI System Informations Students</p>
                            <p class="profile-location">Jakarta, Indonesia</p>
                            
                            <div class="profile-stats">
                                <div class="stat-item">
                                    <span class="stat-number">2+</span>
                                    <span class="stat-label">Tahun</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">5</span>
                                    <span class="stat-label">Proyek</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">100%</span>
                                    <span class="stat-label">Komitmen</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Story Section -->
                <div class="story-section">
                    <div class="content-card">
                        <h3 class="section-title">Perjalanan Saya</h3>
                        <div class="story-content">
                            <p>
                                Saya adalah seorang mahasiswa aktif di Program Studi Sistem Informasi Universitas Bina Sarana Informatika (UBSI), yang kini telah menempuh tahun ke-2 dalam perjalanan akademik saya. Sejak awal masa kuliah, saya berkomitmen untuk tidak hanya sekadar mengikuti proses perkuliahan, namun juga mengembangkan keterampilan teknis dan soft skill yang relevan dengan industri teknologi informasi.
                            </p>
                            <p>
                                Selama dua tahun ini, saya telah menyelesaikan 4 proyek penting, yang masing-masing menjadi tonggak pengalaman berharga dalam pengembangan sistem berbasis web maupun aplikasi. Setiap proyek yang saya kerjakan tidak hanya menjadi bukti komitmen saya terhadap tanggung jawab sebagai mahasiswa, tetapi juga sebagai individu yang ingin tumbuh dan berkontribusi nyata dalam dunia digital.
                            </p>
                            <p>
                                Beberapa contoh proyek yang telah saya selesaikan mencakup:
                            </p>
                            <p>
                                1. Sistem Informasi Rental peralatan camping berbasis website.
                            </p>
                            <p>
                                2. Desain Aplikasi Mobile Tiket Konser berbasis prototipe UI/UX interaktif.
                            </p>
                            <p>
                                3. Sistem Informasi pendaftaran calon siswa paud harum berbasis website.
                            </p>
                            <p>
                                4. Sistem Informasi Paud Harum berbasis mobile menggunakan flutter.
                            </p>
                            <p>
                                5. Sistem Infomasi Lapor warga untuk desa berbasis website.
                            <p>
                                Fokus utama saya saat ini adalah pengembangan diri secara berkelanjutan, baik dalam aspek teknikal seperti pemrograman, analisis data, dan perancangan sistem, maupun dalam aspek non-teknis seperti komunikasi, manajemen waktu, dan berpikir kritis.
                            </p>
                            <p>
                                Saya secara aktif mencari peluang di dunia Sistem Informasi — mulai dari magang, project freelance, hingga kolaborasi komunitas IT — sebagai langkah strategis untuk membangun pengalaman dan portofolio yang solid. Ketertarikan saya meliputi bidang pengembangan web, data mining, sistem enterprise, serta desain UI/UX.
                            </p>
                            <p>
                                Bagi saya, menjadi mahasiswa bukan hanya tentang gelar yang akan diraih, tapi tentang perjalanan eksplorasi, tantangan, dan pembuktian diri di tengah era transformasi digital. Saya percaya bahwa setiap baris kode, setiap desain sistem, dan setiap ide yang saya kembangkan hari ini adalah pondasi masa depan saya di dunia profesional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Skills Section -->
        <section class="skills-section">
            <div class="section-header">
                <h2 class="section-title">Keahlian & Teknologi</h2>
                <p class="section-description">
                    Teknologi dan tools yang saya kuasai untuk mengembangkan solusi digital
                </p>
            </div>
            
            <div class="skills-grid">
                <div class="skill-category">
                    <h3 class="category-title">Frontend Development</h3>
                    <div class="skills-list">
                        <div class="skill-item">
                            <span class="skill-name">HTML/CSS</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">JavaScript</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Desaigner UI/UX</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="90"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="skill-category">
                    <h3 class="category-title">Backend Development</h3>
                    <div class="skills-list">
                        <div class="skill-item">
                            <span class="skill-name">PHP/Laravel</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="85"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">vite.js/node.js</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="75"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Database</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="90"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="skill-category">
                    <h3 class="category-title">Tools & Others</h3>
                    <div class="skills-list">
                        <div class="skill-item">
                            <span class="skill-name">Git/GitHub</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">VSC</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="90"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">android studio</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Figma</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="90"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Canva</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="85"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Mastercam</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="85"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Education & Experience -->
        <section class="timeline-section">
            <div class="section-header">
                <h2 class="section-title">Pendidikan & Pengalaman</h2>
            </div>
            
            <div class="timeline-grid">
                <div class="timeline-column">
                    <h3 class="timeline-title">Pengalaman Kerja</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <div class="timeline-period">2022 - 2022</div>
                                <h4 class="timeline-position">Mechanical Engineer intern</h4>
                                <p class="timeline-company">PT. Akebono Brake Astra Indonesia</p>
                                <p class="timeline-description">
                                    Melakukan pemeliharaan dan perakitan mesin operator
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-column">
                    <h3 class="timeline-title">Pendidikan</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <div class="timeline-period">2023 - 2027</div>
                                <h4 class="timeline-position">S1 Sistem Informasi</h4>
                                <p class="timeline-company">Universitas Indonesia</p>
                                <p class="timeline-description">
                                    IPK: 3.82 - Fokus pada Software Engineering, Web Development, dan UI/UX Design
                                </p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <div class="timeline-period">2024</div>
                                <h4 class="timeline-position">PHPID community</h4>
                                <p class="timeline-company">database</p>
                                <p class="timeline-description">
                                    Sistem Basis Data
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<style>
/* Using same CSS variables as home page */
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

/* Background - Same as home */
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

/* Page Header */
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

/* Content Grid */
.content-grid {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: var(--spacing-2xl);
    margin-bottom: var(--spacing-2xl);
}

/* Profile Section */
.profile-card {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    box-shadow: var(--shadow-sm);
    text-align: center;
    position: sticky;
    top: var(--spacing-lg);
}

.profile-image-large {
    margin-bottom: var(--spacing-lg);
}

.profile-photo-large {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid var(--color-surface);
    box-shadow: var(--shadow-lg);
    margin: 0 auto;
}

.profile-name {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--color-text-primary);
    margin-bottom: var(--spacing-xs);
}

.profile-title {
    font-size: 1rem;
    color: var(--color-primary);
    font-weight: 500;
    margin-bottom: var(--spacing-xs);
}

.profile-location {
    font-size: 0.875rem;
    color: var(--color-text-secondary);
    margin-bottom: var(--spacing-lg);
}

.profile-stats {
    display: flex;
    justify-content: space-around;
    padding-top: var(--spacing-lg);
    border-top: 1px solid var(--color-border);
}

.profile-stats .stat-item {
    text-align: center;
}

.profile-stats .stat-number {
    display: block;
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--color-primary);
}

.profile-stats .stat-label {
    font-size: 0.75rem;
    color: var(--color-text-secondary);
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

/* Content Card */
.content-card {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    box-shadow: var(--shadow-sm);
}

.section-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--color-text-primary);
    margin-bottom: var(--spacing-lg);
}

.story-content p {
    line-height: 1.7;
    color: var(--color-text-secondary);
    margin-bottom: var(--spacing-md);
}

.story-content p:last-child {
    margin-bottom: 0;
}

/* Skills Section */
.skills-section {
    margin-bottom: var(--spacing-2xl);
}

.section-header {
    text-align: center;
    margin-bottom: var(--spacing-xl);
}

.section-header .section-title {
    font-size: clamp(1.75rem, 4vw, 2.5rem);
    text-align: center;
}

.section-description {
    color: var(--color-text-secondary);
    margin-top: var(--spacing-sm);
}

.skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.skill-category {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    box-shadow: var(--shadow-sm);
}

.category-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--color-text-primary);
    margin-bottom: var(--spacing-lg);
}

.skill-item {
    margin-bottom: var(--spacing-lg);
}

.skill-item:last-child {
    margin-bottom: 0;
}

.skill-name {
    display: block;
    font-size: 0.875rem;
    font-weight: 500;
    color: var(--color-text-secondary);
    margin-bottom: var(--spacing-xs);
}

.skill-bar {
    height: 8px;
    background: var(--color-border-light);
    border-radius: 4px;
    overflow: hidden;
}

.skill-progress {
    height: 100%;
    background: linear-gradient(90deg, var(--color-primary), var(--color-primary-light));
    border-radius: 4px;
    transition: width 1s ease-out;
    width: 0;
}

/* Timeline Section */
.timeline-section {
    margin-bottom: var(--spacing-2xl);
}

.timeline-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-2xl);
}

.timeline-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--color-text-primary);
    margin-bottom: var(--spacing-xl);
    text-align: center;
}

.timeline {
    position: relative;
}

.timeline-item {
    position: relative;
    padding-left: var(--spacing-xl);
    margin-bottom: var(--spacing-xl);
}

.timeline-item:last-child {
    margin-bottom: 0;
}

.timeline-marker {
    position: absolute;
    left: 0;
    top: var(--spacing-xs);
    width: 12px;
    height: 12px;
    background: var(--color-primary);
    border-radius: 50%;
    border: 3px solid var(--color-surface);
    box-shadow: 0 0 0 3px var(--color-border);
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: 5px;
    top: 24px;
    bottom: -24px;
    width: 2px;
    background: var(--color-border);
}

.timeline-item:last-child::before {
    display: none;
}

.timeline-period {
    font-size: 0.75rem;
    color: var(--color-primary);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: var(--spacing-xs);
}

.timeline-position {
    font-size: 1rem;
    font-weight: 600;
    color: var(--color-text-primary);
    margin-bottom: var(--spacing-xs);
}

.timeline-company {
    font-size: 0.875rem;
    color: var(--color-text-secondary);
    font-weight: 500;
    margin-bottom: var(--spacing-xs);
}

.timeline-description {
    font-size: 0.875rem;
    color: var(--color-text-secondary);
    line-height: 1.5;
}

/* Animations */
@keyframes float-gentle {
    0%, 100% { transform: translate(0, 0) scale(1); }
    25% { transform: translate(20px, -20px) scale(1.05); }
    50% { transform: translate(-10px, 30px) scale(0.95); }
    75% { transform: translate(-20px, -10px) scale(1.02); }
}

/* Responsive Design */
@media (max-width: 1024px) {
    .content-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-xl);
    }
    
    .profile-card {
        position: static;
    }
    
    .timeline-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-xl);
    }
}

@media (max-width: 768px) {
    .main-content {
        padding: var(--spacing-md);
    }
    
    .skills-grid {
        grid-template-columns: 1fr;
    }
    
    .profile-stats {
        flex-direction: column;
        gap: var(--spacing-md);
    }
}

/* Skill bar animation on scroll */
.skill-progress[data-width="95"] { width: 95%; }
.skill-progress[data-width="92"] { width: 92%; }
.skill-progress[data-width="90"] { width: 90%; }
.skill-progress[data-width="88"] { width: 88%; }
.skill-progress[data-width="85"] { width: 85%; }
.skill-progress[data-width="82"] { width: 82%; }
.skill-progress[data-width="80"] { width: 80%; }
.skill-progress[data-width="75"] { width: 75%; }
</style>
@endsection