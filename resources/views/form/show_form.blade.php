@extends('base')

@section('content')

<h2>Usuario - {{ $form->name }}</h2>
<h3>{{$form->motivo}}</h3>
<h3>{{$form->cpf}}</h3>
<h3>{{$form->nascimento}}</h3>
<h3>{{$form->email}}</h3>
<h3>{{$form->comorbidade}}</h3>
<h3>{{$form->alergias}}</h3>
<h3>{{$form->telefone}}</h3>
<h3>{{$form->endereco}}</h3>

<form action="{{ route('forms.destroy', ['form' => $form->id]) }}" method="post">
@csrf
<input type="hidden" name="_method" value="DELETE" />
<button type="submit">Delete</button>

</form>


@endsection