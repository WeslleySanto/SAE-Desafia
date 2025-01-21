@extends('layout')

@section('cabecalho')
    Editar Espetáculo '{{$show->name}}'
@endsection

@section('conteudo')

@include('shows.components.form', [
    'action' => route('atualizar_show', $show->id),
    'name' => $show->name, 
    'update' => true,
    'botao' => 'Editar'
])


@endsection