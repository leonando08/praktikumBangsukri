<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('y-m-d H:i:s');
        karyawan::insert([
            [
                'nama_karyawan' => 'Rizky',
                'nomor_hp' => '08118901',
                'alamat' => 'Surabaya',
                'created_at'=> $now, 'updated_at'=> $now
            ],
            [
                'nama_karyawan' => 'Ahmad',
                'nomor_hp' => '089267940',
                'alamat' => 'Malang',
                'created_at'=> $now, 'updated_at'=> $now
            ],
        ]);
    }
}
