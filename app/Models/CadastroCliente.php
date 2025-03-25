<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroCliente extends Model
{

    protected $table = 'cadastro_clientes'; 
    
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
        'cpf',
        'email',
        'senh'
    ];
}
