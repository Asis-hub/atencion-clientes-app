@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
    <div class="card">
        <div class="card mb-4">
            <div class="card-header">
                Editar cliente {{ $viewData['cliente']->getId() }}
                    {{ $viewData['cliente']->getNombre() }}
                    {{ $viewData['cliente']->getPrimerApellido() }}
                    {{ $viewData['cliente']->getSegundoApellido() }}
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <ul class="alert alert-danger list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form method="POST" action="{{ route('clientes.update', ['id'=> $viewData['cliente']->getId()]) }}" onsubmit="return reloadPage(event)">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Nombre:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="nombre" value="{{ $viewData['cliente']->getNombre() }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Primer apellido:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="primer_apellido" value="{{ $viewData['cliente']->getPrimerApellido() }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Segundo apellido:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="segundo_apellido" value="{{ $viewData['cliente']->getSegundoApellido() }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Correo Electrónico:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="email" value="{{ $viewData['cliente']->getEmail() }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Dirección:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="direccion" value="{{ $viewData['cliente']->getDireccion() }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Teléfono:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="telefono" value="{{ $viewData['cliente']->getTelefono() }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Solicitud de atención:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="solicitud_atencion" value="{{ $viewData['cliente']->getSolicitudAtencion() }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Observaciones:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="observaciones" value="{{ $viewData['cliente']->getObservaciones() }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection