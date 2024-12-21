<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ruang;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $now = date('Y-m-d H:i:s');
    Ruang::insert([
    [
    'nama_ruang' => 'Front office',
    'created_at' => $now, 'updated_at' => $now
    ],
    [
    'nama_ruang' => 'Marketing',
    'created_at' => $now, 'updated_at' => $now
    ],
    [
    'nama_ruang' => 'Finance',
    'created_at' => $now, 'updated_at' => $now
    ],
    ]);
    }
}