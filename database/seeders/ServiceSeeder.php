<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['name' => 'Formatação', 'price' => 10000],
            ['name' => 'Limpeza interna', 'price' => 8000],
            ['name' => 'Instalação de Windows', 'price' => 12000],
            ['name' => 'Troca de HD', 'price' => 15000],
            ['name' => 'Troca de memória RAM', 'price' => 9000],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
