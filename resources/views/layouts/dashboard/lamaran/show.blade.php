<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lamaran &raquo; {{ $lamaran->id }} &raquo; {{ $lamaran->pekerjaan->nama_pekerjaan }}
        </h2>
    </x-slot>

    {{-- <x-slot name="script">
        <script>
            // AJAX DataTable
            var datatable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    { data: 'id', name: 'id', width: '5%'},
                    { data: 'user.name', name: 'user.name' },
                    { data: 'pekerjaan.nama_pekerjaan', name: 'pekerjaan.nama_pekerjaan' },
                    { data: 'pekerjaan.nama_perusahaan', name: 'pekerjaan.nama_perusahaan' },
                ],
            });
        </script>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5">Detail Lamaran</h2>
            <div class="bg-white overflow-hidden shadow sm:rounded-lg mb-10">
                 <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full">
                        <tbody>
                            <tr>
                                <img class="py-4" src="{{ Storage::url($lamaran->user->profile_photo_path ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png') }}" width="200" height="200"/>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Name</th>
                                <td class="border px-6 py-4">{{ $lamaran->user->name }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Email</th>
                                <td class="border px-6 py-4">{{ $lamaran->user->email }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Nama Pekerjaan</th>
                                <td class="border px-6 py-4">{{ $lamaran->pekerjaan->nama_pekerjaan }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Lokasi Pekerjaan</th>
                                <td class="border px-6 py-4">{{ $lamaran->pekerjaan->lokasi_pekerjaan }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Tempat Terakhir Bekerja</th>
                                <td class="border px-6 py-4">{{ $lamaran->user->tempat_terakhir_bekerja }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Posisi Terakhir Bekerja</th>
                                <td class="border px-6 py-4">{{ $lamaran->user->posisi_terakhir_bekerja }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Prestasi</th>
                                <td class="border px-6 py-4">{{ $lamaran->user->prestasi }}</td>
                            </tr>
                             <tr>
                                <th class="border px-6 py-4 text-left">Skill</th>
                                <td class="border px-6 py-4">{{ $lamaran->user->skill }}</td>
                            </tr>
                             <tr>
                                <th class="border px-6 py-4 text-left">Pendidikan</th>
                                <td class="border px-6 py-4">{{ $lamaran->user->pendidikan }}</td>
                            </tr>
                             <tr>
                                <th class="border px-6 py-4 text-left">Kewarganegaraan</th>
                                <td class="border px-6 py-4">{{ $lamaran->user->kewarganegaraan }}</td>
                            </tr>
                             <tr>
                                <th class="border px-6 py-4 text-left">Alamat</th>
                                <td class="border px-6 py-4">{{ $lamaran->user->alamat }}</td>
                            </tr>
                             <tr>
                                <th class="border px-6 py-4 text-left">Prestasi</th>
                                <td class="border px-6 py-4">{{ $lamaran->user->prestasi }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Gaji</th>
                                <td class="border px-6 py-4">{{ $lamaran->pekerjaan->gaji }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Lokasi Pekerjaan</th>
                                <td class="border px-6 py-4">{{ $lamaran->pekerjaan->lokasi_pekerjaan }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Kategori</th>
                                <td class="border px-6 py-4">{{ $lamaran->pekerjaan->kategori }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5">List Lamaran</h2>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama User</th>
                            <th>Nama Pekerjaan</th>
                            <th>Nama Perusahaan</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>