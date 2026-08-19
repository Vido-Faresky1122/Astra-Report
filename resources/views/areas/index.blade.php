<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Dealer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 p-6">

    <h1 class="text-2xl font-bold text-gray-900">Manajemen Dealer</h1>
    <p class="text-sm text-gray-500 mb-5">Kelola data dealer yang terdaftar dalam sistem.</p>

    <div class="flex items-center justify-end gap-3 mb-4 flex-wrap">
        <a href="create.html" class="flex items-center justify-end gap-1.5 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors">
            + Tambah Dealer
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-left">
                <tr>
                    <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">No</th>
                    <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Kode Dealer</th>
                    <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Nama Dealer</th>
                    <th class="px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <tr class="hover:bg-gray-50">
                    <td class="px-5 py-3 text-gray-400">1</td>
                    <td class="px-5 py-3 font-medium text-gray-900">DLR-001</td>
                    <td class="px-5 py-3 text-gray-700">Dealer Toyota Astra Motor</td>
                    <td class="px-5 py-3">
                        <div class="flex gap-1.5">
                            <a href="show.html" class="px-2.5 py-1 text-xs font-medium text-blue-700 bg-blue-50 rounded-md hover:bg-blue-100">Detail</a>
                            <a href="edit.html" class="px-2.5 py-1 text-xs font-medium text-amber-700 bg-amber-50 rounded-md hover:bg-amber-100">Edit</a>
                            <button onclick="document.getElementById('modal').classList.remove('hidden')" class="px-2.5 py-1 text-xs font-medium text-red-700 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-5 py-3 text-gray-400">2</td>
                    <td class="px-5 py-3 font-medium text-gray-900">DLR-002</td>
                    <td class="px-5 py-3 text-gray-700">Dealer Daihatsu Astra</td>
                    <td class="px-5 py-3">
                        <div class="flex gap-1.5">
                            <a href="show.html" class="px-2.5 py-1 text-xs font-medium text-blue-700 bg-blue-50 rounded-md hover:bg-blue-100">Detail</a>
                            <a href="edit.html" class="px-2.5 py-1 text-xs font-medium text-amber-700 bg-amber-50 rounded-md hover:bg-amber-100">Edit</a>
                            <button onclick="document.getElementById('modal').classList.remove('hidden')" class="px-2.5 py-1 text-xs font-medium text-red-700 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-5 py-3 text-gray-400">3</td>
                    <td class="px-5 py-3 font-medium text-gray-900">DLR-003</td>
                    <td class="px-5 py-3 text-gray-700">Dealer Isuzu Astra</td>
                    <td class="px-5 py-3">
                        <div class="flex gap-1.5">
                            <a href="show.html" class="px-2.5 py-1 text-xs font-medium text-blue-700 bg-blue-50 rounded-md hover:bg-blue-100">Detail</a>
                            <a href="edit.html" class="px-2.5 py-1 text-xs font-medium text-amber-700 bg-amber-50 rounded-md hover:bg-amber-100">Edit</a>
                            <button onclick="document.getElementById('modal').classList.remove('hidden')" class="px-2.5 py-1 text-xs font-medium text-red-700 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-5 py-3 text-gray-400">4</td>
                    <td class="px-5 py-3 font-medium text-gray-900">DLR-004</td>
                    <td class="px-5 py-3 text-gray-700">Dealer Suzuki Indomobil</td>
                    <td class="px-5 py-3">
                        <div class="flex gap-1.5">
                            <a href="show.html" class="px-2.5 py-1 text-xs font-medium text-blue-700 bg-blue-50 rounded-md hover:bg-blue-100">Detail</a>
                            <a href="edit.html" class="px-2.5 py-1 text-xs font-medium text-amber-700 bg-amber-50 rounded-md hover:bg-amber-100">Edit</a>
                            <button onclick="document.getElementById('modal').classList.remove('hidden')" class="px-2.5 py-1 text-xs font-medium text-red-700 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-5 py-3 text-gray-400">5</td>
                    <td class="px-5 py-3 font-medium text-gray-900">DLR-005</td>
                    <td class="px-5 py-3 text-gray-700">Dealer Honda Prospect Motor</td>
                    <td class="px-5 py-3">
                        <div class="flex gap-1.5">
                            <a href="show.html" class="px-2.5 py-1 text-xs font-medium text-blue-700 bg-blue-50 rounded-md hover:bg-blue-100">Detail</a>
                            <a href="edit.html" class="px-2.5 py-1 text-xs font-medium text-amber-700 bg-amber-50 rounded-md hover:bg-amber-100">Edit</a>
                            <button onclick="document.getElementById('modal').classList.remove('hidden')" class="px-2.5 py-1 text-xs font-medium text-red-700 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- Modal -->
    <div id="modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40">
        <div class="bg-white rounded-xl shadow-xl w-full max-w-sm p-6 text-center">
            <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center mx-auto mb-4">
                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                </svg>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-1">Hapus Dealer</h3>
            <p class="text-sm text-gray-500 mb-5">Apakah Anda yakin ingin menghapus dealer ini? Tindakan ini tidak dapat dibatalkan.</p>
            <div class="flex justify-center gap-2">
                <button onclick="document.getElementById('modal').classList.add('hidden')" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">Batal</button>
                <button class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">Ya, Hapus</button>
            </div>
        </div>
    </div>

</body>
</html>
