<?php

namespace Database\Seeders;

use App\Models\BarangMasuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        BarangMasuk::insert([
            [
                'tanggal' => '2022-12-01',
                'sumber_dana' => 'Hibah',
                'pemasok_id' => 1,
                'karyawan_id' => 1,
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'tanggal' => '2022-12-08',
                'sumber_dana' => 'Penganggaran',
                'pemasok_id' => 2,
                'karyawan_id' => 1,
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'tanggal' => '2022-12-22',
                'sumber_dana' => 'Hibah',
                'pemasok_id' => 1,
                'karyawan_id' => 2,
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'tanggal' => '2023-01-03',
                'sumber_dana' => 'Hibah',
                'pemasok_id' => 2,
                'karyawan_id' => 2,
                'created_at' => $now, 'updated_at' => $now
            ],
        ]);
    }
}
