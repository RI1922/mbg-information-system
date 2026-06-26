@php
$news = [
    [
        'title' => 'Program MBG Perluas Jangkauan untuk Meningkatkan Gizi Anak Indonesia',
        'date' => '26 Juni 2026',
        'category' => 'Program',
        'image' => asset('images/news/news1.png'),
        'excerpt' => 'Program Makan Bergizi Gratis terus diperluas ke berbagai wilayah untuk meningkatkan kualitas gizi peserta didik sekaligus mendukung tumbuh kembang generasi Indonesia yang sehat, cerdas, dan produktif.',
    ],
    [
        'title' => 'Distribusi Makanan Bergizi Berjalan Tepat Waktu di Berbagai Daerah',
        'date' => '25 Juni 2026',
        'category' => 'Distribusi',
        'image' => asset('images/news/news2.png'),
        'excerpt' => 'Tim distribusi bersama SPPG memastikan seluruh paket makanan bergizi diterima sekolah sesuai jadwal melalui sistem monitoring distribusi secara real-time.',
    ],
    [
        'title' => 'MBG Information System Permudah Monitoring Program Nasional',
        'date' => '24 Juni 2026',
        'category' => 'Teknologi',
        'image' => asset('images/news/news3.png'),
        'excerpt' => 'Dashboard MBG Information System membantu administrator memantau data sekolah, gudang, supplier, serta distribusi makanan secara lebih cepat dan akurat.',
    ],
    [
        'title' => 'Kerja Sama dengan UMKM Lokal Dukung Ketahanan Pangan Nasional',
        'date' => '23 Juni 2026',
        'category' => 'Kemitraan',
        'image' => asset('images/news/news4.png'),
        'excerpt' => 'Program MBG melibatkan pelaku UMKM, petani, peternak, dan nelayan sebagai pemasok bahan pangan untuk meningkatkan perekonomian daerah.',
    ],
    [
        'title' => 'SPPG Tingkatkan Standar Keamanan dan Kualitas Pangan',
        'date' => '22 Juni 2026',
        'category' => 'SPPG',
        'image' => asset('images/news/news5.png'),
        'excerpt' => 'Seluruh Satuan Pelayanan Pemenuhan Gizi menerapkan prosedur keamanan pangan agar makanan yang diterima peserta didik tetap berkualitas.',
    ],
    [
        'title' => 'Evaluasi Berkala Dilakukan Demi Meningkatkan Pelayanan MBG',
        'date' => '21 Juni 2026',
        'category' => 'Evaluasi',
        'image' => asset('images/news/news6.png'),
        'excerpt' => 'Pemerintah terus melakukan evaluasi terhadap pelaksanaan Program MBG sebagai upaya meningkatkan efektivitas pelayanan kepada masyarakat.',
    ],
];
@endphp

<section id="news" class="scroll-mt-20 py-16 bg-slate-50">

    <div class="container mx-auto max-w-7xl px-6">

        <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">

            @foreach($news as $item)

            <article
                class="overflow-hidden rounded-2xl bg-white border border-slate-200 shadow-sm hover:-translate-y-2 hover:shadow-xl transition duration-300">

                <img
                    src="{{ $item['image'] }}"
                    alt="{{ $item['title'] }}"
                    class="h-56 w-full object-cover">

                <div class="p-6">

                    <div class="flex items-center justify-between mb-4">

                        <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                            {{ $item['category'] }}
                        </span>

                        <span class="text-xs text-slate-500">
                            {{ $item['date'] }}
                        </span>

                    </div>

                    <h3 class="text-xl font-bold text-slate-900 leading-8 line-clamp-2">
                        {{ $item['title'] }}
                    </h3>

                    <p class="mt-4 text-sm text-slate-600 leading-7 line-clamp-3">
                        {{ $item['excerpt'] }}
                    </p>

                    <a
                        href="#"
                        class="inline-flex items-center mt-6 font-semibold text-green-600 hover:text-green-700">

                        Baca Selengkapnya

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 h-4 ml-2"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 5l7 7-7 7"/>

                        </svg>

                    </a>

                </div>

            </article>

            @endforeach

        </div>

        <div class="mt-12 text-center">

            <a
                href="#"
                class="inline-flex items-center rounded-xl bg-green-600 px-8 py-3 font-semibold text-white transition hover:bg-green-700">

                Lihat Semua Berita

            </a>

        </div>

    </div>

</section>