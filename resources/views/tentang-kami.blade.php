@extends('layouts.layout')

@section('title', 'Tentang Kami - IGAKERTA Publisher')
@section('meta_desc', 'Ketahui sejarah, visi, misi, dan tim pengelola di balik IGAKERTA Publisher, penerbit akademik bereputasi di Jakarta Selatan.')

@section('content')

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <span class="hero-tag-small">TENTANG KAMI</span>
            <h1 class="hero-title-main" style="color: #fff;">IGAKERTA Publisher</h1>
            <p class="hero-desc-main" style="color: rgba(255, 255, 255, 0.85); max-width: 600px; margin: 1rem auto 0;">
                Penerbit profesional terpercaya yang berkomitmen tinggi dalam mendukung perkembangan literasi akademik dan pengabdian masyarakat.
            </p>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="section-padding about-overview">
        <div class="container">
            <div class="about-overview-grid">
                <div class="overview-left">
                    <h2>Mencerdaskan Kehidupan Bersama Melalui Tulisan</h2>
                    <p>
                        IGAKERTA Publisher didirikan dengan semangat untuk mempermudah akademisi, dosen, guru, peneliti, dan penulis umum dalam menyebarluaskan ilmu pengetahuan mereka melalui media cetak dan digital ber-ISBN resmi.
                    </p>
                    <p>
                        Kami memfokuskan diri pada layanan hulu ke hilir penerbitan buku teks perkuliahan, buku ajar, monograf, prosiding, serta pengelolaan Jurnal Ilmiah pengabdian masyarakat berbasis Open Journal System (OJS).
                    </p>
                </div>
                <div class="overview-right">
                    <div class="about-values-box">
                        <div class="value-item-card">
                            <div class="value-icon"><i class="fas fa-check-circle"></i></div>
                            <div>
                                <h4>Resmi & Legal</h4>
                                <p>Terdaftar sebagai anggota resmi penerbit nasional berhak menerbitkan ISBN.</p>
                            </div>
                        </div>
                        <div class="value-item-card">
                            <div class="value-icon"><i class="fas fa-magic"></i></div>
                            <div>
                                <h4>Kualitas Premium</h4>
                                <p>Layout isi yang rapi, desain cover eksklusif, serta hasil cetakan kualitas tinggi.</p>
                            </div>
                        </div>
                        <div class="value-item-card">
                            <div class="value-icon"><i class="fas fa-bolt"></i></div>
                            <div>
                                <h4>Proses Cepat & Mudah</h4>
                                <p>Layanan konsultasi intensif WhatsApp dan pengurusan naskah teratur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="section-padding vision-mission-section" id="visi-misi">
        <div class="container">
            <div class="vision-mission-grid">
                <div class="vision-box-card">
                    <h3>Visi Kami</h3>
                    <p class="quote-style">
                        "Menjadi penerbit bereputasi bagi karya-karya penulisan yang memperkaya dan memberdayakan masyarakat, melalui akses terhadap pengetahuan, inspirasi, dan inovasi yang berkelanjutan."
                    </p>
                </div>
                <div class="mission-box-card">
                    <h3>Misi Kami</h3>
                    <ul class="mission-list">
                        <li>
                            <span class="num">01</span>
                            <p><strong>Meningkatkan Kualitas Publikasi</strong>: Memberikan layanan penyuntingan, tata letak, dan cetak naskah dengan standar kualitas tinggi nasional.</p>
                        </li>
                        <li>
                            <span class="num">02</span>
                            <p><strong>Mendukung Penulis Akademik</strong>: Menjadi partner terpercaya dosen dan peneliti dalam pengurusan ISBN buku ajar dan jurnal pengabdian masyarakat.</p>
                        </li>
                        <li>
                            <span class="num">03</span>
                            <p><strong>Pemasaran & Distribusi Luas</strong>: Memperluas akses pemasaran buku-buku terbitan kami baik secara fisik maupun e-book ke seluruh Indonesia.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
