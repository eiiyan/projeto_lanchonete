<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ClienteCadastro extends Component
{

    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;
    

    protected $rules = [
        'nome' => 'required|string|max:255',
        'endereco' => 'required|string|max:255',
        'telefone' => 'required|string|max:20',
        'cpf' => 'required|unique:clientes,cpf|cpf',
        'email' => 'required|email|unique:clientes,email',
        'senha' => 'required|min:8|confirmed',
    ];

    public function render()
    {
        return view('livewire.cliente-cadastro');
    }

    public function cadastrar()
    {
        $this->validate();

        // Criar o cliente no banco de dados
        ClienteCadastro::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => Hash::make($this->senha),
        ]);

        
        // Limpar os campos após o cadastro
        session()->flash('message', 'Cliente cadastrado com sucesso!');
        $this->reset();
    }

}
