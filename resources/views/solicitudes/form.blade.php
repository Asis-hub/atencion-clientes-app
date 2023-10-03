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
                Registrar solicitud
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <ul class="alert alert-danger list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form method="POST" action="{{ route('solicitudes.store') }}" onsubmit="return reloadPage(event)">
                    @csrf
                    <div class="form-group">
                        <label for="cliente_id">Cliente:</label>
                        <select name="cliente_id" class="form-control">
                            <option value="">Seleccionar un cliente</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
                                    {{ $cliente->nombre." ".$cliente->primer_apellido." ".$cliente->segundo_apellido }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Solicitud de atención:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="solicitud_atencion" value="{{ old('solicitud_atencion') }}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-form-label">Observaciones:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input name="observaciones" value="{{ old('observaciones') }}" type="text" class="form-control">
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