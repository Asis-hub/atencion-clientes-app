<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Solicitud;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        // Obtiene todos los clientes con la suma de todas sus solicitudes
        $clientes = Cliente::with(['solicitudes' => function ($query) {
            $query->select('cliente_id', DB::raw('COUNT(*) as total_solicitudes'))
                ->groupBy('cliente_id');
        }])->get();
    
        $viewData = [
            "title" => "A Customer Support App - Clientes",
            "subtitle" => "Lista de clientes",
            "clientes" => $clientes,
        ];
    
        return view('clientes.index')->with("viewData", $viewData);
    }
    public function form()
    {
        $viewData = [];
        $viewData["title"] = "A Customer Support App - Clientes";
        $viewData["subtitle"] = "Registrar cliente";
        return view('clientes.form')->with("viewData", $viewData);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'primer_apellido' => ['required', 'string', 'max:255'],
            'segundo_apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255']
        ]);

        $cliente = new Cliente();
        $cliente->nombre = $validatedData['nombre'];
        $cliente->primer_apellido = $validatedData['primer_apellido'];
        $cliente->segundo_apellido = $validatedData['segundo_apellido'];
        $cliente->email = $validatedData['email'];
        $cliente->direccion = $validatedData['direccion'];
        $cliente->telefono = $validatedData['telefono'];
        $cliente->save();

        return response()->json(['message' => 'Data stored successfully']);
    }
    public function show($id)
{
    $cliente = Cliente::findOrFail($id);
    $solicitudes = $cliente->solicitudes;

    $viewData = [
        "title" => "Detalles de Cliente - " . $cliente->getId(),
        "subtitle" => "Detalles",
        "cliente" => $cliente,
    ];

    return view('clientes.show', compact('solicitudes'))->with("viewData", $viewData);
}
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'primer_apellido' => ['required', 'string', 'max:255'],
            'segundo_apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255']
        ]);
    
        $cliente = Cliente::findOrFail($id);
        $cliente->setNombre($request->input('nombre'));
        $cliente->setPrimerApellido($request->input('primer_apellido'));
        $cliente->setSegundoApellido($request->input('segundo_apellido'));
        $cliente->setEmail($request->input('email'));
        $cliente->setDireccion($request->input('direccion'));
        $cliente->setTelefono($request->input('telefono'));
        $cliente->save();

        $viewData = [];
        $cliente = Cliente::findOrFail($id);
        $viewData["title"] = "Detalles de Cliente".$cliente->getId().$cliente->getNombre().
        $cliente->getPrimerApellido().$cliente->getSegundoApellido();
        $viewData["subtitle"] = "Detalles";
        $viewData["cliente"] = $cliente;
        return view('clientes.show')->with("viewData", $viewData);
    }
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);

        $viewData = [];
        $viewData["title"] = "Editar cliente ".$cliente->getId().$cliente->getNombre().$cliente->getPrimerApellido().$cliente->getSegundoApellido();
        $viewData["subtitle"] = "Editar ".$id;
        $viewData["cliente"] = $cliente;

        return view('clientes.edit')->with("viewData", $viewData);
    }


}
