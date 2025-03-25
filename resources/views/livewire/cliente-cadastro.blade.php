

<div class="card shadow-lg p-4 bg-white rounded">
    <h2 class="mb-4">Cadastro de Cliente</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="salvar">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" class="form-control" wire:model="nome">
            @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" id="endereco" class="form-control" wire:model="endereco">
            @error('endereco') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" id="telefone" class="form-control" wire:model="telefone">
            @error('telefone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" id="cpf" class="form-control" wire:model="cpf">
            @error('cpf') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" class="form-control" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" id="senha" class="form-control" wire:model="senha">
            @error('senha') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>


   
