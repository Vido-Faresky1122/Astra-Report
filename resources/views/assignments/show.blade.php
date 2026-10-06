@section('content')
    @extends('layouts.app')

    <body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">

        <div class="w-full max-w-lg bg-white border border-gray-200 rounded-xl p-6 shadow-sm">

            <div class="flex items-center justify-between pb-4 mb-5 border-b border-gray-100">
                <div>
                    <h1 class="text-xl font-bold text-gray-900">Detail Penugasan</h1>
                    <p class="text-xs text-gray-500">Informasi lengkap penugasan laporan.</p>
                </div>
                <span
                    class="px-2.5 py-1 text-xs font-semibold text-amber-700 bg-amber-50 rounded-full border border-amber-200">
                    Batas Waktu: {{ \Carbon\Carbon::parse($assignment->due_at)->format('d M Y') }}
                </span>
            </div>

            <div class="space-y-4 text-sm">
                <div class="flex justify-between items-center py-2 border-b border-gray-50">
                    <span class="text-gray-500 font-medium">ID Penugasan</span>
                    <span
                        class="text-gray-900 font-mono text-xs bg-gray-100 px-2 py-1 rounded">#{{ $assignment->id }}</span>
                </div>

                <div class="flex justify-between items-center py-2 border-b border-gray-50">
                    <span class="text-gray-500 font-medium">Nama Laporan</span>
                    <span class="text-gray-900 font-semibold text-right">{{ $assignment->title }}</span>
                </div>

                <div class="flex justify-between items-center py-2 border-b border-gray-50">
                    <span class="text-gray-500 font-medium">Departemen</span>
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded text-xs font-medium bg-blue-50 text-blue-700 border border-blue-100">
                        {{ $assignment->department->name ?? '-' }}
                    </span>
                </div>

                <div class="flex justify-between items-center py-2 border-b border-gray-50">
                    <span class="text-gray-500 font-medium">Area</span>
                    <span class="text-gray-900 font-medium">{{ $assignment->area->name ?? '-' }}</span>
                </div>

                <div class="flex justify-between items-center py-2 border-b border-gray-50">
                    <span class="text-gray-500 font-medium">Dibuat Oleh (Dealer)</span>
                    <div class="text-right">
                        <span class="text-gray-900 font-medium block">{{ $assignment->dealer->name ?? '-' }}</span>
                        <span class="text-gray-400 font-mono text-xs">{{ $assignment->dealer->code ?? '' }}</span>
                    </div>
                </div>

                <div class="flex justify-between items-center py-2 border-b border-gray-50">
                    <span class="text-gray-500 font-medium">Dibuat Pada</span>
                    <span
                        class="text-gray-700">{{ $assignment->created_at ? $assignment->created_at->format('d M Y, H:i') : '-' }}</span>
                </div>

                <div class="flex justify-between items-center py-2">
                    <span class="text-gray-500 font-medium">Terakhir Diubah</span>
                    <span
                        class="text-gray-700">{{ $assignment->updated_at ? $assignment->updated_at->format('d M Y, H:i') : '-' }}</span>
                </div>
            </div>

            <div class="flex items-center justify-between gap-3 mt-6 pt-4 border-t border-gray-100">
                <a href="{{ route('assignments.index') }}"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                    &larr; Kembali
                </a>

                <div class="flex gap-2">
                    <a href="{{ route('assignments.edit', $assignment->id) }}"
                        class="px-4 py-2 text-sm font-medium text-amber-700 bg-amber-50 rounded-lg hover:bg-amber-100 transition-colors">
                        Edit Penugasan
                    </a>
                </div>
            </div>

        </div>

    </body>
@endsection