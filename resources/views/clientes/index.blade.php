@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row" >
    <div class="col-md-6 col-lg-4 mb-2">
        <a class="button" href="{{ route('clientes.form') }}">Registrar cliente</a>
    </div>
</div>
<!--
<div class="row">
            @foreach ($viewData['clientes']->reverse() as $cliente)
                <div class="col-md-4 col-lg-3 mb-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="{{ route('clientes.show', ['id' => $cliente->getId()]) }}"
                                class="btn bg-primary text-white">Cliente:
                                {{ $cliente->getNombre() }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
</div>
-->
@endsection