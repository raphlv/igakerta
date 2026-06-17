@extends('layouts.layout')

@section('title', 'Kirim Naskah Buku & Layanan Publikasi - Author Center IGAKERTA')
@section('meta_desc', 'Terbitkan buku Anda bersama IGAKERTA Publisher. Layanan penerbitan ber-ISBN resmi, editing, desain cover, layout profesional, dan percetakan berkualitas.')

@section('content')

    <!-- Author Center Hero -->
    <section class="author-hero" id="proses-penerbitan">
        <div class="container">
            <span class="hero-tag-small">AUTHOR CENTER</span>
            <h1 class="hero-title-main" style="color: #fff;">Terbitkan Buku Anda<br>Bersama IGAKERTA</h1>
            <p class="hero-desc-main" style="color: rgba(255, 255, 255, 0.85); max-width: 600px; margin: 1rem auto 0;">
                Dukung tulisan dan penelitian Anda untuk terbit ber-ISBN resmi secara mudah, murah, dan profesional bersama kami.
            </p>
            <div class="hero-btn-group" style="justify-content: center; margin-top: 2rem;">
                <a href="#kirim-naskah" class="btn btn-purple-solid">Kirim Naskah <i class="fas fa-arrow-right"></i></a>
                <a href="#layanan" class="btn btn-yellow-outline">Lihat Fasilitas <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Alur Penerbitan (Proses Penerbitan Section) -->
    <section class="section-padding" id="alur-penerbitan">
        <div class="container">
            <div class="text-center" style="margin-bottom: 4rem;">
                <h2 class="section-heading-main">ALUR PENERBITAN BUKU</h2>
                <p class="subheading-partner-title">Langkah mudah menerbitkan karya ilmiah atau buku populer Anda di IGAKERTA Publisher.</p>
            </div>

            <div class="workflow-steps">
                <div class="workflow-step">
                    <div class="workflow-num">1</div>
                    <h3>Kirim Naskah</h3>
                    <p>Kirim draf naskah Anda melalui formulir online Author Center di bawah ini.</p>
                </div>
                <div class="workflow-step">
                    <div class="workflow-num">2</div>
                    <h3>Review & Estimasi</h3>
                    <p>Editor kami akan mengevaluasi kelayakan naskah serta memberikan estimasi biaya penerbitan.</p>
                </div>
                <div class="workflow-step">
                    <div class="workflow-num">3</div>
                    <h3>Editing & Layout</h3>
                    <p>Proses penyuntingan konten, tata letak isi, dan perancangan desain cover premium.</p>
                </div>
                <div class="workflow-step">
                    <div class="workflow-num">4</div>
                    <h3>ISBN & Cetak</h3>
                    <p>Pengurusan pendaftaran ISBN resmi di Perpusnas RI dan proses pencetakan buku.</p>
                </div>
                <div class="workflow-step">
                    <div class="workflow-num">5</div>
                    <h3>Distribusi</h3>
                    <p>Buku siap dikirim ke penulis dan dipasarkan melalui Bookstore kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas Penerbitan (Layanan Section) -->
    <section class="section-padding" style="background-color: var(--color-bg-alt);" id="layanan">
        <div class="container">
            <div class="text-center" style="margin-bottom: 4rem;">
                <h2 class="section-heading-main">FASILITAS PENERBITAN</h2>
                <p class="subheading-partner-title">Setiap paket penerbitan kami dirancang untuk memastikan naskah Anda dipublikasikan dengan standar kualitas terbaik.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card" style="text-align: center;">
                    <div class="service-icon" style="margin: 0 auto 1.5rem;"><i class="fas fa-magic"></i></div>
                    <h3>Editing & Proofreading</h3>
                    <p style="font-size: 0.9rem; margin-top: 0.5rem;">Tim editor kami meninjau tata bahasa dan penyuntingan tanda baca naskah Anda agar nyaman dan mudah dipahami pembaca.</p>
                </div>
                
                <div class="service-card" style="text-align: center;">
                    <div class="service-icon" style="margin: 0 auto 1.5rem;"><i class="fas fa-palette"></i></div>
                    <h3>Desain Cover Eksklusif</h3>
                    <p style="font-size: 0.9rem; margin-top: 0.5rem;">Kami merancang cover depan, belakang, dan punggung buku secara profesional menyesuaikan dengan genre buku Anda.</p>
                </div>
                
                <div class="service-card" style="text-align: center;">
                    <div class="service-icon" style="margin: 0 auto 1.5rem;"><i class="fas fa-address-card"></i></div>
                    <h3>ISBN Nasional</h3>
                    <p style="font-size: 0.9rem; margin-top: 0.5rem;">Pengurusan Barcode ISBN resmi dari Perpustakaan Nasional RI untuk perlindungan hak cipta dan pengakuan legal.</p>
                </div>

                <div class="service-card" style="text-align: center;">
                    <div class="service-icon" style="margin: 0 auto 1.5rem;"><i class="fas fa-print"></i></div>
                    <h3>Percetakan Berkualitas</h3>
                    <p style="font-size: 0.9rem; margin-top: 0.5rem;">Didukung mesin cetak modern berteknologi tinggi dengan pilihan kertas bookpaper, art paper, dan HVS eksklusif.</p>
                </div>

                <div class="service-card" style="text-align: center;">
                    <div class="service-icon" style="margin: 0 auto 1.5rem;"><i class="fas fa-th-large"></i></div>
                    <h3>Layout & Tata Letak</h3>
                    <p style="font-size: 0.9rem; margin-top: 0.5rem;">Desain tata letak isi buku yang rapi, profesional, dan sesuai standar penerbitan akademik maupun populer.</p>
                </div>

                <div class="service-card" style="text-align: center;">
                    <div class="service-icon" style="margin: 0 auto 1.5rem;"><i class="fas fa-truck"></i></div>
                    <h3>Distribusi & Pemasaran</h3>
                    <p style="font-size: 0.9rem; margin-top: 0.5rem;">Buku diterbitkan dan dipasarkan melalui Bookstore IGAKERTA serta jaringan distribusi nasional kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Paket Penerbitan -->
    <section class="section-padding" id="pricing">
        <div class="container">
            <div class="text-center" style="margin-bottom: 4rem;">
                <h2 class="section-heading-main">PAKET PENERBITAN</h2>
                <p class="subheading-partner-title">Pilih paket penerbitan yang sesuai dengan kebutuhan Anda.</p>
            </div>

            <div class="action-jurnal-grid">
                <div class="action-jurnal-card">
                    <div class="action-icon"><i class="fas fa-book"></i></div>
                    <h4>Paket Hemat</h4>
                    <p>Penerbitan ISBN + Layout + Desain Cover + Ebook.</p>
                    <a href="https://wa.me/6285187845986?text=Halo%20Admin%20IGAKERTA,%20saya%20tertarik%20dengan%20*Paket%20Hemat*%20(ISBN%20%2B%20Layout%20%2B%20Cetak).%20Mohon%20info%20lebih%20lanjut.%20Terima%20kasih!" target="_blank" class="action-link"><i class="fab fa-whatsapp"></i> Konsultasi Sekarang <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="action-jurnal-card">
                    <div class="action-icon"><i class="fas fa-gem"></i></div>
                    <h4>Paket Premium</h4>
                    <p>Penerbitan ISBN + Layout + Desain Cover + Ebook + Cetak + HKI.</p>
                    <a href="https://wa.me/6285187845986?text=Halo%20Admin%20IGAKERTA,%20saya%20tertarik%20dengan%20*Paket%20Premium*%20(Editing%20%2B%20Cover%20%2B%20ISBN%20%2B%20Layout%20%2B%20Cetak).%20Mohon%20info%20lebih%20lanjut.%20Terima%20kasih!" target="_blank" class="action-link"><i class="fab fa-whatsapp"></i> Konsultasi Sekarang <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="action-jurnal-card">
                    <div class="action-icon"><i class="fas fa-crown"></i></div>
                    <h4>Paket Custom</h4>
                    <p>Custom service menyesuaikan dengan kebutuhan Anda</p>
                    <a href="https://wa.me/6285187845986?text=Halo%20Admin%20IGAKERTA,%20saya%20tertarik%20dengan%20*Paket%20Eksklusif*%20(Full-service%20penerbitan).%20Mohon%20info%20lebih%20lanjut.%20Terima%20kasih!" target="_blank" class="action-link"><i class="fab fa-whatsapp"></i> Konsultasi Sekarang <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Kirim Naskah Form Section -->
    <section class="section-padding" style="background-color: var(--color-bg-alt);" id="kirim-naskah">
        <div class="container">
            <div class="form-card">
                <h2 class="form-title">Formulir Pengajuan Naskah Buku</h2>
                <p style="text-align: center; margin-bottom: 2rem; color: var(--color-text-body);">Isi formulir di bawah ini untuk mengajukan naskah Anda. Tim kami akan segera menghubungi Anda.</p>
                
                <!-- Status Notifications -->
                <div class="submit-alert submit-alert-success" id="alert-success"></div>
                <div class="submit-alert submit-alert-error" id="alert-error"></div>

                <form action="{{ route('submission.store') }}" method="POST" enctype="multipart/form-data" id="manuscript-submission-form">
                    @csrf
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Lengkap & Gelar *</label>
                            <input type="text" name="name" id="name" class="form-input" placeholder="Contoh: Dr. Budi Setiawan, M.T.">
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Alamat Email Aktif *</label>
                            <input type="email" name="email" id="email" class="form-input" placeholder="Contoh: budi@gmail.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="phone" class="form-label">Nomor WhatsApp (Aktif) *</label>
                            <input type="text" name="phone" id="phone" class="form-input" placeholder="Contoh: 08123456789">
                        </div>
                        
                        <div class="form-group">
                            <label for="title" class="form-label">Judul Rencana Buku *</label>
                            <input type="text" name="title" id="title" class="form-input" placeholder="Contoh: Pengantar Kecerdasan Buatan">
                        </div>

                        <div class="form-group full-width">
                            <label for="synopsis" class="form-label">Sinopsis atau Deskripsi Singkat Naskah *</label>
                            <textarea name="synopsis" id="synopsis" rows="5" class="form-textarea" placeholder="Jelaskan mengenai isi buku Anda secara singkat, segmen target pembaca, dan bab pembahasan utama..."></textarea>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label">File Draft Naskah (Opsional)</label>
                            <div class="form-file-zone" id="file-upload-zone">
                                <i class="fas fa-cloud-upload-alt file-zone-icon"></i>
                                <div class="file-zone-text">
                                    <strong>Klik untuk memilih file</strong> atau seret dan letakkan file naskah Anda di sini.
                                </div>
                                <div style="font-size: 0.75rem; color: var(--color-text-light); margin-top: 0.5rem;">
                                    Format berkas: PDF, DOC, DOCX. Maksimal ukuran file: 15 MB.
                                </div>
                                <input type="file" name="manuscript" id="manuscript-file">
                                <div class="file-selected-info" id="selected-file-info"></div>
                            </div>
                        </div>
                    </div>

                    <div style="text-align: center; margin-top: 2rem;">
                        <button type="submit" class="btn btn-primary" id="submit-btn" style="padding: 0.85rem 3rem;">
                            <i class="fas fa-paper-plane"></i> Kirim Pengajuan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="collab-banner">
        <div class="container">
            <div class="collab-banner-card">
                <div class="collab-left">
                    <div class="collab-icon-circle"><i class="fab fa-whatsapp"></i></div>
                </div>
                <div class="collab-middle">
                    <h2>Butuh Konsultasi Langsung?</h2>
                    <p>Hubungi tim kami via WhatsApp untuk konsultasi gratis mengenai penerbitan buku Anda.</p>
                </div>
                <div class="collab-right">
                    <a href="https://wa.me/6285187845986?text=Halo%20Admin%20IGAKERTA,%20saya%20ingin%20berkonsultasi%20mengenai%20penerbitan%20buku." target="_blank" class="btn btn-yellow-solid">Chat WhatsApp <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

@endsection
