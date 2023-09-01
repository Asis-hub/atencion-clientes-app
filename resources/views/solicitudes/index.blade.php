@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row" >
    <div class="col-md-6 col-lg-4 mb-2">
        <a class="button" href="{{ route('solicitudes.form') }}">Registrar solicitud</a>
    </div>
</div>
@endsection