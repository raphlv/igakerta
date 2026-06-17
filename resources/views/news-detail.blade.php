@extends('layouts.layout')

@section('title', $article->title . ' - IGAKERTA Publisher')
@section('meta_desc', Str::limit(strip_tags($article->content), 150))

@section('content')

    <!-- Article Detail Layout -->
    <article class="news-detail-container">
        
        <!-- Header -->
        <header class="news-detail-header">
            <span class="hero-tag" style="background-color: var(--color-accent-light); color: var(--color-accent-hover); margin-bottom: 1rem;">
                <i class="far fa-folder-open"></i> {{ $article->category }}
            </span>
            <h1 class="news-detail-title">{{ $article->title }}</h1>
            <div class="news-detail-meta">
                <span><i class="far fa-calendar"></i> {{ $article->published_at ? $article->published_at->format('d M Y') : $article->created_at->format('d M Y') }}</span>
                <span><i class="far fa-user"></i> Ditulis oleh: {{ $article->author }}</span>
            </div>
        </header>

        <!-- Featured Image Placeholder -->
        <div class="news-detail-image-box">
            <div style="text-align: center;">
                <div style="font-size: 4rem; opacity: 0.8; margin-bottom: 1rem;"><i class="far fa-newspaper"></i></div>
                <h3 style="font-family: var(--font-heading); font-size: 1.5rem; letter-spacing: 1px; color: #fff;">IGAKERTA PUBLISHING BLOG</h3>
            </div>
        </div>

        <!-- Body Content -->
        <div class="news-detail-content">
            {!! nl2br(e($article->content)) !!}
        </div>

        <!-- Back Button -->
        <div style="margin-top: 4rem; padding-top: 2rem; border-top: 1px solid var(--color-bg-alt); display: flex; justify-content: space-between; align-items: center;">
            <a href="{{ route('news.index') }}" class="btn btn-outline" style="padding: 0.6rem 1.5rem; font-size: 0.9rem;">
                <i class="fas fa-arrow-left"></i> Kembali ke Berita
            </a>
            
            <!-- Share buttons placeholder -->
            <div style="display: flex; gap: 0.75rem; align-items: center;">
                <span style="font-size: 0.85rem; font-weight: 600; color: var(--color-text-light);">Bagikan:</span>
                <a href="https://api.whatsapp.com/send?text={{ urlencode($article->title . ' ' . Request::url()) }}" target="_blank" class="social-icon" style="background-color: #25d366; color: #fff; width: 32px; height: 32px;" aria-label="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" target="_blank" class="social-icon" style="background-color: #3b5998; color: #fff; width: 32px; height: 32px;" aria-label="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>

    </article>

    <!-- Recent Articles Section -->
    @if(count($recentArticles) > 0)
        <section class="section-padding" style="background-color: var(--color-bg-alt); border-top: 1px solid var(--color-bg-alt);">
            <div class="container">
                <h2 style="font-family: var(--font-heading); font-size: 1.75rem; margin-bottom: 2rem; text-align: center;">Artikel Terkait Lainnya</h2>
                
                <div class="news-grid">
                    @foreach($recentArticles as $item)
                        <article class="news-card">
                            <div class="news-img-placeholder">
                                <i class="far fa-newspaper"></i>
                            </div>
                            <div class="news-card-body">
                                <div class="news-meta">
                                    <span><i class="far fa-calendar"></i> {{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}</span>
                                </div>
                                <h3 class="news-card-title" style="font-size: 1.1rem; height: 2.8rem; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a></h3>
                                <p class="news-excerpt" style="font-size: 0.85rem; height: 3.6rem; -webkit-line-clamp: 2;">{{ Str::limit(strip_tags($item->content), 120) }}</p>
                                <a href="{{ route('news.show', $item->slug) }}" class="news-more" style="font-size: 0.8rem;">
                                    Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection
