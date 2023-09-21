@extends('base')

@section('content')

<h3><a href="{{route('forms.create')}}">Criar Formulario</a></h3>
    
<h2>Formularios existentes: </h2>

<div class="container">
    <ul>
        @foreach ($forms as $form)
            <li>{{$form->id}} | {{ $form->motivo ?? 'Check-up' }} | <a href="{{route('forms.edit', ['form'=> $form->id])}}">Edit</a> | <a href="{{ route('forms.show', ['form' => $form->id]) }}">Show</a></li>
        @endforeach
    </ul>
</div>

@endsection