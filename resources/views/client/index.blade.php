@extends('template.base');

@section('content')

<div class="container">
    <h1>Listado clientes</h1>
    {{-- ayuda de laravel, con instrucción para acceder a client.index --}}
    <a href="{{ route('client.create') }}" class="btn btn-primary">Create Client</a>
    
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Nombre</th>
            <th>Nombre</th>
        </thead>
        <tbody>
            <tr>
                <td>FelinoHost</td>
                <td>0.0</td>
                <td>Editar - Eliminar</td>
            </tr>
        </tbody>
    </table>
</div>
    
@endsection