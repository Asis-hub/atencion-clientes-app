@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="{{ asset('/css/button_hover.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4 mb-2">
        <a class="button" href="{{ route('clientes.form') }}">Registrar cliente
        <img src="/images/register.png" alt="Cliente" class="menu-icono">
        </a>
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
                        <a href="{{ route('clientes.edit', ['id' => $cliente->getId()]) }}" class="btn bg-secondary text-white">Editar</a>
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
