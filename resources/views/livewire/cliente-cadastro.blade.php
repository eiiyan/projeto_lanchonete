<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="cadastrar">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" wire:model="nome" class="form-control" required>
            @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" wire:model="endereco" class="form-control" required>
            @error('endereco') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" wire:model="telefone" class="form-control" required>
            @error('telefone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" wire:model="cpf" class="form-control" required>
            @error('cpf') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" wire:model="email" class="form-control" required>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" wire:model="senha" class="form-control" required>
            @error('senha') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="senha_confirmation">Confirmar Senha:</label>
            <input type="password" id="senha_confirmation" wire:model="senha_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

