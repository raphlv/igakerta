@extends('layouts.layout')

@section('title', 'Jurnal Igakerta: Inovasi Gagasan Abdimas & KKN - E-ISSN 3048-4499')
@section('meta_desc', 'Jurnal Ilmiah Igakerta mengelola publikasi ilmiah pengabdian kepada masyarakat (Abdimas) dan Kuliah Kerja Nyata (KKN) berbasis Open Journal System.')

@section('content')

    <!-- Jurnal Hero -->
    <section class="jurnal-hero">
        <div class="container">
            <div class="jurnal-hero-grid">
                <div class="jurnal-hero-text">
                    <span class="hero-tag-small">JURNAL</span>
                    <h1 class="hero-title-main" style="color: #fff;">Kelola Publikasi Ilmiah<br>Berkualitas & Terpercaya</h1>
                    <p class="hero-desc-main" style="color: rgba(255, 255, 255, 0.85);">
                        IGAKERTA Publisher mengelola jurnal ilmiah berbasis Open Journal System (OJS) yang berfokus pada pengabdian kepada masyarakat, inovasi sosial, dan kuliah kerja nyata.
                    </p>
                    <div class="hero-btn-group">
                        <a href="https://igakerta.com/jurnal/index.php/iga" target="_blank" class="btn btn-purple-solid">Submit Artikel <i class="fas fa-arrow-right"></i></a>
                        <a href="https://igakerta.com/jurnal/index.php/iga/InformationforAuthors" class="btn btn-yellow-outline">Panduan Penulis <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="jurnal-hero-image">
                    <div class="journal-showcase-mockup">
                        <div class="mockup-jurnal-book">
                            <div class="book-spine"></div>
                            <div class="book-cover-art">
                                <span>JURNAL IGAKERTA</span>
                                <small>E-ISSN: 3048-4499</small>
                            </div>
                        </div>
                        <div class="mockup-jurnal-laptop">
                            <div class="laptop-bezel">
                                <div class="laptop-screen-content">OJS Platform</div>
                            </div>
                            <div class="laptop-keyboard-base"></div>
                        </div>
                        <div class="mockup-jurnal-phone">
                            <div class="phone-screen-content">OJS App</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Jurnal Spec Card -->
    <section class="section-padding spec-jurnal-section">
        <div class="container">
            <div class="spec-jurnal-card">
                <div class="spec-card-left">
                    <div class="jurnal-cover-placeholder-card">
                        <div class="jurnal-cover-head">JURNAL IGAKERTA</div>
                        <div class="jurnal-cover-body">Inovasi Gagasan Abdimas & Kuliah Kerja Nyata</div>
                        <div class="jurnal-cover-foot">E-ISSN: 3048-4499</div>
                    </div>
                </div>
                <div class="spec-card-middle">
                    <span class="card-tag">JURNAL IGAKERTA</span>
                    <h2>Inovasi Gagasan Abdimas &<br>Kuliah Kerja Nyata</h2>
                    <ul class="spec-list">
                        <li><span>E-ISSN:</span> 3048-4499</li>
                        <li><span>Penerbit:</span> IGAKERTA Publisher</li>
                        <li><span>Platform:</span> Open Journal System (OJS)</li>
                        <li><span>Frekuensi Terbit:</span> 4 (empat) kali per tahun (Maret, Juni, September, Desember)</li>
                    </ul>
                </div>
                <div class="spec-card-right">
                    <p>
                        Jurnal Igakerta (Inovasi Gagasan Abdimas & Kuliah Kerja Nyata) merupakan media publikasi ilmiah yang bertujuan untuk menyebarluaskan hasil kegiatan pengabdian masyarakat, inovasi sosial, pemberdayaan masyarakat, serta pelaksanaan kuliah kerja nyata yang berdampak nyata bagi masyarakat.
                    </p>
                    <a href="https://igakerta.com/jurnal/index.php/iga" target="_blank" class="btn btn-purple-solid" style="margin-top: 1rem;">Lihat Jurnal <i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Ruang Lingkup -->
    <section class="section-padding scope-jurnal-section" id="ruang-lingkup">
        <div class="container text-center">
            <h2 class="section-heading-main">RUANG LINGKUP</h2>
            <p class="subheading-partner-title" style="margin-bottom: 4rem;">Topik artikel yang kami terima meliputi berbagai bidang pengabdian dan pemberdayaan.</p>
            
            <div class="scope-grid">
                <div class="scope-item">
                    <div class="scope-icon-circle"><i class="fas fa-hands-helping"></i></div>
                    <p>Pengabdian kepada Masyarakat</p>
                </div>
                <div class="scope-item">
                    <div class="scope-icon-circle"><i class="fas fa-graduation-cap"></i></div>
                    <p>Kuliah Kerja Nyata (KKN)</p>
                </div>
                <div class="scope-item">
                    <div class="scope-icon-circle"><i class="fas fa-users"></i></div>
                    <p>Pemberdayaan Masyarakat</p>
                </div>
                <div class="scope-item">
                    <div class="scope-icon-circle"><i class="fas fa-book-reader"></i></div>
                    <p>Pendidikan & Literasi</p>
                </div>
                <div class="scope-item">
                    <div class="scope-icon-circle"><i class="fas fa-globe-asia"></i></div>
                    <p>Lingkungan Hidup</p>
                </div>
                <div class="scope-item">
                    <div class="scope-icon-circle"><i class="fas fa-heartbeat"></i></div>
                    <p>Kesehatan Masyarakat</p>
                </div>
                <div class="scope-item">
                    <div class="scope-icon-circle"><i class="fas fa-store"></i></div>
                    <p>UMKM & Ekonomi Kreatif</p>
                </div>
                <div class="scope-item">
                    <div class="scope-icon-circle"><i class="fas fa-lightbulb"></i></div>
                    <p>Teknologi & Inovasi Sosial</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Callouts Grid (Action Cards) -->
    <section class="section-padding actions-jurnal-section" id="panduan">
        <div class="container">
            <div class="action-jurnal-grid">
                <!-- Call for Paper -->
               <!-- <div class="action-jurnal-card">
                    <div class="action-icon"><i class="far fa-file-alt"></i></div>
                    <h4>Call for Paper</h4>
                    <p>Informasi terbaru tentang panggilan artikel.</p>
                    <a href="https://igakerta.com/jurnal/index.php/iga/announcement" target="_blank" class="action-link">Lihat Call for Paper <i class="fas fa-arrow-right"></i></a>
                </div>-->
                <!-- Template Artikel -->
                <div class="action-jurnal-card">
                    <div class="action-icon"><i class="far fa-file-word"></i></div>
                    <h4>Template Artikel</h4>
                    <p>Unduh template penulisan artikel jurnal.</p>
                    <a href="https://docs.google.com/document/d/1MlAwZ2IT7jlSGyq3ejO4X9nalHypTPne/edit?usp=sharing&ouid=111474006614761207174&rtpof=true&sd=true" target="_blank" class="action-link">Unduh Template <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- Panduan Penulis -->
                <div class="action-jurnal-card">
                    <div class="action-icon"><i class="fas fa-book-open"></i></div>
                    <h4>Panduan Penulis</h4>
                    <p>Petunjuk lengkap untuk penulis artikel.</p>
                    <a href="https://igakerta.com/jurnal/index.php/iga/InformationforAuthors" target="_blank" class="action-link">Lihat Panduan <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- Reviewer -->
                <div class="action-jurnal-card">
                    <div class="action-icon"><i class="fas fa-user-shield"></i></div>
                    <h4>Reviewer</h4>
                    <p>Informasi untuk reviewer dan proses review.</p>
                    <a href="https://igakerta.com/jurnal/index.php/iga/reviewers" target="_blank" class="action-link">Info Reviewer <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- Submit Artikel -->
                <div class="action-jurnal-card">
                    <div class="action-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                    <h4>Submit Artikel</h4>
                    <p>Kirim artikel Anda melalui sistem OJS kami.</p>
                    <a href="https://igakerta.com/jurnal/index.php/iga/login" target="_blank" class="action-link">Submit Sekarang <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Terbitan Terbaru -->
    <section class="section-padding issues-jurnal-section" id="terbitan-terbaru">
        <div class="container">
            <h2 class="section-heading-main text-center">TERBITAN TERBARU</h2>
            <p class="subheading-partner-title text-center" style="margin-bottom: 4rem;">Jelajahi edisi jurnal terbaru yang telah kami terbitkan.</p>
            
            <div class="issues-grid">
                <!-- Vol 2 No 1 -->
                <div class="issue-card-horizontal">
                    <div class="issue-card-cover">
                        <div class="cover-design-box purple-gradient">
                            <span>JURNAL IGAKERTA</span>
                            <small>Vol. 2 No. 1</small>
                        </div>
                    </div>
                    <div class="issue-card-details">
                        <h4>Vol. 2 No. 1 (2025)</h4>
                        <span class="issue-date">Mei 2025</span>
                        <p>Berisi 10 artikel tentang inovasi pengabdian masyarakat dan kuliah kerja nyata yang berdampak nyata.</p>
                        <a href="https://igakerta.com/jurnal/index.php/iga/issue/archive" target="_blank" class="btn-issue-link">Lihat Edisi <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Vol 1 No 2 -->
                <div class="issue-card-horizontal">
                    <div class="issue-card-cover">
                        <div class="cover-design-box indigo-gradient">
                            <span>JURNAL IGAKERTA</span>
                            <small>Vol. 1 No. 2</small>
                        </div>
                    </div>
                    <div class="issue-card-details">
                        <h4>Vol. 1 No. 2 (2024)</h4>
                        <span class="issue-date">November 2024</span>
                        <p>Berisi 9 artikel tentang KKN, literasi, dan pemberdayaan masyarakat desa.</p>
                        <a href="https://igakerta.com/jurnal/index.php/iga/issue/archive" target="_blank" class="btn-issue-link">Lihat Edisi <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Vol 1 No 1 -->
                <div class="issue-card-horizontal">
                    <div class="issue-card-cover">
                        <div class="cover-design-box blue-gradient">
                            <span>JURNAL IGAKERTA</span>
                            <small>Vol. 1 No. 1</small>
                        </div>
                    </div>
                    <div class="issue-card-details">
                        <h4>Vol. 1 No. 1 (2024)</h4>
                        <span class="issue-date">Mei 2024</span>
                        <p>Berisi 8 artikel tentang kegiatan abdimas, sanitasi, dan sosialisasi di masyarakat.</p>
                        <a href="https://igakerta.com/jurnal/index.php/iga/issue/archive" target="_blank" class="btn-issue-link">Lihat Edisi <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="text-center" style="margin-top: 3.5rem;">
                <a href="https://igakerta.com/jurnal/index.php/iga/issue/archive" target="_blank" class="btn btn-outline-purple">Lihat Semua Terbitan <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Indeksasi Section -->
    <section class="section-padding indexing-jurnal-section" id="indeksasi">
        <div class="container text-center">
            <h2 class="section-heading-main">INDEKSASI & AKREDITASI</h2>
            <p class="subheading-partner-title" style="margin-bottom: 3.5rem;">Kami terus berkomitmen untuk meningkatkan kualitas jurnal dan jangkauan indeksasi.</p>
            
            <div class="indexing-logos-row">
                <div class="index-logo-item">GARUDA</div>
                <div class="index-logo-item">Google Scholar</div>
                <div class="index-logo-item">Crossref</div>
                <div class="index-logo-item">Dimensions</div>
            </div>
        </div>
    </section>

    <!-- Submit CTA Banner -->
    <section class="collab-banner" id="submit">
        <div class="container">
            <div class="collab-banner-card">
                <div class="collab-left">
                    <div class="collab-icon-circle"><i class="far fa-edit"></i></div>
                </div>
                <div class="collab-middle">
                    <h2>Siap Mempublikasikan Artikel Anda?</h2>
                    <p>Bergabunglah bersama penulis dan peneliti untuk menyebarkan inovasi dan gagasan terbaik bagi masyarakat.</p>
                </div>
                <div class="collab-right">
                    <a href="https://igakerta.com/jurnal/index.php/iga/login" target="_blank" class="btn btn-yellow-solid">Submit Artikel Sekarang <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

@endsection
