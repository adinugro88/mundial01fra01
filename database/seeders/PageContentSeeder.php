<?php

namespace Database\Seeders;

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    /**
     * Konten halaman baru dalam Bahasa Indonesia.
     * Diurutkan berdasarkan page_key lalu sort_order.
     */
    public function run(): void
    {
        $rows = [
            // ---------------------------------------------------------
            // Halaman mulai (start.html): 3 tab penawaran + instruksi tugas
            // ---------------------------------------------------------
            [
                'page_key' => 'mulai',
                'block_type' => 'tab',
                'title' => 'Pesta Ulang Tahun Anak di Lintas Bowling',
                'subtitle' => null,
                'description' => '<p>Ini adalah ide yang bagus: rayakan ulang tahun anak Anda di lintas bowling. Anak-anak mendapatkan makanan dan minuman enak dari kami. Awasi anak-anak dengan baik. Anak-anak pasti banyak bersenang-senang saat bermain.</p>'
                    .'<p>Pesta ulang tahun anak diadakan dari Jumat sampai Minggu, pukul 15.00 sampai 19.00. Harga masuk hanya 9 franc per anak. Pesta ulang tahun anak sudah termasuk:</p>'
                    .'<ul role="list"><li>2 ronde bermain bowling</li><li>Sepatu bowling tambahan</li><li>1 minuman tanpa alkohol untuk setiap anak</li><li>Sertifikat untuk semua peserta</li><li>1 kantong popcorn</li><li>Lintas bowling dihias</li><li>2 kopi untuk orang tua</li></ul>'
                    .'<p>Penawaran ini berlaku sampai usia 14 tahun dan minimal 6 anak harus hadir. Pesta harus dipesan jauh hari sebelum acara. Dengan biaya masuk sedikit lebih mahal, anak-anak juga mendapatkan menu anak, yaitu Chicken Nuggets dengan kentang goreng.<br><br>Pesan jadwal untuk pesta ulang tahun anak. Kami dengan senang hati membuatkan penawaran untuk pesta ulang tahun yang menyenangkan di lintas bowling. Kami membantu Anda merencanakan pesta, makanan, dan minuman. Pesan sekarang, atau hubungi kami.</p>',
                'button_text' => 'Pesan sekarang',
                'button_url' => '/reservasi',
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 1,
                'is_visible' => true,
            ],
            [
                'page_key' => 'mulai',
                'block_type' => 'tab',
                'title' => 'Penawaran Ulang Tahun untuk Remaja',
                'subtitle' => null,
                'description' => '<p>Pesta ulang tahun untuk remaja diadakan Kamis sampai Minggu, mulai pukul 18.00. Harga masuk hanya 52 franc untuk 1 lintas. Di 1 lintas bisa bermain 2 sampai 8 orang. Penawaran ulang tahun sudah termasuk:</p>'
                    .'<ul role="list"><li>2 ronde bermain bowling</li><li>Sepatu bowling tambahan</li><li>2 botol minuman tanpa alkohol</li><li>1 piring makanan ringan per lintas</li></ul>'
                    .'<p>Penawaran ulang tahun berlaku untuk remaja berusia 15 sampai 18 tahun.</p>',
                'button_text' => 'Pesan sekarang',
                'button_url' => '/reservasi',
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 2,
                'is_visible' => true,
            ],
            [
                'page_key' => 'mulai',
                'block_type' => 'tab',
                'title' => 'Penawaran Ulang Tahun untuk Orang Dewasa',
                'subtitle' => null,
                'description' => '<p>Pesta ulang tahun untuk orang dewasa diadakan Kamis sampai Minggu, mulai pukul 18.00. Harga masuk hanya 52 franc untuk 1 lintas. Di 1 lintas bisa bermain 2 sampai 8 orang. Penawaran ulang tahun sudah termasuk:</p>'
                    .'<ul role="list"><li>2 ronde bermain bowling</li><li>Sepatu bowling tambahan</li><li>2 botol minuman tanpa alkohol</li><li>1 piring makanan ringan per lintas</li></ul>',
                'button_text' => null,
                'button_url' => null,
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 3,
                'is_visible' => true,
            ],
            [
                'page_key' => 'mulai',
                'block_type' => 'instruction',
                'title' => 'Tugas',
                'subtitle' => null,
                'description' => '<p>Untuk pengujian situs web pusat rekreasi Mundial, kami meminta Anda mengerjakan <strong>dua tugas</strong>.<br><br>Anda selalu dapat melihat tugas dengan <strong>tombol hijau &quot;Tugas&quot;</strong>.<br><br>Jika Anda tidak dapat menyelesaikan suatu tugas <strong>setelah sekitar 4 menit</strong>, kami meminta Anda untuk melewatinya. Anda menemukan tombol lewati tepat di bawah pernyataan tugas.</p>',
                'button_text' => 'Mulai tugas',
                'button_url' => '/tache',
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 4,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Tugas 1 / 2 / 3 (aufgabe.html, task-01, task-02, task-03)
            // ---------------------------------------------------------
            [
                'page_key' => 'tugas_1',
                'block_type' => 'task',
                'title' => 'Tugas 1',
                'subtitle' => null,
                'description' => 'Seorang teman bercerita betapa bermanfaatnya sauna aromatik di pusat rekreasi Mundial. Anda ingin melihatnya sendiri minggu depan.<br>Gunakan situs web Mundial untuk mengetahui apakah sauna aromatik buka di musim dingin.',
                'button_text' => 'Lewati tugas',
                'button_url' => '/tache/cancel',
                'secondary_button_text' => 'Lanjutkan',
                'secondary_button_url' => null,
                'sort_order' => 1,
                'is_visible' => true,
            ],
            [
                'page_key' => 'tugas_2',
                'block_type' => 'task',
                'title' => 'Tugas 2',
                'subtitle' => null,
                'description' => 'Buka halaman <strong>Nos offres</strong> dan pilih penawaran ulang tahun.<br>Catat berapa harga penawaran ulang tahun untuk remaja dan berapa banyak orang yang dapat bermain di satu lintas bowling.',
                'button_text' => 'Lewati tugas',
                'button_url' => '/tache/2/cancel',
                'secondary_button_text' => 'Lanjutkan',
                'secondary_button_url' => null,
                'sort_order' => 1,
                'is_visible' => true,
            ],
            [
                'page_key' => 'tugas_3',
                'block_type' => 'task',
                'title' => 'Tugas 3',
                'subtitle' => null,
                'description' => 'Buka halaman <strong>Abonnements &amp; Prix</strong>.<br>Temukan biaya tambahan per orang untuk setiap tambahan 30 menit pada tiket harian, lalu lanjutkan ke halaman reservasi.',
                'button_text' => 'Lewati tugas',
                'button_url' => '/tache/3/cancel',
                'secondary_button_text' => 'Lanjutkan',
                'secondary_button_url' => null,
                'sort_order' => 1,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Konfirmasi lewati tugas (task-01-cancel, task-02-cancel, task-03-cancel)
            // ---------------------------------------------------------
            [
                'page_key' => 'tugas_1_batal',
                'block_type' => 'confirm',
                'title' => 'Lewati tugas',
                'subtitle' => null,
                'description' => 'Apakah Anda yakin ingin melewati tugas ini?',
                'button_text' => 'Ya, lewati',
                'button_url' => '/tache/2',
                'secondary_button_text' => 'Tidak, kembali',
                'secondary_button_url' => '/tache',
                'sort_order' => 1,
                'is_visible' => true,
            ],
            [
                'page_key' => 'tugas_2_batal',
                'block_type' => 'confirm',
                'title' => 'Lewati tugas',
                'subtitle' => null,
                'description' => 'Apakah Anda yakin ingin melewati tugas ini?',
                'button_text' => 'Ya, lewati',
                'button_url' => '/tache/3',
                'secondary_button_text' => 'Tidak, kembali',
                'secondary_button_url' => '/tache/2',
                'sort_order' => 1,
                'is_visible' => true,
            ],
            [
                'page_key' => 'tugas_3_batal',
                'block_type' => 'confirm',
                'title' => 'Lewati tugas',
                'subtitle' => null,
                'description' => 'Apakah Anda yakin ingin melewati tugas ini?',
                'button_text' => 'Ya, lewati',
                'button_url' => '/kembali',
                'secondary_button_text' => 'Tidak, kembali',
                'secondary_button_url' => '/tache/3',
                'sort_order' => 1,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Halaman selesai tugas 1 (task-01-end)
            // ---------------------------------------------------------
            [
                'page_key' => 'tugas_selesai',
                'block_type' => 'notice',
                'title' => 'Tugas 1 selesai',
                'subtitle' => null,
                'description' => 'Bagus! Tugas 1 telah selesai. Silakan lanjutkan ke tugas berikutnya.',
                'button_text' => 'Mulai tugas 2',
                'button_url' => '/tache/2',
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 1,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Kembali ke pengujian (back-to-unipark)
            // ---------------------------------------------------------
            [
                'page_key' => 'kembali',
                'block_type' => 'notice',
                'title' => 'Kembali',
                'subtitle' => null,
                'description' => 'Anda telah menyelesaikan seluruh tugas. Terima kasih telah menguji situs web pusat rekreasi Mundial.',
                'button_text' => 'Kembali ke beranda',
                'button_url' => '/',
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 1,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Halaman placeholder (no-way)
            // ---------------------------------------------------------
            [
                'page_key' => 'tidak_tersedia',
                'block_type' => 'notice',
                'title' => 'Perhatian',
                'subtitle' => null,
                'description' => 'Halaman ini tidak diperlukan untuk menyelesaikan tugas. Silakan cara lain untuk menyelesaikan tugas.',
                'button_text' => 'Lanjutkan tugas',
                'button_url' => null,
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 1,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Halaman reservasi (angebote-2/reservation-geburtstagsfeier)
            // ---------------------------------------------------------
            [
                'page_key' => 'reservasi',
                'block_type' => 'form',
                'title' => 'Reservasi',
                'subtitle' => 'Penawaran Ulang Tahun untuk Orang Dewasa',
                'description' => '<p>Pesta ulang tahun untuk orang dewasa diadakan Kamis sampai Minggu, mulai pukul 18.00. Harga masuk hanya 52 franc untuk 1 lintas. Di 1 lintas bisa bermain 2 sampai 8 orang. Penawaran ulang tahun sudah termasuk:</p>'
                    .'<ul role="list"><li>2 ronde bermain bowling</li><li>Sepatu bowling tambahan</li><li>3 liter bir</li><li>1 piring makanan ringan per lintas</li></ul>',
                'button_text' => 'Kirim reservasi',
                'button_url' => '/reservasi',
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 1,
                'is_visible' => true,
            ],
        ];

        foreach ($rows as $row) {
            PageContent::updateOrCreate(
                ['page_key' => $row['page_key'], 'sort_order' => $row['sort_order']],
                $row
            );
        }
    }
}
