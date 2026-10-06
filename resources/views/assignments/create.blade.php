@section('content')
    @extends('layouts.app')
    <div class="bg-white border border-gray-200 rounded-xl p-5 mb-6 shadow-sm">
        <h2 class="text-base font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100 flex items-center gap-2">
            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Buat Penugasan Baru
        </h2>

        <form action="{{ route('assignments.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <label for="title" class="block text-xs font-semibold text-gray-600 uppercase mb-1">
                        Nama Laporan <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required
                        placeholder="Contoh: Laporan Penjualan Bulanan"
                        class="w-full px-3.5 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label for="department_id" class="block text-xs font-semibold text-gray-600 uppercase mb-1">
                        Departemen <span class="text-red-500">*</span>
                    </label>
                    <select id="department_id" name="department_id" required
                        class="w-full px-3.5 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        <option value="">-- Pilih Departemen --</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id}}">
                                {{ $department->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="area_id" class="block text-xs font-semibold text-gray-600 uppercase mb-1">
                        Area <span class="text-red-500">*</span>
                    </label>
                    <select id="area_id" name="area_id" required
                        class="w-full px-3.5 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        <option value="">-- Pilih Area --</option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}">
                                {{ $area->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="due_at" class="block text-xs font-semibold text-gray-600 uppercase mb-1">
                        Batas Waktu <span class="text-red-500">*</span>
                    </label>
                    <input type="date" id="due_at" name="due_at" value="{{ old('due_at', date('Y-m-d')) }}" required
                        class="w-full px-3.5 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                </div>

                <div class="md:col-span-2 lg:col-span-2">
                    <label for="dealer_id" class="block text-xs font-semibold text-gray-600 uppercase mb-1">
                        Dibuat Oleh <span class="text-red-500">*</span>
                    </label>
                    <select id="dealer_id" name="dealer_id" required
                        class="w-full px-3.5 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        <option value="">-- Pilih Dealer --</option>
                        @foreach ($dealers as $dealer)
                            <option value="{{ $dealer->id }}">
                                [{{ $dealer->code }}] {{$dealer->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end gap-3 mt-5 pt-3 border-t border-gray-100">
                <button type="reset"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                    Reset
                </button>
                <button type="submit"
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors flex items-center gap-1.5">
                    + Simpan Penugasan
                </button>
            </div>
        </form>
    </div>
@endsection