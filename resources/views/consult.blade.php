@extends('layout') 


@section('title', 'Consult')

@section('content')
    <h1>Esta es una consulta</h1>

    <form method="POST" action="{{ route('edit')}}">
        @csrf
        <label>
            Ingresa un ID:
            <input name="id" required>
        </label> <br> <br>
        <button type="submit" id="consult_mysql" class="btn btn-primary">Consulta mysql</button>
        <input type ='button' class="btn btn-warning"  value = 'Regresar' 
        id="back" onclick="location.href = '{{ route('form') }}'"/><br><br>

        @if(session('status'))
            {{ session('status') }}
        @endif
    </form>


@endsection