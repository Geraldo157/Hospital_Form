@extends('base')

@section('content')

<h2>Editar Formulario</h2>

@if(session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{route('forms.update', ['form'=>$form->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" placeholder="Nome: ">
    <input type="text" name="email" placeholder="Email: ">
    <input type="text" name="cpf" placeholder="CPF: ">
    <input type="text" name="motivo" placeholder="Motivo: ">
    <input type="text" name="comorbidade" placeholder="Comorbidades: ">
    <input type="text" name="alergias" placeholder="Alergias: ">
    <input type="text" name="nascimento" placeholder="Data de Nascimento: ">
    <input type="text" name="telefone" placeholder="Telefone: ">
    <input type="text" name="endereco" placeholder="Endereço: ">
    <button type="submit">Atualizar</button>
</form>

@endsection