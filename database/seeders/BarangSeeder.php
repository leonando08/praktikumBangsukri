<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('y-m-d H:i:s');
        barang::insert([
            [
                'nama_barang' => 'Kursi Kantor',
                'merk' => 'Doodok',
                'tipe' => 'Kursi kantor air spring',
                'satuan' => 'Unit',
                'created_at'=> $now, 'updated_at'=> $now
            ],
            [
                'nama_barang' => 'Kipas Angin',
                'merk' => 'Semwing',
                'tipe' => 'Kipas angin dinding',
                'satuan' => 'Unit',
                'created_at'=> $now, 'updated_at'=> $now
            ],
        ]);
    }
}
