<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Una aplicación de atención al cliente";
        return view('home.index')->with("viewData", $viewData);
    }
    public function about()
    {
        $data1 = "Acerca de - App de atención al cliente";
        $data2 = "Acerca de";
        $description = "Esta es una página sobre la aplicación de atención al cliente...";
        $author = "Desarrollado en Laravel 9";
        return view('home.about')->with("title", $data1)
        ->with("subtitle", $data2)
        ->with("description", $description)
        ->with("author", $author);
    }
}
