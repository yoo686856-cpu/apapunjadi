<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-lg font-semibold mb-6">
                        Detail Data Mahasiswa
                    </h3>

                    <div class="space-y-4">

                        {{-- NIM --}}
                        <div>
                            <p class="font-semibold text-gray-700">
                                NIM
                            </p>

                            <p class="mt-1 text-gray-600">
                                {{ $mahasiswa->nim }}
                            </p>
                        </div>

                        {{-- Nama --}}
                        <div>
                            <p class="font-semibold text-gray-700">
                                Nama Mahasiswa
                            </p>

                            <p class="mt-1 text-gray-600">
                                {{ $mahasiswa->nama }}
                            </p>
                        </div>

                        {{-- Program Studi --}}
                        <div>
                            <p class="font-semibold text-gray-700">
                                Program Studi
                            </p>

                            <p class="mt-1 text-gray-600">
                                {{ $mahasiswa->program_studi }}
                            </p>
                        </div>

                        {{-- Email --}}
                        <div>
                            <p class="font-semibold text-gray-700">
                                Email
                            </p>

                            <p class="mt-1 text-gray-600">
                                {{ $mahasiswa->email }}
                            </p>
                        </div>

                        {{-- Angkatan --}}
                        <div>
                            <p class="font-semibold text-gray-700">
                                Angkatan
                            </p>

                            <p class="mt-1 text-gray-600">
                                {{ $mahasiswa->angkatan }}
                            </p>
                        </div>

                    </div>

                    {{-- Tombol --}}
                    <div class="mt-6">
                        <a href="{{ route('mahasiswa.index') }}"
                           class="inline-block px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                            Kembali
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>