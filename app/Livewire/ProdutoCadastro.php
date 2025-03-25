<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Produto;
use Livewire\WithFileUploads; // Para upload de arquivos


class ProdutoCadastro extends Component
{

    use WithFileUploads; // Usar a trait para upload de imagens

    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem;

    
    protected $rules = [
        'nome' => 'required|min:3',
        'ingredientes' => 'required',
        'valor' => 'required|numeric',
        'imagem' => 'nullable|image|max:1024', // Máximo 1MB
    ];

    public function salvar()
    {
        $this->validate();

        $caminhoImagem = $this->imagem ? $this->imagem->store('produtos', 'public') : null;

        ProdutoCadastro::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $caminhoImagem,
        ]);

        session()->flash('message', 'Produto cadastrado com sucesso!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.produto-cadastro');
    }
}

