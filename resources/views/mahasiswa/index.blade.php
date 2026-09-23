<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Pesan berhasil --}}
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Tombol Tambah khusus Admin --}}
            @if (auth()->user()->role === 'admin')
                <div class="mb-4">
                    <a href="{{ route('mahasiswa.create') }}"
                       class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        + Tambah Mahasiswa
                    </a>
                </div>
            @endif

            {{-- Tabel mahasiswa --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-lg font-semibold mb-4">
                        Daftar Mahasiswa
                    </h3>

                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse border border-gray-300">

                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2">
                                        No
                                    </th>

                                    <th class="border border-gray-300 px-4 py-2">
                                        NIM
                                    </th>

                                    <th class="border border-gray-300 px-4 py-2">
                                        Nama
                                    </th>

                                    <th class="border border-gray-300 px-4 py-2">
                                        Program Studi
                                    </th>

                                    <th class="border border-gray-300 px-4 py-2">
                                        Email
                                    </th>

                                    <th class="border border-gray-300 px-4 py-2">
                                        Angkatan
                                    </th>

                                    @if (auth()->user()->role === 'admin')
                                        <th class="border border-gray-300 px-4 py-2">
                                            Aksi
                                        </th>
                                    @endif
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($mahasiswas as $mahasiswa)

                                    <tr class="hover:bg-gray-50">

                                        <td class="border border-gray-300 px-4 py-2 text-center">
                                            {{ $loop->iteration }}
                                        </td>

                                        <td class="border border-gray-300 px-4 py-2">
                                            {{ $mahasiswa->nim }}
                                        </td>

                                        <td class="border border-gray-300 px-4 py-2">
                                            {{ $mahasiswa->nama }}
                                        </td>

                                        <td class="border border-gray-300 px-4 py-2">
                                            {{ $mahasiswa->program_studi }}
                                        </td>

                                        <td class="border border-gray-300 px-4 py-2">
                                            {{ $mahasiswa->email }}
                                        </td>

                                        <td class="border border-gray-300 px-4 py-2 text-center">
                                            {{ $mahasiswa->angkatan }}
                                        </td>

                                        @if (auth()->user()->role === 'admin')

                                            <td class="border border-gray-300 px-4 py-2">

                                                <div class="flex gap-2">

                                                    {{-- Detail --}}
                                                    <a href="{{ route('mahasiswa.show', $mahasiswa) }}"
                                                       class="px-3 py-1 bg-gray-500 text-white rounded hover:bg-gray-600">
                                                        Detail
                                                    </a>

                                                    {{-- Edit --}}
                                                    <a href="{{ route('mahasiswa.edit', $mahasiswa) }}"
                                                       style="background-color: #f59e0b; color: white; padding: 6px 12px; 
                                                       border-radius: 6px; display: inline-block;
                                                       text-decoration: none;">
                                                         Edit
                                                    </a>

                                                    {{-- Hapus --}}
                                                    <form action="{{ route('mahasiswa.destroy', $mahasiswa) }}"
                                                          method="POST">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit"
                                                                onclick="return confirm('Yakin ingin menghapus data mahasiswa ini?')"
                                                                class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                                            Hapus
                                                        </button>

                                                    </form>

                                                </div>

                                            </td>

                                        @endif

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="7"
                                            class="border border-gray-300 px-4 py-6 text-center text-gray-500">
                                            Belum ada data mahasiswa.
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>