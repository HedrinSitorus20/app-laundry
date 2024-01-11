<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceType::insert([
            ['id' => 1, 'name' => 'Regular Service', 'description' => 'Layanan reguler dengan lama waktu pengerjaan 3 hari', 'cost' => 10000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Priority Service', 'description' => 'Layanan prioritas dengan waktu pengerjaan satu hari', 'cost' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Primary Service', 'description' => 'Layanan prioritas utam dengan waktu pengerjaan 6 jam', 'cost' => 30000, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
