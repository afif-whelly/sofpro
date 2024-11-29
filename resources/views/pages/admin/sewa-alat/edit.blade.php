<x-admin-layout>
    @isset($title)
        <x-slot name="title">{{ $title }}</x-slot>
    @endisset
    <x-slot name="button">
        <a href="{{ route('admin.sewa-alat.index') }}"
            class="col-start-2 px-3 py-2 mt-5 ml-auto leading-10 text-white bg-red-600 rounded w-max hover:bg-red-500">
            Kembali
        </a>
    </x-slot>

    @include('components.form-sewa-alat-admin', ['alats' => $alats, 'is_edit' => true])
</x-admin-layout>
