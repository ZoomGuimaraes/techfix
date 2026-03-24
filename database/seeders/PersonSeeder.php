<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::create([
            'name' => 'João Silva',
            // 'cpf_cnpj' => '12345678900',
            'type' => 'natural',
            'phone' => '47999999999',
            'address' => 'Rua das Flores',
            'number' => '123',
            'complement' => 'Apto 101',
            'city' => 'Jaraguá do Sul',
            'state' => 'SC',
        ]);

        Person::create([
            'name' => 'Empresa Tech LTDA',
            // 'cpf_cnpj' => '12345678000199',
            'type' => 'legal',
            'phone' => '4733333333',
            'address' => 'Av. Brasil',
            'number' => '456',
            'complement' => 'Sala 100',
            'city' => 'Joinville',
            'state' => 'SC',
        ]);
    }
}