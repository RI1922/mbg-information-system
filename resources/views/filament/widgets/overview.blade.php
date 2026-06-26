<x-filament::section>

    <div class="rounded-2xl bg-[#1d1d22] border border-gray-800 p-8">

        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">

            <div class="flex-1">

                <h2 class="text-3xl font-bold text-white">
                    Dashboard Monitoring MBG
                </h2>

                <p class="mt-4 text-lg text-gray-300 leading-8 max-w-4xl">
                    Selamat datang,
                    <span class="font-semibold text-amber-400">
                        {{ auth()->user()->name }}
                    </span>
                    👋
                    <br>

                    Kelola seluruh data Program Makan Bergizi Gratis mulai dari
                    wilayah, SPPG, sekolah, gudang, supplier, distribusi,
                    hingga laporan secara realtime.
                </p>

            </div>

            <div class="lg:w-72">

                <div class="rounded-xl bg-[#26262d] p-6">

                    <p class="text-gray-400 text-sm">
                        Hari ini
                    </p>

                    <h3 class="mt-2 text-2xl font-bold text-white">
                        {{ now()->translatedFormat('l') }}
                    </h3>

                    <p class="text-gray-400">
                        {{ now()->translatedFormat('d F Y') }}
                    </p>

                    <div class="mt-5 flex items-center gap-2">

                        <span class="h-3 w-3 rounded-full bg-green-500"></span>

                        <span class="text-green-400 font-medium">
                            Sistem Online
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-filament::section>