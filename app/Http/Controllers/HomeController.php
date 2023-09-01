<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "A Customer Service App";
return view('home.index')->with("viewData", $viewData);
}
public function about()
{
$data1 = "About us - Customer Service App";
$data2 = "About us";
$description = "This is an about page for the Customer Service App...";
$author = "Developed in Laravel 9";
return view('home.about')->with("title", $data1)
->with("subtitle", $data2)
->with("description", $description)
->with("author", $author);
}
}