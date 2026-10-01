<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Dealer;
use Illuminate\Database\Seeder;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dealers = [
            ['code' => 'DLR-001', 'name' => 'Astra Motor Pontianak'],
            ['code' => 'DLR-002', 'name' => 'Tunas Toyota Jakarta'],
            ['code' => 'DLR-003', 'name' => 'Anugerah Utama Motor Surabaya'],
            ['code' => 'DLR-004', 'name' => 'Sumber Baru Honda Bandung'],
            ['code' => 'DLR-005', 'name' => 'Nasmoco Siliwangi Semarang'],
            ['code' => 'DLR-006', 'name' => 'Arista Mitsubishi Medan'],
            ['code' => 'DLR-007', 'name' => 'Kalla Toyota Makassar'],
            ['code' => 'DLR-008', 'name' => 'Maju Motor Hyundai Tangerang'],
            ['code' => 'DLR-009', 'name' => 'Sejahtera Buana Trada Suzuki Bekasi'],
            ['code' => 'DLR-010', 'name' => 'Bintang Motor Depok'],
            ['code' => 'DLR-011', 'name' => 'Surya Agung Motor Denpasar'],
            ['code' => 'DLR-012', 'name' => 'Prima Parama Wisesa Wuling Palembang'],
            ['code' => 'DLR-013', 'name' => 'Indomobil Nissan Bogor'],
            ['code' => 'DLR-014', 'name' => 'Gaya Motor Balikpapan'],
            ['code' => 'DLR-015', 'name' => 'Tri Mandiri Mazda Malang'],
            ['code' => 'DLR-016', 'name' => 'Cahaya Utama Isuzu Samarinda'],
            ['code' => 'DLR-017', 'name' => 'Kencana Jaya Chery Surakarta'],
            ['code' => 'DLR-018', 'name' => 'Sentra Mobilindo Banjarmasin'],
            ['code' => 'DLR-019', 'name' => 'Mitra Auto Perkasa Pekanbaru'],
            ['code' => 'DLR-020', 'name' => 'Harapan Indah Motor Yogyakarta'],
            ['code' => 'DLR-021', 'name' => 'Sinar Mas Motor Manado'],
            ['code' => 'DLR-022', 'name' => 'Pacific Mobil Padang'],
            ['code' => 'DLR-023', 'name' => 'Wahana Makmur Honda Tangerang Selatan'],
            ['code' => 'DLR-024', 'name' => 'Mega Auto Perkasa Lampung'],
            ['code' => 'DLR-025', 'name' => 'Nusantara Ford Jakarta Selatan'],
        ];

        Dealer::upsert($dealers, ['code'], ['name']);
    }
}
