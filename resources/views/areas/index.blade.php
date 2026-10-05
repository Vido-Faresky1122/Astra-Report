@section('content')
@extends('layouts.app')

<body class="bg-gray-50 p-6">

    <h1 class="text-2xl font-bold text-gray-900">Manajemen Area</h1>
    <p class="text-sm text-gray-500 mb-5">Kelola data Area yang terdaftar dalam sistem.</p>

    <div class="flex items-center justify-end gap-3 mb-4 flex-wrap">
        <a href="{{ route('areas.create') }}"
            class="flex items-center justify-end gap-1.5 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors">
            + Tambah Area
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-left">
                <tr>
                    <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">No</th>
                    <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Kode Area</th>
                    <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Nama Area</th>
                    <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($areas as $area)
                    <tr class="hover:bg-gray-50">
                        <td class="px-5 py-3 text-gray-400">{{ $loop->iteration }}</td>
                        <td class="px-5 py-3 font-medium text-gray-900">{{ $area->code }}</td>
                        <td class="px-5 py-3 text-gray-700">{{ $area->name }}</td>
                        <td class="px-5 py-3">
                            <div class="flex gap-1.5">
                                <a href="{{ route('areas.show', $area->id) }}"
                                    class="px-2.5 py-1 text-xs font-medium text-blue-700 bg-blue-50 rounded-md hover:bg-blue-100">Detail</a>
                                <a href="{{ route('areas.edit', $area->id) }}"
                                    class="px-2.5 py-1 text-xs font-medium text-amber-700 bg-amber-50 rounded-md hover:bg-amber-100">Edit</a>
                                <form action="{{ route('areas.destroy', $area->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus Area')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-2.5 py-1 text-xs font-medium text-red-700 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>
@endsection