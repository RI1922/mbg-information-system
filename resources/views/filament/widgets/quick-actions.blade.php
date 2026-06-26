<x-filament::section heading="Aksi Cepat">

    <div class="grid grid-cols-2 gap-4">

        <x-filament::button
            tag="a"
            href="{{ route('filament.admin.resources.users.index') }}"
            icon="heroicon-o-users"
            color="primary"
            size="lg">
            Kelola User
        </x-filament::button>

        <x-filament::button
            tag="a"
            href="{{ route('filament.admin.resources.schools.index') }}"
            icon="heroicon-o-academic-cap"
            color="success"
            size="lg">
            Kelola Sekolah
        </x-filament::button>

        <x-filament::button
            tag="a"
            href="{{ route('filament.admin.resources.warehouses.index') }}"
            icon="heroicon-o-building-office"
            color="warning"
            size="lg">
            Kelola Gudang
        </x-filament::button>

        <x-filament::button
            tag="a"
            href="{{ route('filament.admin.resources.sppgs.index') }}"
            icon="heroicon-o-cube"
            color="danger"
            size="lg">
            Kelola SPPG
        </x-filament::button>

    </div>

</x-filament::section>