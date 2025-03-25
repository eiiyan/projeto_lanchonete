<?php

namespace Database\Seeders;

use App\Livewire\ClienteCadastro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            ClienteCadastro::create([
                'nome' => 'Yan Gabriel',
                'endereco' => 'Rua A, 123',
                'telefone' => '1234567',
                'cpf' => '12345',
                'email' => 'yan@gmail.com',
                'senha' => Hash::make('123'),
            ]);
        }
    }


