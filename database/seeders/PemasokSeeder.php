<?php

namespace Database\Seeders;

use App\Models\Pemasok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemasokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('y-m-d H:i:s');
        pemasok::insert([
            [
                'nama_pemasok' => 'CV Cipta Maju Mandiri',
                'nama_kontak' => 'Mas Abdur',
                'nomor_hp' => '08123098748',
                'alamat' => 'Kediri',
                'created_at'=> $now, 'updated_at'=> $now
            ],
            [
                'nama_pemasok' => 'PT Jaya Dhika Lestari',
                'nama_kontak' => 'Mba Fitri',
                'nomor_hp' => '0815647839',
                'alamat' => 'Malang',
                'created_at'=> $now, 'updated_at'=> $now
            ],
        ]);
    }
}
