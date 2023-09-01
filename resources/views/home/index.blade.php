@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    -->
    <link href="{{ asset('/css/button_hover.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<div class="row" >
        <div class="col-md-6 col-lg-4 mb-2">
            <a class="button" href="{{ route('clientes.index') }}">Clientes</a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <a class="button" href="{{ route('solicitudes.index') }}">Solicitudes</a>
        </div>
    </div>
@endsection