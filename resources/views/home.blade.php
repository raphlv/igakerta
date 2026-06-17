@extends('layouts.layout')

@section('title', 'Penerbit & Percetakan Terpercaya - IGAKERTA Publisher')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-text">
                    <span class="hero-tag"><i class="fas fa-award"></i> Resmi & Terpercaya</span>
                    <h1 class="hero-title">Melalui Tulisan, Untuk <span>Mencerdaskan</span> Kehidupan Bersama</h1>
                    <p class="hero-description">
                        Mari berkarya bersama IGAKERTA Publisher. Kami siap mendampingi Anda menerbitkan buku ajar, monograf, fiksi, non-fiksi, dan jurnal ilmiah dengan pendaftaran ISBN resmi.
                    </p>
                    <div class="hero-actions">
                        <a href="{{ route('bookstore') }}" class="btn btn-primary">
                            <i class="fas fa-book-open"></i> Jelajahi Bookstore
                        </a>
                        <a href="{{ route('author-services') }}" class="btn btn-secondary">
                            <i class="fas fa-file-upload"></i> Terbitkan Buku Anda
                        </a>
                    </div>
                </div>
                
                <div class="hero-visual">
                    <div class="hero-circle-bg"></div>
                    <!-- An elegant SVG Graphic representing publishing, knowledge, and prestige -->
                    <svg class="hero-graphic" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="250" cy="250" r="210" fill="url(#hero-gradient)" />
                        <!-- Abstract book open pages -->
                        <path d="M120 380C120 320 180 300 250 300C320 300 380 320 380 380" stroke="#d97706" stroke-width="6" stroke-linecap="round" />
                        <path d="M140 380V240C140 200 180 180 250 180V300C180 300 140 320 140 380Z" fill="#1e293b" opacity="0.95" />
                        <path d="M360 380V240C360 200 320 180 250 180V300C320 300 360 320 360 380Z" fill="#334155" opacity="0.9" />
                        <!-- Little glowing particles / stars representing inspiration -->
                        <path d="M250 110L253 118L261 121L253 124L250 132L247 124L239 121L247 118L250 110Z" fill="#f59e0b" />
                        <path d="M180 140L181.5 144L185.5 145.5L181.5 147L180 151L178.5 147L174.5 145.5L178.5 144L180 140Z" fill="#f59e0b" opacity="0.7" />
                        <path d="M320 140L321.5 144L325.5 145.5L321.5 147L320 151L318.5 147L314.5 145.5L318.5 144L320 140Z" fill="#f59e0b" opacity="0.7" />
                        <defs>
                            <radialGradient id="hero-gradient" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" transform="translate(250 250) rotate(90) scale(210)">
                                <stop stop-color="#1e293b" />
                                <stop offset="1" stop-color="#0f172a" />
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="section-padding">
        <div class="container text-center">
            <h2 class="section-title">Layanan & Keunggulan Kami</h2>
            <p style="max-width: 600px; margin: 0 auto 3rem;">Kami menyediakan solusi hulu ke hilir untuk penerbitan karya ilmiah, akademik, maupun sastra populer.</p>
            
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-feather-alt"></i>
                    </div>
                    <h3 class="service-title">Penerbitan Ber-ISBN</h3>
                    <p class="service-desc">Kami merupakan anggota resmi yang terdaftar sehingga dapat memproses pendaftaran ISBN naskah Anda ke Perpustakaan Nasional RI.</p>
                </div>
                
                <!-- Service 2
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-print"></i>
                    </div>
                    <h3 class="service-title">Percetakan Premium</h3>
                    <p class="service-desc">Didukung mesin cetak modern berteknologi tinggi untuk memproduksi buku cetak, modul, prosiding, dengan pilihan kertas bookpaper eksklusif.</p>
                </div>-->
                
                <!-- Service 3 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3 class="service-title">Jurnal Pengabdian (Abdimas)</h3>
                    <p class="service-desc">Kami mempublikasikan Jurnal Igakerta secara reguler untuk mewadahi karya ilmiah hasil pengabdian masyarakat & KKN.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="section-padding vision">
        <div class="container">
            <div class="vision-grid">
                <div class="vision-left">
                    <h2>Visi Kami</h2>
                    <div class="divider"></div>
                    <p class="vision-quote">
                        "Menjadi penerbit bereputasi bagi karya-karya penulisan yang memperkaya dan memberdayakan masyarakat, melalui akses terhadap pengetahuan, inspirasi, dan inovasi yang berkelanjutan."
                    </p>
                </div>
                
                <div class="vision-right">
                    <!-- Value 1 -->
                    <div class="vision-item">
                        <div class="vision-number">01</div>
                        <div class="vision-content">
                            <h3>Mengedukasi Masyarakat</h3>
                            <p>Menyediakan bacaan berkualitas tinggi yang meningkatkan pengetahuan, pemahaman, dan keterampilan pembaca di berbagai bidang ilmu pengetahuan.</p>
                        </div>
                    </div>
                    
                    <!-- Value 2 -->
                    <div class="vision-item">
                        <div class="vision-number">02</div>
                        <div class="vision-content">
                            <h3>Menginspirasi Inovasi</h3>
                            <p>Mendorong para penulis, dosen, dan peneliti untuk terus bereksplorasi dan berinovasi, baik dalam pemikiran akademik maupun tindakan pengabdian.</p>
                        </div>
                    </div>
                    
                    <!-- Value 3 -->
                    <div class="vision-item">
                        <div class="vision-number">03</div>
                        <div class="vision-content">
                            <h3>Menjangkau Luas</h3>
                            <p>Memastikan ketersediaan buku-buku kami di seluruh pelosok Indonesia secara fisik melalui jaringan distribusi nasional dan secara digital melalui platform e-book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Workflow Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center workflow-title">
                <h2 class="section-title">Alur Penerbitan Buku</h2>
                <p style="max-width: 600px; margin: 0 auto;">Langkah mudah menerbitkan karya ilmiah atau buku populer Anda di IGAKERTA Publisher.</p>
            </div>
            
            <div class="workflow-steps">
                <!-- Step 1 -->
                <div class="workflow-step">
                    <div class="workflow-num">1</div>
                    <h3>Kirim Naskah</h3>
                    <p>Kirim draf naskah Anda.</p>
                </div>
                <!-- Step 2 -->
                <div class="workflow-step">
                    <div class="workflow-num">2</div>
                    <h3>Review & Estimasi</h3>
                    <p>Editor kami akan mengevaluasi kelayakan naskah & biaya.</p>
                </div>
                <!-- Step 3 -->
                <div class="workflow-step">
                    <div class="workflow-num">3</div>
                    <h3>Layout & Cover</h3>
                    <p>Proses penyuntingan tata letak isi dan perancangan desain cover premium.</p>
                </div>
                <!-- Step 4 -->
                <div class="workflow-step">
                    <div class="workflow-num">4</div>
                    <h3>ISBN & Cetak</h3>
                    <p>Pengurusan pendaftaran ISBN resmi dan proses pencetakan buku.</p>
                </div>
                <!-- Step 5 -->
                <div class="workflow-step">
                    <div class="workflow-num">5</div>
                    <h3>Distribusi</h3>
                    <p>Buku siap dikirim ke penulis dan dipasarkan di Bookstore kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Books Section -->
    <section class="section-padding" style="background-color: var(--color-bg-alt);">
        <div class="container">
            <div class="text-center" style="margin-bottom: 3rem;">
                <h2 class="section-title">Buku Terbitan Terbaru</h2>
                <p style="max-width: 600px; margin: 0 auto;">Karya-karya pilihan karya akademisi terkemuka yang baru saja diterbitkan oleh IGAKERTA Publisher.</p>
            </div>
            
            <div class="books-grid">
                @foreach($featuredBooks as $book)
                    <div class="book-card">
                        <div class="book-cover-container">
                            <span class="book-category-badge">{{ $book->category }}</span>
                            <!-- Placeholder cover in case of no image -->
                            <div class="book-cover-placeholder 
                                @if(strtolower($book->category) == 'jurnal') book-cover-placeholder-jurnal
                                @elseif(strtolower($book->category) == 'pendidikan') book-cover-placeholder-pendidikan
                                @elseif(strtolower($book->category) == 'fiksi') book-cover-placeholder-fiksi
                                @else book-cover-placeholder-alt @endif">
                                <span class="book-placeholder-category">{{ $book->category }}</span>
                                <span class="book-placeholder-title">{{ $book->title }}</span>
                                <span class="book-placeholder-logo">IGAKERTA</span>
                            </div>
                        </div>
                        <div class="book-info">
                            <h3 class="book-title">{{ $book->title }}</h3>
                            <p class="book-author">Oleh: {{ $book->author }}</p>
                            <div class="book-footer">
                                <span class="book-price">Rp {{ number_format($book->price, 0, ',', '.') }}</span>
                                <button class="btn-detail" 
                                    data-title="{{ $book->title }}"
                                    data-author="{{ $book->author }}"
                                    data-category="{{ $book->category }}"
                                    data-price-formatted="Rp {{ number_format($book->price, 0, ',', '.') }}"
                                    data-price-raw="{{ $book->price }}"
                                    data-description="{{ $book->description }}"
                                    data-isbn="{{ $book->isbn }}"
                                    data-pages="{{ $book->pages }}"
                                    data-year="{{ $book->published_year }}"
                                    data-type="@if(strtolower($book->category) == 'jurnal') jurnal @elseif(strtolower($book->category) == 'pendidikan') pendidikan @elseif(strtolower($book->category) == 'fiksi') fiksi @else alt @endif"
                                >
                                    Detail
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="text-center" style="margin-top: 3.5rem;">
                <a href="{{ route('bookstore') }}" class="btn btn-outline">
                    Lihat Seluruh Katalog <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center" style="margin-bottom: 3rem;">
                <h2 class="section-title">Berita & Informasi</h2>
                <p style="max-width: 600px; margin: 0 auto;">Simak kabar terkini seputar dunia penulisan, publikasi ilmiah, dan tips menulis buku dari kami.</p>
            </div>
            
            <div class="news-grid">
                @foreach($latestNews as $item)
                    <article class="news-card">
                        <div class="news-img-placeholder">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="news-card-body">
                            <div class="news-meta">
                                <span><i class="far fa-calendar"></i> {{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}</span>
                                <span><i class="far fa-user"></i> {{ $item->author }}</span>
                            </div>
                            <h3 class="news-card-title"><a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a></h3>
                            <p class="news-excerpt">{{ Str::limit(strip_tags($item->content), 120) }}</p>
                            <a href="{{ route('news.show', $item->slug) }}" class="news-more">
                                Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Book Detail Modal (Rendered on Home to support Detail Click) -->
    <div class="modal-overlay" id="book-detail-modal">
        <div class="modal-container">
            <button class="modal-close" id="modal-close-btn" aria-label="Close modal">&times;</button>
            <div class="modal-body">
                <div class="modal-cover-side">
                    <div class="book-cover-placeholder" id="m-cover-placeholder">
                        <span class="book-placeholder-category" id="m-cover-cat">Kategori</span>
                        <span class="book-placeholder-title" id="m-cover-title">Judul Buku</span>
                        <span class="book-placeholder-logo">IGAKERTA</span>
                    </div>
                </div>
                <div class="modal-info-side">
                    <h2 class="modal-title" id="m-title">Judul Buku Lengkap</h2>
                    <p class="modal-author" id="m-author">Penulis</p>
                    
                    <div class="modal-meta-grid">
                        <div class="meta-item">Kategori: <span id="m-category">-</span></div>
                        <div class="meta-item">Tebal: <span id="m-pages">-</span></div>
                        <div class="meta-item">Tahun Terbit: <span id="m-year">-</span></div>
                        <div class="meta-item">ISBN: <span id="m-isbn">-</span></div>
                    </div>
                    
                    <p class="modal-desc" id="m-desc">Deskripsi lengkap buku di sini.</p>
                    
                    <div class="modal-actions">
                        <span class="modal-price" id="m-price">Rp 0</span>
                        <a href="#" id="m-wa-btn" target="_blank" class="btn btn-primary">
                            <i class="fab fa-whatsapp"></i> Pesan via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
