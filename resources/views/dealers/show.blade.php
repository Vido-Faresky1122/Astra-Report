@section('content')
@extends('layouts.app')
<div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-lg bg-white border border-gray-200 rounded-xl p-6 shadow-sm">

        <div class="flex items-center justify-between pb-4 mb-5 border-b border-gray-100">
            <div>
                <h1 class="text-xl font-bold text-gray-900">Detail Dealer</h1>
                <p class="text-xs text-gray-500">Informasi lengkap data dealer terdaftar.</p>
            </div>
            <span
                class="px-2.5 py-1 text-xs font-semibold text-emerald-700 bg-emerald-50 rounded-full border border-emerald-200">
                Aktif
            </span>
        </div>

        <div class="space-y-4 text-sm">
            <div class="flex justify-between items-center py-2 border-b border-gray-50">
                <span class="text-gray-500 font-medium">ID System</span>
                <span class="text-gray-900 font-mono text-xs bg-gray-100 px-2 py-1 rounded">#{{ $dealer->id }}</span>
            </div>

            <div class="flex justify-between items-center py-2 border-b border-gray-50">
                <span class="text-gray-500 font-medium">Kode Dealer</span>
                <span class="text-gray-900 font-semibold">{{ $dealer->code }}</span>
            </div>

            <div class="flex justify-between items-center py-2 border-b border-gray-50">
                <span class="text-gray-500 font-medium">Nama Dealer</span>
                <span class="text-gray-900 font-medium">{{ $dealer->name }}</span>
            </div>
        </div>

        <div class="flex items-center justify-between gap-3 mt-6 pt-4 border-t border-gray-100">
            <a href="{{ route('dealers.index') }}"
                class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                &larr; Kembali
            </a>

            <div class="flex gap-2">
                <a href="{{ route('dealers.edit', $dealer->id) }}"
                    class="px-4 py-2 text-sm font-medium text-amber-700 bg-amber-50 rounded-lg hover:bg-amber-100 transition-colors">
                    Edit Data
                </a>
            </div>
        </div>

    </div>
</div>
@endsection