@extends('layouts.layout')

@section('title', 'Katalog Buku Terbitan - IGAKERTA Publisher')
@section('meta_desc', 'Temukan koleksi buku akademik, buku ajar, monograf, fiksi, dan non-fiksi ber-ISBN resmi terbitan IGAKERTA Publisher.')

@section('content')

    <!-- Catalog Hero -->
    <section class="katalog-hero">
        <div class="container">
            <div class="katalog-hero-grid">
                <div class="katalog-hero-text">
                    <span class="hero-tag-small">KATALOG BUKU</span>
                    <h1 class="hero-title-main" style="color: #fff;">Koleksi Buku<br><span>IGAKERTA Publisher</span></h1>
                    <p class="hero-desc-main" style="color: rgba(255, 255, 255, 0.85);">
                        Temukan berbagai buku referensi ilmiah, buku ajar perkuliahan, buku monograf, dan literatur umum berkualitas tinggi karya akademisi terbaik Indonesia.
                    </p>
                    <div class="hero-search-wrap">
                        <div class="search-box">
                            <i class="fas fa-search search-icon"></i>
                            <input type="text" id="book-search" placeholder="Cari judul buku, penulis, atau ISBN...">
                        </div>
                    </div>
                </div>
                <div class="katalog-hero-image">
                    <div class="books-stack-mockup">
                        <div class="stack-book-item book-1"></div>
                        <div class="stack-book-item book-2"></div>
                        <div class="stack-book-item book-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalog Content -->
    <section class="section-padding katalog-main-section">
        <div class="container">
            <!-- Category Tabs Scrollable Row -->
            <div class="kategori-filter-bar">
                <button class="filter-btn active" data-filter="all"><i class="fas fa-th-large"></i> Semua Kategori</button>
                @foreach($categories as $category)
                    <button class="filter-btn" data-filter="{{ $category }}"><i class="far fa-folder"></i> {{ $category }}</button>
                @endforeach
            </div>

            <!-- Toolbar filters -->
            <div class="katalog-toolbar">
                <div class="toolbar-left">
                    <span class="results-count">Menampilkan <strong id="visible-books-count">{{ count($books) }}</strong> dari <strong>{{ count($books) }}</strong> Buku</span>
                </div>
                <div class="toolbar-right">
                    <div class="select-wrapper">
                        <select id="sort-filter">
                            <option value="latest">Urutkan: Terbaru</option>
                            <option value="title-asc">Judul: A - Z</option>
                            <option value="price-asc">Harga: Terendah</option>
                            <option value="price-desc">Harga: Tertinggi</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Empty State -->
            <div class="no-books-box" id="no-books-found" style="display: none;">
                <div class="no-books-icon"><i class="fas fa-book-open"></i></div>
                <h3>Buku Tidak Ditemukan</h3>
                <p>Maaf, buku yang Anda cari tidak tersedia dalam kategori atau kata kunci tersebut.</p>
                <button class="btn btn-purple-solid" onclick="document.getElementById('book-search').value = ''; document.querySelector('.filter-btn[data-filter=all]').click();">Reset Pencarian</button>
            </div>

            <!-- Book Cards Grid -->
            <div class="book-catalog-grid" id="book-catalog-grid">
                @foreach($books as $book)
                    <div class="book-card-item" 
                         data-category="{{ $book->category }}" 
                         data-title="{{ $book->title }}" 
                         data-author="{{ $book->author }}"
                         data-price="{{ $book->price }}"
                         data-year="{{ $book->published_year }}"
                         data-date="{{ $book->created_at }}">
                        <div class="book-card-cover-wrapper">
                            <div class="book-cover-art-box">
                                <span class="cover-cat">{{ $book->category }}</span>
                                <h4 class="cover-title">{{ $book->title }}</h4>
                                <span class="cover-author">{{ $book->author }}</span>
                            </div>
                        </div>
                        <div class="book-card-content">
                            <span class="book-card-badge">{{ $book->category }}</span>
                            <h3 class="book-card-title">{{ $book->title }}</h3>
                            <p class="book-card-author">Oleh: {{ $book->author }}</p>
                            <div class="book-card-footer">
                                <span class="book-card-price">Rp {{ number_format($book->price, 0, ',', '.') }}</span>
                                <button class="btn btn-detail" 
                                        data-title="{{ $book->title }}"
                                        data-author="{{ $book->author }}"
                                        data-category="{{ $book->category }}"
                                        data-price-formatted="Rp {{ number_format($book->price, 0, ',', '.') }}"
                                        data-price-raw="{{ $book->price }}"
                                        data-description="{{ $book->description }}"
                                        data-pages="{{ $book->pages }}"
                                        data-year="{{ $book->published_year }}"
                                        data-isbn="{{ $book->isbn }}">
                                    Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Metrics Row -->
    <section class="katalog-metrics-section">
        <div class="container">
            <div class="katalog-metrics-grid">
                <div class="katalog-metric-item">
                    <h3>150+</h3>
                    <p>Buku Terbit</p>
                </div>
                <div class="katalog-metric-item">
                    <h3>20+</h3>
                    <p>Kategori Buku</p>
                </div>
                <div class="katalog-metric-item">
                    <h3>500+</h3>
                    <p>Penulis Terdaftar</p>
                </div>
                <div class="katalog-metric-item">
                    <h3>10.000+</h3>
                    <p>Pembaca Aktif</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="section-padding newsletter-section">
        <div class="container">
            <div class="newsletter-card-box">
                <h2>Dapatkan Informasi Buku Terbaru</h2>
                <p>Daftar newsletter kami untuk mendapatkan update buku terbaru, diskon, dan informasi menarik lainnya.</p>
                
                <form action="#" method="POST" class="newsletter-form">
                    @csrf
                    <input type="email" placeholder="Alamat Email Anda" required>
                    <button type="submit" class="btn btn-yellow-solid">Daftar Sekarang</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Book Details Modal -->
    <div class="modal" id="book-detail-modal">
        <div class="modal-content-wrapper">
            <button class="modal-close" id="modal-close-btn" aria-label="Close modal">&times;</button>
            <div class="modal-body-grid">
                <!-- Modal Left: Book Cover Placeholder -->
                <div class="modal-cover-side">
                    <div class="modal-book-cover-design" id="m-cover-placeholder">
                        <span class="m-cover-cat" id="m-category-badge-cover">Pendidikan</span>
                        <h4 class="m-cover-title" id="m-title-cover">Judul Buku</h4>
                        <span class="m-cover-author" id="m-author-cover">Penulis</span>
                    </div>
                </div>
                <!-- Modal Right: Book Details -->
                <div class="modal-details-side">
                    <span class="modal-badge-cat" id="m-category">Kategori</span>
                    <h2 class="modal-detail-title" id="m-title">Judul Lengkap Buku</h2>
                    <p class="modal-detail-author">Ditulis oleh: <strong id="m-author">Nama Penulis</strong></p>
                    
                    <div class="modal-meta-specs">
                        <div class="spec-cell">
                            <span class="cell-label">Tebal Buku</span>
                            <span class="cell-value" id="m-pages">210 Halaman</span>
                        </div>
                        <div class="spec-cell">
                            <span class="cell-label">Tahun Terbit</span>
                            <span class="cell-value" id="m-year">2024</span>
                        </div>
                        <div class="spec-cell">
                            <span class="cell-label">ISBN</span>
                            <span class="cell-value" id="m-isbn">978-xxx-xxxx-xx-x</span>
                        </div>
                    </div>

                    <div class="modal-description-wrap">
                        <h3>Sinopsis / Deskripsi Buku</h3>
                        <p id="m-desc">
                            Deskripsi sinopsis buku yang dimuat secara dinamis dari database.
                        </p>
                    </div>

                    <div class="modal-order-footer">
                        <div class="modal-price-wrap">
                            <span class="price-label">Harga</span>
                            <span class="price-val" id="m-price">Rp 75.000</span>
                        </div>
                        <a href="#" id="m-wa-btn" target="_blank" class="btn btn-order-wa">
                            <i class="fab fa-whatsapp"></i> Hubungi via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
