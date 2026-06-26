<section id="statistics" class="scroll-mt-24 py-14 bg-slate-50">

    <div class="container mx-auto max-w-7xl px-6">

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">

            {{-- Provinsi --}}
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 min-h-[220px] flex flex-col items-center justify-center text-center p-8">

                <div class="text-5xl mb-5">🇮🇩</div>

                <h3 class="text-5xl font-extrabold text-green-600 leading-none">
                    {{ \App\Models\Province::count() }}
                </h3>

                <p class="mt-5 text-base font-medium text-slate-600">
                    Provinsi
                </p>

            </div>

            {{-- Kabupaten --}}
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 min-h-[220px] flex flex-col items-center justify-center text-center p-8">

                <div class="text-5xl mb-5">🏙️</div>

                <h3 class="text-5xl font-extrabold text-green-600 leading-none">
                    {{ \App\Models\Regency::count() }}
                </h3>

                <p class="mt-5 text-base font-medium text-slate-600">
                    Kabupaten / Kota
                </p>

            </div>

            {{-- Kecamatan --}}
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 min-h-[220px] flex flex-col items-center justify-center text-center p-8">

                <div class="text-5xl mb-5">📍</div>

                <h3 class="text-5xl font-extrabold text-green-600 leading-none">
                    {{ \App\Models\District::count() }}
                </h3>

                <p class="mt-5 text-base font-medium text-slate-600">
                    Kecamatan
                </p>

            </div>

            {{-- Desa --}}
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 min-h-[220px] flex flex-col items-center justify-center text-center p-8">

                <div class="text-5xl mb-5">🏡</div>

                <h3 class="text-5xl font-extrabold text-green-600 leading-none">
                    {{ \App\Models\Village::count() }}
                </h3>

                <p class="mt-5 text-base font-medium text-slate-600">
                    Desa / Kelurahan
                </p>

            </div>

            {{-- SPPG --}}
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 min-h-[220px] flex flex-col items-center justify-center text-center p-8">

                <div class="text-5xl mb-5">🍱</div>

                <h3 class="text-5xl font-extrabold text-green-600 leading-none">
                    {{ \App\Models\Sppg::count() }}
                </h3>

                <p class="mt-5 text-base font-medium text-slate-600">
                    SPPG
                </p>

            </div>

            {{-- Sekolah --}}
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 min-h-[220px] flex flex-col items-center justify-center text-center p-8">

                <div class="text-5xl mb-5">🏫</div>

                <h3 class="text-5xl font-extrabold text-green-600 leading-none">
                    {{ \App\Models\School::count() }}
                </h3>

                <p class="mt-5 text-base font-medium text-slate-600">
                    Sekolah
                </p>

            </div>

            {{-- Gudang --}}
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 min-h-[220px] flex flex-col items-center justify-center text-center p-8">

                <div class="text-5xl mb-5">🏬</div>

                <h3 class="text-5xl font-extrabold text-green-600 leading-none">
                    {{ \App\Models\Warehouse::count() }}
                </h3>

                <p class="mt-5 text-base font-medium text-slate-600">
                    Gudang
                </p>

            </div>

            {{-- Supplier --}}
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 min-h-[220px] flex flex-col items-center justify-center text-center p-8">

                <div class="text-5xl mb-5">🚚</div>

                <h3 class="text-5xl font-extrabold text-green-600 leading-none">
                    {{ \App\Models\Supplier::count() }}
                </h3>

                <p class="mt-5 text-base font-medium text-slate-600">
                    Supplier
                </p>

            </div>

        </div>

    </div>

</section>