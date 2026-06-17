@extends('layouts.layout')

@section('title', 'Hubungi Kami - IGAKERTA Publisher')
@section('meta_desc', 'Hubungi IGAKERTA Publisher untuk pemesanan buku, pengajuan naskah, atau kerjasama penerbitan di Jakarta Selatan.')

@section('content')

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-hero-grid">
                <div class="contact-hero-text">
                    <span class="hero-tag-small">HUBUNGI KAMI</span>
                    <h1 class="hero-title-main" style="color: #fff;">Kami Siap Membantu Anda<br>Kapan Saja</h1>
                    <p class="hero-desc-main">
                        Punya pertanyaan, butuh informasi, atau ingin bekerja sama? Tim IGAKERTA Publisher siap membantu Anda dengan cepat, ramah, dan profesional.
                    </p>
                    <div class="hero-btn-group">
                        <a href="#kirim-pesan" class="btn btn-purple-solid">Kirim Pesan <i class="far fa-paper-plane"></i></a>
                        <a href="#lokasi" class="btn btn-yellow-outline">Lihat Lokasi Kami <i class="fas fa-map-marker-alt"></i></a>
                    </div>
                </div>
                <div class="contact-hero-image">
                    <div class="contact-laptop-mockup">
                        <div class="mockup-screen">
                            <div class="mockup-logo-center">
                                <svg width="32" height="32" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="21" cy="21" r="21" fill="#fff"/>
                                    <circle cx="21" cy="21" r="14" stroke="#2d1a47" stroke-width="3.5" fill="none"/>
                                    <path d="M15 21C15 17.6863 17.6863 15 21 15V27C17.6863 27 15 24.3137 15 21Z" fill="#2d1a47"/>
                                </svg>
                                <span class="mockup-brand-name">IGAKERTA</span>
                                <span class="mockup-brand-sub">Mencerdaskan Kehidupan Bersama</span>
                            </div>
                        </div>
                        <div class="mockup-mug"></div>
                        <div class="mockup-books"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Cards Grid -->
    <section class="section-padding contact-cards-section">
        <div class="container">
            <div class="contact-title-wrap text-center" style="margin-bottom: 3.5rem;">
                <h2 class="section-heading-main">HUBUNGI KAMI MELALUI</h2>
            </div>
            
            <div class="contact-info-grid">
                <!-- Address -->
                <div class="contact-info-card">
                    <div class="card-icon-circle"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>Alamat</h3>
                    <p>Petukangan Utara, Pesanggrahan, Jakarta Selatan 12260</p>
                </div>
                <!-- Phone -->
                <div class="contact-info-card">
                    <div class="card-icon-circle"><i class="fas fa-phone-alt"></i></div>
                    <h3>Telepon / WhatsApp</h3>
                    <p>0851-8784-5986</p>
                </div>
                <!-- Email -->
                <div class="contact-info-card">
                    <div class="card-icon-circle"><i class="far fa-envelope"></i></div>
                    <h3>Email</h3>
                    <p>cs@igakerta.com<br>igakertapublisher@gmail.com</p>
                </div>
                <!-- Operation Hours -->
                <div class="contact-info-card">
                    <div class="card-icon-circle"><i class="far fa-clock"></i></div>
                    <h3>Jam Operasional</h3>
                    <p>Senin - Jumat<br>08.00 - 17.00 WIB</p>
                </div>
                <!-- Social Media -->
                <div class="contact-info-card">
                    <div class="card-icon-circle"><i class="far fa-comments"></i></div>
                    <h3>Media Sosial</h3>
                    <div class="card-socials-row">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map and Form Section -->
    <section class="section-padding map-form-section" id="kirim-pesan">
        <div class="container">
            <div class="map-form-grid">
                <!-- Form Column -->
                <div class="form-container-card">
                    <h3>KIRIM PESAN KEPADA KAMI</h3>
                    <p class="form-subtitle-text">Isi formulir di bawah ini, tim kami akan merespons secepat mungkin.</p>
                    
                    <form action="{{ route('contact.store') }}" method="POST" id="contact-message-form">
                        @csrf
                        <div id="contact-alert-success" class="alert alert-success" style="display: none; background-color: #d1fae5; color: #065f46; padding: 1rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem; font-weight: 600; font-size: 0.9rem; border-left: 4px solid #10b981;"></div>
                        <div id="contact-alert-error" class="alert alert-danger" style="display: none; background-color: #fee2e2; color: #991b1b; padding: 1rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem; font-weight: 600; font-size: 0.9rem; border-left: 4px solid #ef4444;"></div>
                        
                        <div class="contact-form-grid">
                            <div class="form-group-wrap">
                                <label>Nama Lengkap *</label>
                                <input type="text" name="name" id="name" required placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group-wrap">
                                <label>Email *</label>
                                <input type="email" name="email" id="email" required placeholder="Alamat Email">
                            </div>
                            <div class="form-group-wrap">
                                <label>Nomor Telepon / WhatsApp *</label>
                                <input type="text" name="phone" id="phone" required placeholder="Nomor WhatsApp">
                            </div>
                            <div class="form-group-wrap">
                                <label>Subjek *</label>
                                <input type="text" name="subject" id="subject" required placeholder="Subjek Pesan">
                            </div>
                            <div class="form-group-wrap full-width">
                                <label>Pesan Anda *</label>
                                <textarea name="message" id="message" rows="5" required placeholder="Ketik pesan Anda di sini..."></textarea>
                            </div>
                        </div>
                        
                        <div class="consent-checkbox-wrap">
                            <input type="checkbox" id="privacy-consent" required>
                            <label for="privacy-consent">Dengan mengirimkan pesan ini, Anda menyetujui kebijakan privasi kami.</label>
                        </div>
                        
                        <button type="submit" id="contact-submit-btn" class="btn btn-purple-submit">Kirim Pesan <i class="far fa-paper-plane"></i></button>
                    </form>
                </div>
                
                <!-- Map Column -->
                <div class="map-container-card" id="lokasi">
                    <h3>LOKASI KAMI</h3>
                    <div class="map-wrapper-box">
                        <!-- Mock Map Design / CSS Art Map Layout -->
                        <div class="map-css-placeholder">
                            <div class="map-grid-pattern"></div>
                            <div class="map-marker-pin">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="map-floating-card">
                                <div class="floating-logo">
                                    <svg width="24" height="24" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="21" cy="21" r="21" fill="#2d1a47"/>
                                        <path d="M15 21C15 17.6863 17.6863 15 21 15V27C17.6863 27 15 24.3137 15 21Z" fill="#fbbf24"/>
                                    </svg>
                                </div>
                                <div class="floating-details">
                                    <strong>IGAKERTA Publisher</strong>
                                    <span>Petukangan Utara, Pesanggrahan, Jakarta Selatan 12260</span>
                                    <a href="https://maps.google.com" target="_blank" class="btn-map-link">Buka di Google Maps <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-padding faq-section">
        <div class="container">
            <h2 class="faq-section-title text-center">PERTANYAAN YANG SERING DIAJUKAN</h2>
            <p class="faq-section-subtitle text-center" style="margin-bottom: 4rem;">Cari jawaban cepat untuk pertanyaan yang sering ditanyakan.</p>
            
            <div class="faq-split-grid">
                <!-- FAQ Accordions -->
                <div class="faq-accordion-wrap">
                    <div class="faq-item">
                        <button class="faq-header">
                            Bagaimana cara menghubungi IGAKERTA Publisher?
                            <i class="fas fa-chevron-down faq-chevron"></i>
                        </button>
                        <div class="faq-content">
                            <p>Anda dapat menghubungi kami melalui formulir kontak di atas, mengirim email ke cs@igakerta.com / igakertapublisher@gmail.com, atau menghubungi Customer Service kami via WhatsApp di 0851-8784-5986.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-header">
                            Jam operasional IGAKERTA Publisher?
                            <i class="fas fa-chevron-down faq-chevron"></i>
                        </button>
                        <div class="faq-content">
                            <p>Kantor kami beroperasi setiap hari Senin hingga Jumat, mulai pukul 08.00 sampai dengan 17.00 WIB. Layanan konsultasi chat via WhatsApp juga aktif pada jam tersebut.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-header">
                            Bagaimana cara bekerja sama dengan IGAKERTA Publisher?
                            <i class="fas fa-chevron-down faq-chevron"></i>
                        </button>
                        <div class="faq-content">
                            <p>Bagi institusi, organisasi, atau komunitas yang ingin bekerjasama dalam bentuk penerbitan buku massal, publikasi jurnal, atau kegiatan abdimas, silakan hubungi bagian kemitraan kami melalui WhatsApp atau kirimkan proposal kemitraan via email.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-header">
                            Apakah IGAKERTA Publisher melayani konsultasi gratis?
                            <i class="fas fa-chevron-down faq-chevron"></i>
                        </button>
                        <div class="faq-content">
                            <p>Ya, kami menyediakan layanan konsultasi gratis bagi dosen, peneliti, guru, atau umum yang ingin mengetahui estimasi biaya, alur pendaftaran ISBN, dan cara konversi naskah skripsi/tesis/disertasi menjadi buku terbitan resmi.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Support Banner Card -->
                <div class="faq-support-card">
                    <div class="support-avatar-circle">
                        <!-- Custom Headset SVG icon -->
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Butuh Bantuan Langsung?</h3>
                    <p>Tim kami siap membantu Anda melalui telepon atau WhatsApp pada jam operasional.</p>
                    <a href="https://wa.me/6285187845986?text=Halo%20Admin%20IGAKERTA,%20saya%20butuh%20bantuan%20langsung%20dan%20informasi%20penerbitan." target="_blank" class="btn btn-support-wa">Hubungi Kami Sekarang <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

@endsection
