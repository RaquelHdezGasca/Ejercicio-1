
@extends('layout') 

@section('title', 'Home')

@section('content')
    <h1>@lang('Este es el Home')</h1>
    @forelse($Prueba as $PruebaItem)
        <li>{{ $PruebaItem->name}}</li>
        
    @empty
        <li>No hay pruebas</li>
    @endforelse
@endsection