@extends('layouts.layout')

@section('title', 'Kumpulan Informasi & Tips Publikasi - Artikel IGAKERTA')
@section('meta_desc', 'Temukan tips penulisan buku ajar, panduan pengajuan ISBN, serta info terbaru mengenai Jurnal Ilmiah Igakerta.')

@section('content')

    <!-- Article Hero -->
    <section class="artikel-hero">
        <div class="container">
            <div class="artikel-hero-grid">
                <div class="artikel-hero-text">
                    <span class="hero-tag-small">ARTIKEL</span>
                    <h1 class="hero-title-main" style="color: #fff;">Insight, Inspirasi & Informasi<br>untuk Penulis & Akademisi</h1>
                    <p class="hero-desc-main" style="color: rgba(255, 255, 255, 0.85);">
                        Temukan artikel, berita terkini, tips penulisan buku, dan panduan publikasi jurnal ilmiah bereputasi untuk menunjang karir akademik Anda.
                    </p>
                    <div class="hero-search-wrap">
                        <div class="search-box">
                            <i class="fas fa-search search-icon"></i>
                            <input type="text" id="article-search" placeholder="Cari artikel...">
                        </div>
                    </div>
                </div>
                <div class="artikel-hero-image">
                    <div class="artikel-laptop-mockup">
                        <div class="mockup-screen-art">
                            <div class="blog-preview-header">IGAKERTA BLOG</div>
                            <div class="blog-preview-body">
                                <h3>Menulis Buku Ajar</h3>
                                <p>Tips mengonversi penelitian menjadi buku ajar ber-ISBN...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kategori Bar Section -->
    <section class="artikel-cats-section">
        <div class="container">
            <div class="artikel-categories-row">
                <button class="cat-pill active" data-filter="all">Semua Artikel</button>
                <button class="cat-pill" data-filter="publikasi-ilmiah">Publikasi Ilmiah (24)</button>
                <button class="cat-pill" data-filter="tips-menulis-buku">Tips Menulis Buku (18)</button>
                <button class="cat-pill" data-filter="penelitian">Penelitian (20)</button>
                <button class="cat-pill" data-filter="abdimas">Abdimas (16)</button>
                <button class="cat-pill" data-filter="kkn">KKN (12)</button>
                <button class="cat-pill" data-filter="pendidikan">Pendidikan (22)</button>
            </div>
        </div>
    </section>

    <!-- Main Content Section (Two-Column) -->
    <section class="section-padding artikel-main-section">
        <div class="container">
            <div class="artikel-two-column-grid">
                
                <!-- Left Column: Articles Grid -->
                <div class="artikel-feed-side">
                    <div class="feed-toolbar">
                        <h2>Artikel Terbaru</h2>
                        <div class="select-wrapper">
                            <select id="article-sort">
                                <option value="latest">Urutkan: Terbaru</option>
                                <option value="oldest">Urutkan: Terlama</option>
                            </select>
                        </div>
                    </div>

                    <div class="artikel-feed-grid" id="artikel-feed-grid">
                        @foreach($articles as $item)
                            <article class="artikel-feed-card" data-category="{{ Str::slug($item->category) }}" data-title="{{ $item->title }}">
                                <div class="feed-card-image-box">
                                    <div class="feed-image-placeholder">
                                        <i class="far fa-newspaper"></i>
                                    </div>
                                    <span class="feed-card-badge-tag">{{ $item->category }}</span>
                                </div>
                                <div class="feed-card-body">
                                    <h3 class="feed-card-title">
                                        <a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a>
                                    </h3>
                                    <p class="feed-card-excerpt">
                                        {{ Str::limit(strip_tags($item->content), 120) }}
                                    </p>
                                    <div class="feed-card-meta">
                                        <span><i class="far fa-calendar"></i> {{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}</span>
                                        <span><i class="far fa-user"></i> {{ $item->author }}</span>
                                        <span><i class="far fa-clock"></i> 5 Menit Baca</span>
                                    </div>
                                    <a href="{{ route('news.show', $item->slug) }}" class="btn-read-more">
                                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <!-- Custom Pagination -->
                    @if ($articles->hasPages())
                        <div class="pagination">
                            @if ($articles->onFirstPage())
                                <span class="pagination-item" style="opacity: 0.5; cursor: not-allowed;"><i class="fas fa-chevron-left"></i></span>
                            @else
                                <a href="{{ $articles->previousPageUrl() }}" class="pagination-item"><i class="fas fa-chevron-left"></i></a>
                            @endif

                            @foreach ($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
                                @if ($page == $articles->currentPage())
                                    <span class="pagination-item active">{{ $page }}</span>
                                                        @else
                                    <a href="{{ $url }}" class="pagination-item">{{ $page }}</a>
                                                        @endif
                            @endforeach

                            @if ($articles->hasMorePages())
                                <a href="{{ $articles->nextPageUrl() }}" class="pagination-item"><i class="fas fa-chevron-right"></i></a>
                            @else
                                <span class="pagination-item" style="opacity: 0.5; cursor: not-allowed;"><i class="fas fa-chevron-right"></i></span>
                            @endif
                        </div>
                    @endif
                </div>

                <!-- Right Column: Sidebar -->
                <aside class="artikel-sidebar-side">
                    <!-- Popular Articles Widget -->
                    <div class="sidebar-widget popular-widget">
                        <h3>Artikel Populer</h3>
                        <div class="popular-list">
                            <!-- Popular Item 1 -->
                            <div class="popular-item">
                                <span class="popular-num">01</span>
                                <div class="popular-details">
                                    <h4><a href="#">Cara Cepat Mengurus ISBN Buku Ajar ke Perpusnas</a></h4>
                                    <span class="popular-meta"><i class="far fa-calendar"></i> 12 Mei 2024 &bull; <i class="far fa-eye"></i> 1.250</span>
                                </div>
                            </div>
                            <!-- Popular Item 2 -->
                            <div class="popular-item">
                                <span class="popular-num">02</span>
                                <div class="popular-details">
                                    <h4><a href="#">Panduan Lengkap Konversi Tesis Menjadi Buku Referensi</a></h4>
                                    <span class="popular-meta"><i class="far fa-calendar"></i> 05 Apr 2024 &bull; <i class="far fa-eye"></i> 980</span>
                                </div>
                            </div>
                            <!-- Popular Item 3 -->
                            <div class="popular-item">
                                <span class="popular-num">03</span>
                                <div class="popular-details">
                                    <h4><a href="#">Mengenal Struktur OJS 3 untuk Submit Jurnal Ilmiah</a></h4>
                                    <span class="popular-meta"><i class="far fa-calendar"></i> 22 Mar 2024 &bull; <i class="far fa-eye"></i> 875</span>
                                </div>
                            </div>
                            <!-- Popular Item 4 -->
                            <div class="popular-item">
                                <span class="popular-num">04</span>
                                <div class="popular-details">
                                    <h4><a href="#">Pemberdayaan Masyarakat: Metodologi dan Pendekatan KKN</a></h4>
                                    <span class="popular-meta"><i class="far fa-calendar"></i> 10 Feb 2024 &bull; <i class="far fa-eye"></i> 640</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Newsletter Widget -->
                    <div class="sidebar-widget newsletter-widget-small">
                        <div class="widget-icon-box"><i class="far fa-envelope-open"></i></div>
                        <h3>Dapatkan Update Artikel Terbaru</h3>
                        <p>Berlangganan newsletter kami untuk update artikel menarik, tips menulis, dan info publikasi ilmiah.</p>
                        
                        <form action="#" method="POST" class="widget-newsletter-form">
                            @csrf
                            <input type="email" placeholder="Alamat Email Anda" required>
                            <button type="submit" class="btn btn-purple-block">Berlangganan</button>
                        </form>
                    </div>
                </aside>

            </div>
        </div>
    </section>

    <!-- Article Suggestion Banner -->
    <section class="collab-banner">
        <div class="container">
            <div class="collab-banner-card">
                <div class="collab-left">
                    <div class="collab-icon-circle"><i class="far fa-lightbulb"></i></div>
                </div>
                <div class="collab-middle">
                    <h2>Punya Topik Menarik untuk Dibahas?</h2>
                    <p>Kirimkan ide tulisan atau artikel opini Anda untuk kami publikasikan di media blog IGAKERTA.</p>
                </div>
                <div class="collab-right">
                    <a href="https://wa.me/6285187845986?text=Halo%20Admin%20IGAKERTA,%20saya%20punya%20ide%20artikel%20dan%20tertarik%20mengirimkannya." target="_blank" class="btn btn-yellow-solid">Kirim Ide Artikel <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

@endsection
