<?php

namespace Database\Seeders;

use App\Models\Part;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parts = [
            ['name' => 'HD 1TB', 'price' => 30000, 'stock' => 10],
            ['name' => 'SSD 480GB', 'price' => 35000, 'stock' => 8],
            ['name' => 'Memória RAM 8GB', 'price' => 20000, 'stock' => 15],
            ['name' => 'Fonte ATX', 'price' => 25000, 'stock' => 5],
        ];

        foreach ($parts as $part) {
            Part::create($part);
        }
    }
}
