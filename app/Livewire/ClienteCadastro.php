<?php

namespace App\Livewire;

use App\Models\CadastroCliente;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;


class ClienteCadastro extends Component
{
    public $nome, $endereco, $telefone, $cpf, $email, $senha;



    protected $rules = [
        'nome' => 'required|min:3',
        'endereco' => 'required',
        'telefone' => 'required',
        'cpf' => 'required|unique:clientes,cpf',
        'email' => 'required|email|unique:clientes,email',
        'senha' => 'required|min:6',
    ];

    protected $table = 'cadastro_clientes';

    public function salvar()
    {
        $this->validate();

        CadastroCliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => Hash::make($this->senha),
        ]);

        session()->flash('message', 'Cadastro realizado com sucesso!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.cliente-cadastro');
    }
}





