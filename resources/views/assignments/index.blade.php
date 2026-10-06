@section('content')
    @extends('layouts.app')
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Penugasan Laporan (Assignments)</h1>
        <p class="text-sm text-gray-500">Kelola dan tugaskan pembuatan laporan ke departemen, area, atau dealer tertentu.
        </p>
    </div>

    <div class="flex items-center justify-end gap-3 mb-4 flex-wrap">
        <a href="{{ route('assignments.create') }}"
            class="flex items-center justify-end gap-1.5 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors">
            + Tambah Assignment
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm">
        <div class="px-5 py-4 border-b border-gray-100 flex items-center justify-between">
            <h3 class="font-semibold text-gray-900 text-sm">Daftar Penugasan</h3>
            <span class="text-xs bg-gray-100 text-gray-600 px-2.5 py-1 rounded-full font-medium">Total:
                {{ count($assignments ?? []) }}</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">No</th>
                        <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Nama Laporan</th>
                        <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Departemen</th>
                        <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Area</th>
                        <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Batas Waktu</th>
                        <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Dibuat Oleh</th>
                        <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($assignments as $assignment)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-5 py-3.5 text-gray-400 font-medium">{{ $loop->iteration }}</td>
                            <td class="px-5 py-3.5 font-semibold text-gray-900">{{ $assignment->title }}</td>
                            <td class="px-5 py-3.5 text-gray-700">
                                <span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-50 text-blue-700 border border-blue-100">
                                    {{ $assignment->department->name ?? '-' }}
                                </span>
                            </td>
                            <td class="px-5 py-3.5 text-gray-700">{{ $assignment->area->name ?? '-' }}</td>
                            <td class="px-5 py-3.5">
                                <span
                                    class="px-2.5 py-1 text-xs font-medium rounded-md bg-amber-50 text-amber-700 border border-amber-200">
                                    {{ \Carbon\Carbon::parse($assignment->due_at)->format('d M Y') }}
                                </span>
                            </td>
                            <td class="px-5 py-3.5 text-gray-700 text-xs">
                                <span class="font-medium text-gray-900 block">{{ $assignment->dealer->name ?? '-' }}</span>
                                <span class="text-gray-400 font-mono">{{ $assignment->dealer->code ?? '' }}</span>
                            </td>
                            <td class="px-5 py-3.5 text-center">
                                <div class="flex items-center justify-center gap-1.5">
                                    <a href="{{ route('assignments.show', $assignment->id) }}"
                                        class="px-2.5 py-1 text-xs font-medium text-blue-700 bg-blue-50 rounded-md hover:bg-blue-100 transition-colors">
                                        Detail
                                    </a>
                                    <a href="{{ route('assignments.edit', $assignment->id) }}"
                                        class="px-2.5 py-1 text-xs font-medium text-amber-700 bg-amber-50 rounded-md hover:bg-amber-100 transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('assignments.destroy', $assignment->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus penugasan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-2.5 py-1 text-xs font-medium text-red-700 bg-red-50 rounded-md hover:bg-red-100 transition-colors">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-5 py-8 text-center text-gray-400">
                                Belum ada penugasan laporan yang terdaftar.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection