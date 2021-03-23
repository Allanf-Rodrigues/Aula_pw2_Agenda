@extends('layouts.app')
@section('content')

<div class="container">
    <form id="frmpessoa" name="frmpessoa" action="{{ route('pessoa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="nome" class="form-control" id="nome" name="nome" placeholder="Informe o nome">
        </div>
    
        <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <input type="sobrenome" class="form-control" id="sobrenome"  name="sobrenome" placeholder="Informe o Sobrenome">
        </div>
    
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="telefone" class="form-control" id="telefone"  name="telefone" placeholder="Informe o Telefone">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
 </div>

@endsection
