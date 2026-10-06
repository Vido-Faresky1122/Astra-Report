@section('content')
@extends('layouts.app')
<div class="bg-gray-50 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-2xl bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
        
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Edit Penugasan Laporan</h1>
            <p class="text-sm text-gray-500">Perbarui detail penugasan laporan yang terdaftar dalam sistem.</p>
        </div>

        <form action="{{ route('assignments.update', $assignment->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-4">
                <div>
                    <label for="title" class="block text-xs font-semibold text-gray-600 uppercase mb-1">
                        Nama Laporan <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="title" name="title" value="{{ old('title', $assignment->title) }}" required
                        placeholder="Contoh: Laporan Penjualan Bulanan"
                        class="w-full px-3.5 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('title') border-red-500 @enderror">
                    @error('title')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="department_id" class="block text-xs font-semibold text-gray-600 uppercase mb-1">
                            Departemen <span class="text-red-500">*</span>
                        </label>
                        <select id="department_id" name="department_id" required
                            class="w-full px-3.5 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('department_id') border-red-500 @enderror">
                            <option value="">-- Pilih Departemen --</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}" @selected(old('department_id', $assignment->department_id))>
                                    {{ $department->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('department_id')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="area_id" class="block text-xs font-semibold text-gray-600 uppercase mb-1">
                            Area <span class="text-red-500">*</span>
                        </label>
                        <select id="area_id" name="area_id" required
                            class="w-full px-3.5 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('area_id') border-red-500 @enderror">
                            <option value="">-- Pilih Area --</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->id }}" @selected(old('area_id', $assignment->area_id))>
                                    {{ $area->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('area_id')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="due_at" class="block text-xs font-semibold text-gray-600 uppercase mb-1">
                            Batas Waktu <span class="text-red-500">*</span>
                        </label>
                        <input type="date" id="due_at" name="due_at" 
                            value="{{ old('due_at', \Carbon\Carbon::parse($assignment->due_at)->format('Y-m-d')) }}" required
                            class="w-full px-3.5 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('due_at') border-red-500 @enderror">
                        @error('due_at')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="dealer_id" class="block text-xs font-semibold text-gray-600 uppercase mb-1">
                            Dibuat Oleh <span class="text-red-500">*</span>
                        </label>
                        <select id="dealer_id" name="dealer_id" required
                            class="w-full px-3.5 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('dealer_id') border-red-500 @enderror">
                            <option value="">-- Pilih Dealer --</option>
                            @foreach ($dealers as $dealer)
                                <option value="{{ $dealer->id }}" @selected(old('dealer_id', $assignment->dealer_id))>
                                    [{{ $dealer->code }}] {{ $dealer->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('dealer_id')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 mt-6 pt-4 border-t border-gray-100">
                <a href="{{ route('assignments.index') }}"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                    Batal
                </a>
                <button type="submit"
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

</div>
@endsection