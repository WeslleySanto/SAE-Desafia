@extends('layout')

@section('cabecalho')
Espetáculos
@endsection

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<a href="{{ route('form_criar_show')}}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($shows as $show)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{$show->name}}
        <span class="d-flex">
            <a href="{{route('form_editar', $show->id)}}" class="btn btn-primary btn-sm">
                <button class="btn btn-info">E</button>
            </a>
            <form method="post" action="{{route('deletar_show', $show->id)}}" onsubmit="return confirm('Tem certeza?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </form>
        </span>
    </li>
    @endforeach
</ul>
@endsection