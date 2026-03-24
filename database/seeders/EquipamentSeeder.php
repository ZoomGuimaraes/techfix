<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipment::create([
            'person_id' => 1,
            'type' => 'Notebook',
            'brand' => 'Dell',
            'model' => 'Inspiron',
            'serial_number' => 'ABC123',
        ]);
    }
}
