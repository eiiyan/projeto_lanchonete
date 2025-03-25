<?php

namespace Database\Seeders;

use App\Livewire\ProdutoCadastro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    

        ProdutoCadastro::create([
            'nome' => 'Pizza de Calabresa',
            'ingredientes' => 'Molho de tomate, queijo mussarela, calabresa, cebola',
            'valor' => 39.90,
            'imagem' => 'pizzas/calabresa.jpg'
        ]);

        ProdutoCadastro::create([
            'nome' => 'Hambúrguer Artesanal',
            'ingredientes' => 'Pão brioche, carne 180g, queijo cheddar, alface, tomate, maionese especial',
            'valor' => 25.00,
            'imagem' => 'hamburguer/artesanal.jpg'
        ]);
    }
}

    
