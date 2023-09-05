<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;
use App\Models\Cliente;


class SolicitudesController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "A Customer Support App - Solicitudes";
        $viewData["subtitle"] = "Lista de solicitudes";
        $viewData["solicituds"] = Solicitud::all();
        return view('solicitudes.index')->with("viewData", $viewData);
    }

    public function form()
    {
        $viewData = [];
        $viewData["title"] = "A Customer Support App - Solicitudes";
        $viewData["subtitle"] = "Registrar solicitud";
        $clientes = Cliente::all();
        return view('solicitudes.form', compact('clientes'))->with("viewData", $viewData);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'solicitud_atencion' => ['required', 'string', 'max:255'],
            'observaciones' => ['required', 'string', 'max:255'],
            'cliente_id' => ['required', 'numeric']
        ]);

        $solicitud = new Solicitud();
        $solicitud->solicitud_atencion = $validatedData['solicitud_atencion'];
        $solicitud->observaciones = $validatedData['observaciones'];
        $solicitud->cliente_id = $validatedData['cliente_id'];
        $solicitud->save();

        return response()->json(['message' => 'Data stored successfully']);
    }
}
