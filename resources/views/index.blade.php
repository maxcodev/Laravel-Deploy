@extends('layouts.web')

@section('content')
    <div class="text-center">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Bienvenido a mi Portafolio</h1>        
    </div>
    <div class="text-center">
        <a href="/login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
            Iniciar Sesión
          </a>
          o
          <a href="/register" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Registrarse
          </a>    
    </div>
@endsection