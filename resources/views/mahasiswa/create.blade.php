<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-lg font-semibold mb-6">
                        Form Tambah Data Mahasiswa
                    </h3>

                    {{-- Menampilkan error validasi --}}
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('mahasiswa.store') }}" method="POST">

                        @csrf

                        {{-- NIM --}}
                        <div class="mb-4">
                            <label for="nim"
                                   class="block font-medium text-sm text-gray-700">
                                NIM
                            </label>

                            <input type="text"
                                   id="nim"
                                   name="nim"
                                   value="{{ old('nim') }}"
                                   required
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        </div>

                        {{-- Nama --}}
                        <div class="mb-4">
                            <label for="nama"
                                   class="block font-medium text-sm text-gray-700">
                                Nama Mahasiswa
                            </label>

                            <input type="text"
                                   id="nama"
                                   name="nama"
                                   value="{{ old('nama') }}"
                                   required
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        </div>

                        {{-- Program Studi --}}
                        <div class="mb-4">
                            <label for="program_studi"
                                   class="block font-medium text-sm text-gray-700">
                                Program Studi
                            </label>

                            <input type="text"
                                   id="program_studi"
                                   name="program_studi"
                                   value="{{ old('program_studi') }}"
                                   required
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        </div>

                        {{-- Email --}}
                        <div class="mb-4">
                            <label for="email"
                                   class="block font-medium text-sm text-gray-700">
                                Email
                            </label>

                            <input type="email"
                                   id="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        </div>

                        {{-- Angkatan --}}
                        <div class="mb-6">
                            <label for="angkatan"
                                   class="block font-medium text-sm text-gray-700">
                                Angkatan
                            </label>

                            <input type="number"
                                   id="angkatan"
                                   name="angkatan"
                                   value="{{ old('angkatan') }}"
                                   min="2000"
                                   max="2100"
                                   required
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        </div>

                        {{-- Tombol --}}
                        <div class="flex items-center gap-3">

                            <button type="submit"
                                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                Simpan
                            </button>

                            <a href="{{ route('mahasiswa.index') }}"
                               class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                                Kembali
                            </a>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>