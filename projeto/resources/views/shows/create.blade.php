@extends('layout')

@section('cabecalho')
    Adicionar Espetáculo
@endsection

@section('conteudo')


<form action={{ route('criar_show') }} method="post">
    @csrf
    <div class="row mb-3">
        <div class="col-8">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" 
                autofocus
                class="form-control" 
                name="name" id="name"
                value="{{ old('name') }}">
        </div>
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>


@endsection