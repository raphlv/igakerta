<!DOCTYPE html>
<html lang="id" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Optimization -->
    <title>@yield('title', 'IGAKERTA Publisher - Penerbit & Percetakan Terpercaya')</title>
    <meta name="description" content="@yield('meta_desc', 'IGAKERTA Publisher adalah penerbit dan percetakan bereputasi di Jakarta Selatan. Kami menerbitkan buku pendidikan, non-fiksi, fiksi, e-book, dan Jurnal Ilmiah Igakerta.')">
    <meta name="keywords" content="igakerta, penerbit igakerta, percetakan jakarta selatan, penerbit buku abdimas, jurnal abdimas, e-issn 3048-4499, menerbitkan buku dosen, kkn abdimas">
    <meta name="author" content="IGAKERTA Publisher">
    
    <!-- CSRF Token for AJAX -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ time() }}">
    
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container top-bar-container">
            <div class="top-bar-left">
                <span><i class="fas fa-map-marker-alt"></i> Jakarta</span>
                <span class="divider">|</span>
                <span><i class="fas fa-envelope"></i> cs@igakerta.com || igakertapublisher@gmail.com</span>
                <span class="divider">|</span>
                <span><i class="fas fa-phone-alt"></i> 6285187845986</span>
            </div>
            <div class="top-bar-right">
                <!--<span>Layanan Kami: Senin - Jumat (08.00 - 17.00)</span>-->
                <div class="top-socials">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <!--<a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Youtube"><i class="fab fa-youtube"></i></a>-->
                </div>
            </div>
        </div>
    </div>

    <!-- Header & Navigation -->
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="brand">
                    <div class="logo-container">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo IGAKERTA" class="logo-img" style="height: 42px; width: 42px; object-fit: contain;">
                        <div class="brand-logo-text">
                            <span class="brand-title">IGAKERTA</span>
                            <span class="brand-subtitle">PUBLISHER</span>
                        </div>
                    </div>
                </a>
                
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}">Beranda</a></li>
                    <li><a href="{{ route('tentang-kami') }}" class="nav-link {{ Route::is('tentang-kami') ? 'active' : '' }}">Tentang Kami</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link {{ Route::is('author-services') ? 'active' : '' }}">Penerbitan Buku <i class="fas fa-chevron-down nav-chevron"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('author-services') }}#alur-penerbitan">Alur Penerbitan</a></li>
                            <li><a href="{{ route('author-services') }}#layanan">Fasilitas Penerbitan</a></li>
                            <li><a href="{{ route('author-services') }}#pricing">Paket Penerbitan</a></li>
                            <li><a href="{{ route('author-services') }}#kirim-naskah">Kirim Naskah</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link {{ Route::is('jurnal') ? 'active' : '' }}">Jurnal <i class="fas fa-chevron-down nav-chevron"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('jurnal') }}">Jurnal Igakerta</a></li>
                            <li><a href="{{ route('jurnal') }}#ruang-lingkup">Ruang Lingkup</a></li>
                            <li><a href="{{ route('jurnal') }}#terbitan-terbaru">Terbitan Terbaru</a></li>
                            <li><a href="{{ route('jurnal') }}#indeksasi">Indeksasi</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('bookstore') }}" class="nav-link {{ Route::is('bookstore') ? 'active' : '' }}">Katalog Buku</a></li>
                    <li><a href="{{ route('news.index') }}" class="nav-link {{ Route::is('news.*') ? 'active' : '' }}">Artikel</a></li>
                    <li><a href="{{ route('mitra') }}" class="nav-link {{ Route::is('mitra') ? 'active' : '' }}">Mitra</a></li>
                    <li><a href="{{ route('hubungi-kami') }}" class="nav-link {{ Route::is('hubungi-kami') ? 'active' : '' }}">Hubungi Kami</a></li>
                </ul>
                
                <div class="nav-actions">
                    <a href="{{ route('jurnal') }}#submit" class="btn btn-nav-submit-jurnal">
                        <i class="far fa-edit"></i> Submit Jurnal
                    </a>
                    <a href="{{ route('author-services') }}" class="btn btn-nav-terbitkan">
                        <i class="fas fa-pen-nib"></i> Terbitkan Naskah
                    </a>
                </div>

                <button class="menu-toggle" id="menu-toggle" aria-label="Toggle Navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Info Column -->
                <div class="footer-info">
                    <div class="footer-logo">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo IGAKERTA" class="logo-img-footer" style="height: 36px; width: 36px; object-fit: contain; background: #fff; border-radius: 50%; padding: 2px;">
                        <div class="footer-logo-text">IGAKERTA<br><span>PUBLISHER</span></div>
                    </div>
                    <p class="footer-desc">
                        Penerbit publikasi akademik yang berkomitmen mencerdaskan kehidupan melalui tulisan.
                    </p>
                    <div class="footer-socials">
                        <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                       <!-- <a href="#" class="social-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon" aria-label="Email"><i class="fas fa-envelope"></i></a>-->
                    </div>
                </div>

                <!-- Links Column 1: Penerbit -->
                <div class="footer-links">
                    <h3>PENERBIT</h3>
                    <ul class="footer-links-list">
                        <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('tentang-kami') }}#visi-misi">Visi & Misi</a></li>
                        <li><a href="{{ route('tentang-kami') }}#tim-editorial">Tim Editorial</a></li>
                        <li><a href="{{ route('tentang-kami') }}#legalitas">Legalitas</a></li>
                        <li><a href="{{ route('tentang-kami') }}#karir">Karir</a></li>
                    </ul>
                </div>

                <!-- Links Column 2: Penerbitan Buku -->
                <div class="footer-links">
                    <h3>PENERBITAN BUKU</h3>
                    <ul class="footer-links-list">
                        <li><a href="{{ route('author-services') }}#alur-penerbitan">Alur Penerbitan</a></li>
                        <li><a href="{{ route('author-services') }}#layanan">Fasilitas Penerbitan</a></li>
                        <li><a href="{{ route('author-services') }}#pricing">Paket Penerbitan</a></li>
                        <li><a href="{{ route('author-services') }}#kirim-naskah">Kirim Naskah</a></li>
                    </ul>
                </div>

                <!-- Links Column 3: Jurnal -->
                <div class="footer-links">
                    <h3>JURNAL</h3>
                    <ul class="footer-links-list">
                        <li><a href="{{ route('jurnal') }}">Jurnal Igakerta</a></li>
                        <li><a href="{{ route('jurnal') }}#call-for-paper">Call for Paper</a></li>
                        <li><a href="{{ route('jurnal') }}#reviewer">Reviewer</a></li>
                        <li><a href="{{ route('jurnal') }}#template">Template Artikel</a></li>
                        <li><a href="{{ route('jurnal') }}#submit">Submit Artikel</a></li>
                    </ul>
                </div>

                <!-- Links Column 4: Informasi -->
                <div class="footer-links">
                    <h3>INFORMASI</h3>
                    <ul class="footer-links-list">
                        <li><a href="{{ route('news.index') }}">Artikel</a></li>
                        <li><a href="{{ route('news.index') }}#berita">Berita</a></li>
                        <li><a href="{{ route('mitra') }}">Mitra</a></li>
                        <li><a href="{{ route('hubungi-kami') }}#faq">FAQ</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div class="footer-contact">
                    <h3>KONTAK KAMI</h3>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="footer-contact-text">
                           Jakarta
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="fas fa-envelope"></i></div>
                        <div class="footer-contact-text">
                            cs@igakerta.com || igakertapublisher@gmail.com
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="footer-contact-text">
                            6285187845986
                        </div>
                    </div>
                    <div class="footer-contact-item">
                       <!-- <div class="footer-contact-icon"><i class="far fa-clock"></i></div>
                        <div class="footer-contact-text">-->
                          
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; 2026 IGAKERTA Publisher. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <span class="divider">|</span>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Widget -->
    <a href="https://wa.me/6285187845986?text=Halo%20Admin%20IGAKERTA,%20saya%20ingin%20berkonsultasi%20mengenai%20penerbitan." class="wa-float" target="_blank" aria-label="WhatsApp Chat">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
