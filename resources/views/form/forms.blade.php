@extends('base')

@section('content')

<h3><a href="{{route('forms.create')}}">Criar Formulario</a></h3>
    
<h2>Formularios existentes: </h2>

<div class="container">
    <ul>
        @foreach ($forms as $form)
            <li>{{$form->id}} | {{ $form->motivo}}</li>
        @endforeach
    </ul>
</div>

@endsection