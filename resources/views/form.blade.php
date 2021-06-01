@extends('layout') 


@section('title', 'Form')

@section('content')
    <h1>Esta es una prueba</h1>
  
    <form method="POST" action="{{ route('store')}}">
        @csrf
       <label>
           Registra un nombre:
           <input name="name" required>
       </label> <br> <br>
       <label>
        Registra un apellido:
        <input name="lastname" required>
    </label>
    <br><br>
    <button type="submit" id="save" class="btn btn-primary">Guardar</button>
    <button type="reset" id= "reset" class="btn btn-primary">Limpiar</button>
    <script>
      $(function(){
        
        $('#save').click(function(){
          $('#continue').show();
          });
          $('#reset').click(function(){
            $('#continue').hide();
          });

      })
    </script>
    <input type ='button' class="btn btn-warning"  
    value = 'Continuar' id="continue" onclick="location.href = '{{ route('consult') }}'"/><br><br>

    @if(session('status'))
      {{ session('status') }}
    @endif


    
    </form><br> <br>
@endsection