@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <a class="button" href="{{ route('clientes.form') }}">Registrar cliente</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Email</th>
                    <th>Número de solicitudes</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData['clientes'] as $cliente)
                <tr>
                    <td>{{ $cliente->getNombre() }} {{ $cliente->getPrimerApellido() }} {{ $cliente->getSegundoApellido() }}</td>
                    <td>{{ $cliente->getEmail() }}</td>
                    <td>{{ $cliente->solicitudes->first()->total_solicitudes ?? 0 }}</td>
                    <td>
                        <a href="{{ route('clientes.show', ['id' => $cliente->getId()]) }}" class="btn bg-primary text-white">Ver</a>
                        <a href="{{ route('clientes.edit', ['id' => $cliente->getId()]) }}" class="btn bg-primary text-white">Editar</a>
                        <form method="POST" action="{{ route('clientes.destroy', ['id' => $cliente->getId()]) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn bg-danger text-white" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
