@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    Detalles de cliente {{ $viewData['cliente']->getId() }}
                    {{ $viewData['cliente']->getNombre() }}
                    {{ $viewData['cliente']->getPrimerApellido() }}
                    {{ $viewData['cliente']->getSegundoApellido() }}
                </h5>
                <div class="row">
                    <div class="col">
                        <strong>Nombre:</strong> {{ $viewData['cliente']->getNombre() }}
                    </div>
                    <div class="col">
                        <strong>Primer Apellido:</strong> {{ $viewData['cliente']->getPrimerApellido() }}
                    </div>
                    <div class="col">
                        <strong>Segundo Apellido:</strong> {{ $viewData['cliente']->getSegundoApellido() }}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <strong>Email:</strong> {{ $viewData['cliente']->getEmail() }}
                    </div>
                    <div class="col">
                        <strong>Dirección:</strong> {{ $viewData['cliente']->getDireccion() }}
                    </div>
                    <div class="col">
                        <strong>Teléfono:</strong> {{ $viewData['cliente']->getTelefono() }}
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <a href="{{ route('clientes.edit', $viewData['cliente']->getId()) }}" class="btn btn-primary">Editar cliente</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection