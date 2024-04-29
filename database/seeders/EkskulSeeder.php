<?php

namespace Database\Seeders;

use App\Models\Ekstrakulikuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ekstrakulikuler::create([
            'name' => 'Voli',
            'Alamat' => 'Gedung B UNH',
            'bidang' => 'olahraga'
        ]);
    }
}
