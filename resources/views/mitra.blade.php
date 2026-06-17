@extends('layouts.layout')

@section('title', 'Mitra Kami - IGAKERTA Publisher')
@section('meta_desc', 'IGAKERTA Publisher bekerjasama dengan universitas, lembaga pemerintah, organisasi, dan perusahaan dalam publikasi ilmiah dan pengabdian masyarakat.')

@section('content')

    <!-- Hero Section -->
    <section class="mitra-hero">
        <div class="container">
            <div class="mitra-hero-grid">
                <div class="mitra-hero-text">
                    <span class="hero-tag-small">MITRA KAMI</span>
                    <h1 class="hero-title-main" style="color: #fff;">Bersinergi Membangun<br>Ilmu, Inovasi & Dampak Nyata</h1>
                    <p class="hero-desc-main">
                        IGAKERTA Publisher berkolaborasi dengan berbagai institusi, organisasi, komunitas, dan perusahaan untuk mendukung publikasi ilmiah, penelitian, pendidikan, dan pengabdian kepada masyarakat.
                    </p>
                    <div class="hero-btn-group">
                        <a href="#join-mitra" class="btn btn-purple-solid">Jadilah Mitra Kami <i class="fas fa-arrow-right"></i></a>
                        <a href="{{ route('hubungi-kami') }}" class="btn btn-yellow-outline">Hubungi Kami <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="mitra-hero-image">
                    <div class="handshake-mockup">
                        <div class="circle-overlay-logo">
                            <!-- Custom SVG Logo inside overlay -->
                            <svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="21" cy="21" r="21" fill="#2d1a47"/>
                                <circle cx="21" cy="21" r="14" stroke="#fbbf24" stroke-width="3.5" fill="none"/>
                                <path d="M20 12C15.5817 12 12 15.5817 12 20C12 24.4183 15.5817 28 20 28V12Z" fill="#fbbf24"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Metrics Row -->
    <section class="mitra-metrics-section">
        <div class="container">
            <div class="mitra-metrics-card">
                <div class="metric-item">
                    <div class="metric-icon"><i class="far fa-id-card"></i></div>
                    <div class="metric-content">
                        <h3>50+</h3>
                        <p>Institusi Mitra</p>
                    </div>
                </div>
                <div class="metric-item">
                    <div class="metric-icon"><i class="fas fa-users"></i></div>
                    <div class="metric-content">
                        <h3>20+</h3>
                        <p>Organisasi & Komunitas</p>
                    </div>
                </div>
                <div class="metric-item">
                    <div class="metric-icon"><i class="fas fa-university"></i></div>
                    <div class="metric-content">
                        <h3>10+</h3>
                        <p>Lembaga Pemerintah</p>
                    </div>
                </div>
                <div class="metric-item">
                    <div class="metric-icon"><i class="fas fa-briefcase"></i></div>
                    <div class="metric-content">
                        <h3>15+</h3>
                        <p>Perusahaan Mitra</p>
                    </div>
                </div>
                <div class="metric-item">
                    <div class="metric-icon"><i class="far fa-handshake"></i></div>
                    <div class="metric-content">
                        <h3>100+</h3>
                        <p>Program Kolaborasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kategori Mitra Section -->
    <section class="section-padding content-mitra-section">
        <div class="container">
            <h2 class="section-title-small text-center">KATEGORI MITRA</h2>
            
            <div class="mitra-category-tabs">
                <button class="mitra-tab active" data-cat="all"><i class="fas fa-th-large"></i> Semua Mitra</button>
                <button class="mitra-tab" data-cat="pt"><i class="fas fa-graduation-cap"></i> Perguruan Tinggi</button>
                <button class="mitra-tab" data-cat="org"><i class="fas fa-users"></i> Organisasi</button>
                <button class="mitra-tab" data-cat="kom"><i class="fas fa-user-friends"></i> Komunitas</button>
                <button class="mitra-tab" data-cat="gov"><i class="fas fa-university"></i> Pemerintah</button>
                <button class="mitra-tab" data-cat="corp"><i class="fas fa-briefcase"></i> Perusahaan</button>
            </div>

            <div class="text-center section-desc-wrap">
                <h2 class="heading-partner-title">MITRA KAMI</h2>
                <p class="subheading-partner-title">Beberapa mitra yang telah berkolaborasi dengan IGAKERTA Publisher.</p>
            </div>

            <!-- Partners Grid -->
            <!--
            <div class="mitra-grid" id="mitra-grid">
                
                <div class="mitra-card" data-category="pt">
                    <div class="mitra-logo-box"><img src="{{ asset('images/mitra/ui.svg') }}" alt="Universitas Indonesia" class="mitra-logo-img"></div>
                    <h4>Universitas Indonesia</h4>
                    <p>Depok, Jawa Barat</p>
                </div>
                
               
                <div class="mitra-card" data-category="corp">
                    <div class="mitra-logo-box"><img src="{{ asset('images/mitra/google.svg') }}" alt="Google for Education" class="mitra-logo-img"></div>
                    <h4>Google for Education</h4>
                    <p>Jakarta, DKI Jakarta</p>
                </div>
            </div>

            <div class="text-center" style="margin-top: 3rem;">
                <button class="btn btn-outline-purple" id="load-more-mitra">Lihat Semua Mitra <i class="fas fa-arrow-right"></i></button>
            </div>
            -->
        </div>
    </section>

    <!-- Testimonial Slider Section -->
    <section class="section-padding testimonial-mitra-section">
        <div class="container">
            <h2 class="section-title-small text-center" style="margin-bottom: 3rem;">APA KATA MITRA KAMI?</h2>
            
            <div class="testimonial-card">
                <div class="testimonial-left">
                    <div class="itb-logo-container">
                        <img src="{{ asset('images/mitra/BudiLuhur.png') }}" alt="Institut Teknologi Bandung" class="mitra-logo-img-large">
                        <span>Budi Luhur University</span>
                    </div>
                </div>
                <div class="testimonial-right">
                    <p class="quote-text">
                        "Kolaborasi dengan IGAKERTA Publisher sangat membantu kami dalam publikasi karya ilmiah dan penyebarluasan hasil riset yang bermanfaat bagi masyarakat luas. Profesional, responsif, dan terpercaya."
                    </p>
                    <div class="quote-author">
                        <strong>Prof. Dr. Ir. Arief Wibowo, M.Kom.</strong>
                        <span>Deputi Rektor - Budi Luhur University</span>
                    </div>
                    <div class="testimonial-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Collab Banner Section -->
    <section class="collab-banner" id="join-mitra">
        <div class="container">
            <div class="collab-banner-card">
                <div class="collab-left">
                    <div class="collab-icon-circle"><i class="fas fa-handshake"></i></div>
                </div>
                <div class="collab-middle">
                    <h2>Mari Berkolaborasi Bersama Kami</h2>
                    <p>Bersama mitra, kami percaya kolaborasi adalah kunci untuk menciptakan perubahan dan dampak yang lebih besar.</p>
                </div>
                <div class="collab-right">
                    <a href="https://wa.me/6285187845986?text=Halo%20Admin%20IGAKERTA,%20kami%20tertarik%20untuk%20menjalin%20kemitraan%20kolaborasi." target="_blank" class="btn btn-yellow-solid">Jadilah Mitra Kami <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

@endsection
