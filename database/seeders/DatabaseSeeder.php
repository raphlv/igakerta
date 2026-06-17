<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        \App\Models\Book::truncate();
        \App\Models\News::truncate();
        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        // Seed Books
        $books = [
            [
                'title' => 'Pengembangan UMKM Berbasis Digital Marketing',
                'author' => 'Dr. Endang Setyowati, M.M.',
                'category' => 'Ekonomi & Bisnis',
                'price' => 85000,
                'description' => 'Buku ini membahas strategi praktis pengembangan usaha mikro, kecil, dan menengah dengan memanfaatkan platform pemasaran digital untuk meningkatkan penjualan dan daya saing di era global.',
                'cover_image' => 'book_umkm.jpg',
                'is_featured' => true,
                'published_year' => 2024,
                'pages' => 180,
                'isbn' => '978-623-456-111-2',
            ],
            [
                'title' => 'Mitigasi Bencana Berbasis Komunitas',
                'author' => 'Ir. Suparman, M.T.',
                'category' => 'Pengabdian Masyarakat',
                'price' => 75000,
                'description' => 'Buku panduan edukasi masyarakat mengenai kesiapsiagaan bencana, strategi evakuasi mandiri, dan penguatan kelembagaan lokal dalam mengurangi risiko bencana alam di lingkungan sekitar.',
                'cover_image' => 'book_bencana.jpg',
                'is_featured' => true,
                'published_year' => 2024,
                'pages' => 160,
                'isbn' => '978-623-456-222-9',
            ],
            [
                'title' => 'Pemberdayaan Masyarakat Melalui Inovasi Sosial',
                'author' => 'Prof. Dr. Herman Yusuf',
                'category' => 'Sosial Humaniora',
                'price' => 90000,
                'description' => 'Menyajikan kajian mendalam mengenai program pemberdayaan masyarakat yang digerakkan oleh inovasi sosial dan partisipasi aktif warga untuk mewujudkan kemandirian ekonomi berkelanjutan.',
                'cover_image' => 'book_pemberdayaan.jpg',
                'is_featured' => true,
                'published_year' => 2024,
                'pages' => 210,
                'isbn' => '978-623-456-333-5',
            ],
            [
                'title' => 'Literasi dan Pendidikan untuk Semua',
                'author' => 'Dr. Maria Ulfah, M.Pd.',
                'category' => 'Pendidikan',
                'price' => 80000,
                'description' => 'Strategi peningkatan minat baca dan pemerataan akses pendidikan di daerah terpencil melalui program literasi inklusif dan taman bacaan masyarakat.',
                'cover_image' => 'book_literasi.jpg',
                'is_featured' => true,
                'published_year' => 2024,
                'pages' => 195,
                'isbn' => '978-623-456-444-1',
            ],
            [
                'title' => 'Kesehatan Masyarakat dan Lingkungan Hidup',
                'author' => 'Dr. dr. Budi Santoso, M.Kes.',
                'category' => 'Kesehatan',
                'price' => 88000,
                'description' => 'Menganalisis hubungan erat antara kesehatan sanitasi lingkungan, penyediaan air bersih, dan gaya hidup sehat dalam mencegah penyebaran penyakit menular di masyarakat.',
                'cover_image' => 'book_kesehatan.jpg',
                'is_featured' => true,
                'published_year' => 2024,
                'pages' => 220,
                'isbn' => '978-623-456-555-4',
            ],
            [
                'title' => 'Inovasi Pendidikan di Era Digital',
                'author' => 'Rian Hidayat, M.T. & Tim',
                'category' => 'Pendidikan',
                'price' => 82000,
                'description' => 'Mengulas metode pembelajaran modern menggunakan platform e-learning, teknologi multimedia interaktif, dan kecerdasan buatan untuk meningkatkan efektivitas belajar mengajar.',
                'cover_image' => 'book_inovasi_edu.jpg',
                'is_featured' => true,
                'published_year' => 2024,
                'pages' => 175,
                'isbn' => '978-623-456-666-7',
            ],
            [
                'title' => 'Artificial Intelligence Untuk Pemula',
                'author' => 'Dr. Eng. Farid Wajdi',
                'category' => 'Teknologi',
                'price' => 95000,
                'description' => 'Buku pengantar yang menjelaskan konsep dasar kecerdasan buatan, machine learning, neural networks, dan implementasi sederhananya dalam kehidupan sehari-hari menggunakan Python.',
                'cover_image' => 'book_ai.jpg',
                'is_featured' => true,
                'published_year' => 2024,
                'pages' => 205,
                'isbn' => '978-623-456-777-0',
            ],
            [
                'title' => 'Manajemen Keuangan Modern',
                'author' => 'Dr. H. M. Anwar, S.E., M.Si.',
                'category' => 'Ekonomi & Bisnis',
                'price' => 89000,
                'description' => 'Panduan lengkap perencanaan keuangan, investasi portofolio, analisis laporan keuangan perusahaan, serta pengambilan keputusan finansial strategis di masa kini.',
                'cover_image' => 'book_keuangan.jpg',
                'is_featured' => true,
                'published_year' => 2024,
                'pages' => 240,
                'isbn' => '978-623-456-888-3',
            ],
            [
                'title' => 'Hukum dan Masyarakat Kontemporer',
                'author' => 'Prof. Dr. Sudarmono, S.H., M.Hum.',
                'category' => 'Sosial Humaniora',
                'price' => 87000,
                'description' => 'Mengkaji perkembangan sistem hukum positif di Indonesia dalam merespons dinamika perubahan sosial, teknologi informasi, dan globalisasi masyarakat modern.',
                'cover_image' => 'book_hukum.jpg',
                'is_featured' => true,
                'published_year' => 2024,
                'pages' => 190,
                'isbn' => '978-623-456-999-6',
            ],
            [
                'title' => 'Bioteknologi Untuk Kehidupan',
                'author' => 'Dr. Rina Astuti, M.Si.',
                'category' => 'Sains',
                'price' => 98000,
                'description' => 'Menjelaskan teknik rekayasa genetika, kultur jaringan, dan pemanfaatan mikroorganisme dalam industri pangan, medis, pertanian, dan kelestarian alam.',
                'cover_image' => 'book_biotech.jpg',
                'is_featured' => true,
                'published_year' => 2024,
                'pages' => 215,
                'isbn' => '978-623-456-010-7',
            ],
            [
                'title' => 'Sastra Indonesia dan Budaya',
                'author' => 'Dra. Siti Nurbaya, M.Hum.',
                'category' => 'Sastra',
                'price' => 72000,
                'description' => 'Apresiasi karya sastra nusantara klasik hingga modern serta kaitannya dengan pelestarian nilai kearifan lokal dan karakter budaya bangsa Indonesia.',
                'cover_image' => 'book_sastra.jpg',
                'is_featured' => true,
                'published_year' => 2024,
                'pages' => 165,
                'isbn' => '978-623-456-020-6',
            ],
            [
                'title' => 'Energi Terbarukan dan Keberlanjutan',
                'author' => 'Dr. Ir. Joko Santoso',
                'category' => 'Sains',
                'price' => 92000,
                'description' => 'Mengulas potensi energi matahari, angin, hidro, dan biomassa sebagai solusi transisi energi bersih ramah lingkungan demi mewujudkan pembangunan berkelanjutan.',
                'cover_image' => 'book_energi.jpg',
                'is_featured' => true,
                'published_year' => 2024,
                'pages' => 185,
                'isbn' => '978-623-456-030-5',
            ]
        ];

        foreach ($books as $book) {
            \App\Models\Book::create($book);
        }

        // Seed News/Articles
        $news = [
            [
                'title' => 'Cara Sukses Mengubah Tesis/Disertasi Menjadi Buku Ajar Terakreditasi',
                'slug' => 'cara-sukses-mengubah-tesis-disertasi-menjadi-buku-ajar',
                'content' => 'Banyak akademisi yang bingung bagaimana memanfaatkan hasil penelitian tesis atau disertasi mereka agar tidak hanya tersimpan di perpustakaan. Salah satu cara terbaik adalah mengonversinya menjadi Buku Monograf atau Buku Ajar ber-ISBN. Langkah pertama adalah menyesuaikan gaya bahasa ilmiah yang kaku menjadi bahasa tutur yang edukatif. Kedua, sesuaikan struktur bab agar menyerupai kurikulum perkuliahan. Penerbit IGAKERTA menyediakan layanan pendampingan bagi dosen untuk mempermudah proses konversi ini.',
                'category' => 'Tips Menulis',
                'author' => 'Dr. Ahmad Fauzi, M.Pd.',
                'image' => 'news_writing.jpg',
                'published_at' => now(),
            ],
            [
                'title' => 'Pentingnya E-ISSN 3048-4499 Bagi Jurnal Pengabdian Masyarakat',
                'slug' => 'pentingnya-e-issn-bagi-jurnal-pengabdian-masyarakat',
                'content' => 'Jurnal Igakerta yang fokus pada Inovasi Gagasan Abdimas & Kuliah Kerja Nyata kini telah resmi memiliki E-ISSN 3048-4499. Keberadaan ISSN elektronik ini sangat krusial karena memastikan artikel ilmiah yang diterbitkan terindeks secara global, memudahkan sitasi, serta meningkatkan akreditasi jurnal (SINTA). Para penulis dan dosen disarankan untuk selalu memverifikasi status ISSN sebelum mengirimkan naskah pengabdian mereka agar kontribusi akademis mereka diakui secara resmi oleh Kemendikbudristek.',
                'category' => 'Info Jurnal',
                'author' => 'Sekretaris Redaksi Jurnal',
                'image' => 'news_journal.jpg',
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'IGAKERTA Membuka Program Insentif Penerbitan Buku Pendidikan 2026',
                'slug' => 'igakerta-membuka-program-insentif-penerbitan-buku-2026',
                'content' => 'Sebagai wujud nyata komitmen dalam mencerdaskan kehidupan bangsa, Penerbit & Percetakan IGAKERTA meluncurkan Program Insentif Penerbitan Buku untuk periode awal tahun 2026. Melalui program ini, naskah terpilih dari guru dan dosen akan mendapatkan potongan biaya penerbitan hingga 50%, fasilitas editing gratis, desain cover eksklusif, serta pemasaran secara nasional baik fisik maupun e-book. Pengajuan naskah dibuka dari Juni hingga Agustus 2026 melalui portal online kami.',
                'category' => 'Pengumuman',
                'author' => 'Direktur Utama IGAKERTA',
                'image' => 'news_incentive.jpg',
                'published_at' => now()->subDays(5),
            ]
        ];

        foreach ($news as $item) {
            \App\Models\News::create($item);
        }
    }
}
