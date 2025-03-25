<!-- resources/views/produto-cadastro.blade.php -->
<div class="card shadow-lg p-4 bg-white rounded">
    <h2 class="mb-4">Cadastro de Produto</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="salvar">
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" wire:model="nome">
            @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Ingredientes</label>
            <textarea class="form-control" wire:model="ingredientes"></textarea>
            @error('ingredientes') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Valor (R$)</label>
            <input type="number" step="0.01" class="form-control" wire:model="valor">
            @error('valor') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Imagem do Produto</label>
            <input type="file" class="form-control" wire:model="imagem">
            @if ($imagem)
                <img src="{{ $imagem->temporaryUrl() }}" class="mt-2 img-thumbnail" width="100">
            @endif
            @error('imagem') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
