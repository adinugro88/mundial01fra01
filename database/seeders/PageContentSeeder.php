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
            // Halaman depan / start: instruksi tugas (blok tab penawaran dihapus)
            // ---------------------------------------------------------
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
            // Tugas 1 (task-01.html): 3 kartu penawaran + pernyataan tugas
            // ---------------------------------------------------------
            [
                'page_key' => 'tugas_1',
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
                'page_key' => 'tugas_1',
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
                'page_key' => 'tugas_1',
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
                'page_key' => 'tugas_1',
                'block_type' => 'task',
                'title' => 'Tugas 1',
                'subtitle' => null,
                'description' => 'Seorang teman bercerita betapa bermanfaatnya sauna aromatik di pusat rekreasi Mundial. Anda ingin melihatnya sendiri minggu depan.<br>Gunakan situs web Mundial untuk mengetahui apakah sauna aromatik buka di musim dingin.',
                'button_text' => 'Mulai tugas 1',
                'button_url' => '/beranda',
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 4,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Pernyataan tugas 1 (aufgabe.html) - tombol hijau "Tugas"
            // ---------------------------------------------------------
            [
                'page_key' => 'tugas_1_pernyataan',
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
            // ---------------------------------------------------------
            // Pernyataan tugas 2 & 3 (fra02: aufgabe.html = Tâche 2)
            // ---------------------------------------------------------
            [
                'page_key' => 'tugas_2_pernyataan',
                'block_type' => 'task',
                'title' => 'Tugas 2',
                'subtitle' => null,
                'description' => 'Karena Anda sering berkunjung ke pusat rekreasi Mundial, Anda ingin membeli sebuah langganan. Belilah langganan satu tahun melalui situs web Mundial.<br>Petunjuk: Langganan harus atas nama &quot;Brigitte Müller&quot; dan Anda berusia 45 tahun. Brigitte tidak memiliki kartu kredit.',
                'button_text' => 'Lewati tugas',
                'button_url' => '/tache/2/cancel',
                'secondary_button_text' => 'Lanjutkan',
                'secondary_button_url' => null,
                'sort_order' => 1,
                'is_visible' => true,
            ],
            [
                'page_key' => 'tugas_3_pernyataan',
                'block_type' => 'task',
                'title' => 'Tugas 3',
                'subtitle' => null,
                'description' => 'Sebentar lagi Anda berulang tahun dan ingin mengundang lima sahabat terbaik Anda untuk malam bowling di pusat rekreasi Mundial. Pesanlah satu lintas untuk Kamis malam minggu depan pada pukul 19.00.<br>Petunjuk 1: Anda suka minum bir. Petunjuk 2: Anda tidak perlu memberikan data pribadi Anda; Anda boleh mengarangnya.',
                'button_text' => 'Lewati tugas',
                'button_url' => '/tache/3/cancel',
                'secondary_button_text' => 'Lanjutkan',
                'secondary_button_url' => null,
                'sort_order' => 1,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Tugas 2 (task-02.html): 3 kartu penawaran + pernyataan tugas
            // ---------------------------------------------------------
            [
                'page_key' => 'tugas_2',
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
                'page_key' => 'tugas_2',
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
                'page_key' => 'tugas_2',
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
                'page_key' => 'tugas_2',
                'block_type' => 'task',
                'title' => 'Tugas 2',
                'subtitle' => null,
                'description' => 'Karena Anda sering berkunjung ke pusat rekreasi Mundial, Anda ingin membeli sebuah langganan. Belilah langganan satu tahun melalui situs web Mundial.<br>Petunjuk: Langganan harus atas nama &quot;Brigitte Müller&quot; dan Anda berusia 45 tahun. Brigitte tidak memiliki kartu kredit.',
                'button_text' => 'Mulai tugas 2',
                'button_url' => '/beranda',
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 4,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Konfirmasi lewati tugas (task-01-cancel, task-02-cancel)
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
                'secondary_button_url' => '/beranda',
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
                'button_url' => '/back-to-unipark',
                'secondary_button_text' => 'Tidak, kembali',
                'secondary_button_url' => '/beranda',
                'sort_order' => 1,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Tugas 2 selesai (task-02-end)
            // ---------------------------------------------------------
            [
                'page_key' => 'tugas_2_selesai',
                'block_type' => 'notice',
                'title' => 'Sukses',
                'subtitle' => null,
                'description' => 'Bagus! Anda telah menyelesaikan tugas 2.',
                'button_text' => 'Kembali ke kuesioner',
                'button_url' => '/back-to-unipark',
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 1,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Tugas 3 (task-03.html): 3 kartu penawaran + pernyataan tugas
            // ---------------------------------------------------------
            [
                'page_key' => 'tugas_3',
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
                'page_key' => 'tugas_3',
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
                'page_key' => 'tugas_3',
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
                'page_key' => 'tugas_3',
                'block_type' => 'task',
                'title' => 'Tugas 3',
                'subtitle' => null,
                'description' => 'Sebentar lagi Anda berulang tahun dan ingin mengundang lima sahabat terbaik Anda untuk malam bowling di pusat rekreasi Mundial. Pesanlah satu lintas untuk Kamis malam minggu depan pada pukul 19.00.<br>Petunjuk 1: Anda suka minum bir. Petunjuk 2: Anda tidak perlu memberikan data pribadi Anda; Anda boleh mengarangnya.',
                'button_text' => 'Mulai tugas 3',
                'button_url' => '/beranda',
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 4,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Konfirmasi lewati tugas 3 (task-03-cancel)
            // ---------------------------------------------------------
            [
                'page_key' => 'tugas_3_batal',
                'block_type' => 'confirm',
                'title' => 'Lewati tugas',
                'subtitle' => null,
                'description' => 'Apakah Anda yakin ingin melewati tugas ini?',
                'button_text' => 'Ya, lewati',
                'button_url' => '/kembali',
                'secondary_button_text' => 'Tidak, kembali',
                'secondary_button_url' => '/beranda',
                'sort_order' => 1,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Tugas 3 selesai (task-03-end)
            // ---------------------------------------------------------
            [
                'page_key' => 'tugas_3_selesai',
                'block_type' => 'notice',
                'title' => 'Sukses',
                'subtitle' => null,
                'description' => 'Bagus! Anda telah menyelesaikan tugas 3.',
                'button_text' => 'Kembali ke kuesioner',
                'button_url' => '/kembali',
                'secondary_button_text' => null,
                'secondary_button_url' => null,
                'sort_order' => 1,
                'is_visible' => true,
            ],

            // ---------------------------------------------------------
            // Halaman selesai tugas 1 (task-01-end)
            // ---------------------------------------------------------
            [
                'page_key' => 'tugas_selesai',
                'block_type' => 'notice',
                'title' => 'Sukses',
                'subtitle' => null,
                'description' => 'Bagus! Anda telah menyelesaikan tugas 1.',
                'button_text' => 'Lanjut ke tugas 2',
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
                'title' => null,
                'subtitle' => null,
                'description' => 'Halaman ini mengalihkan Anda ke Unipark.',
                'button_text' => 'Kembali ke kuesioner',
                'button_url' => '#',
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

        // Blok tab penawaran dihapus dari halaman depan
        PageContent::where('page_key', 'mulai')->where('block_type', 'tab')->delete();

        foreach ($rows as $row) {
            PageContent::updateOrCreate(
                ['page_key' => $row['page_key'], 'sort_order' => $row['sort_order']],
                $row
            );
        }
    }
}
