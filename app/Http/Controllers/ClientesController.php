<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "A Customer Support App - Clientes";
        $viewData["subtitle"] = "Lista de clientes";
        //$viewData["clients"] = Cliente::all();
        return view('clientes.index')->with("viewData", $viewData);
    }
    public function form()
    {
        $viewData = [];
        $viewData["title"] = "A Customer Support App - Clientes";
        $viewData["subtitle"] = "Registrar cliente";
        return view('clientes.form')->with("viewData", $viewData);
    }
}
