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
    <div class="card">
        <div class="card mb-4">
            <div class="card-header">
                Registrar cliente 
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <ul class="alert alert-danger list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form method="POST" action="{{ route('clientes.store') }}" onsubmit="return reloadPage(event)">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Nombre:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="nombre" value="{{ old('nombre') }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Primer apellido:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="primer_apellido" value="{{ old('primer_apellido') }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Segundo apellido:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="segundo_apellido" value="{{ old('segundo_apellido') }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Correo Electrónico:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="email" value="{{ old('email') }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Dirección:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="direccion" value="{{ old('direccion') }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Teléfono:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="telefono" value="{{ old('telefono') }}" type="text" class="form-control">
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