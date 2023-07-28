@extends('template.base')

@section('content')

<div class="container">
    <h1>Ejemplo CRUD</h1>
    {{-- ayuda de laravel, con instrucción para acceder a client.index --}}
    <a href="{{ route('client.index') }}" class="btn btn-primary">Clientes</a>
    {{-- <button class="btn btn-primary">create</button> --}}
</div>
    
@endsection