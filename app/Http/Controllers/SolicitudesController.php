<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "A Customer Support App - Solicitudes";
        $viewData["subtitle"] = "Lista de solicitudes";
        //$viewData["solicituds"] = Solicitud::all();
        return view('solicitudes.index')->with("viewData", $viewData);
    }

    public function form()
    {
        $viewData = [];
        $viewData["title"] = "A Customer Support App - Solicitudes";
        $viewData["subtitle"] = "Registrar solicitud";
        return view('solicitudes.form')->with("viewData", $viewData);
    }
}
