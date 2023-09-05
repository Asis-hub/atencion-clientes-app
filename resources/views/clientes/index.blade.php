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
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData['clientes'] as $cliente)
                <tr>
                    <td>{{ $cliente->getNombre() }}</td>
                    <td>{{ $cliente->getPrimerApellido() }}</td>
                    <td>{{ $cliente->getSegundoApellido() }}</td>
                    <td>
                        <a href="{{ route('clientes.show', ['id' => $cliente->getId()]) }}" class="btn bg-primary text-white">Ver</a>
                        <!-- Add other actions buttons as needed -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
