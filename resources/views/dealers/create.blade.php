<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dealer - LMS ASTRA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fonts
</head>

<body class="flex justify-center items-center h-screen">
    <div class="w-full max-w-md bg-white border border-gray-200 rounded-xl p-6 shadow-sm">

        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Tambah Dealer</h1>
            <p class="text-sm text-gray-500">Masukkan informasi detail untuk menambahkan dealer baru.</p>
        </div>

        <form action="{{ route('dealers.store') }}" method="POST">
            @csrf

            <div class="space-y-4">
                <div>
                    <label for="code" class="block text-sm font-medium text-gray-700 mb-1">
                        Kode Dealer <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="code" name="code" value="{{ old('code') }}" required
                        placeholder="Contoh: DLR-001"
                        class="w-full px-3.5 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('code') border-red-500 @enderror">

                    @error('code')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                        Nama Dealer <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        placeholder="Contoh: Honda Jaya Motor"
                        class="w-full px-3.5 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('name') border-red-500 @enderror">

                    @error('name')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 mt-6 pt-4 border-t border-gray-100">
                <a href="{{ route('dealers.index') }}"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                    Batal
                </a>
                <button type="submit"
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors">
                    Simpan Dealer
                </button>
            </div>
        </form>
    </div>
</body>

</html>