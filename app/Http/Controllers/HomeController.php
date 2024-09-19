<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  index()
    {
        return view("Home.index") ;
    }
    public function  showForm()
    {
        return view("Home.contact") ;
    }
    public function  submitForm(\Symfony\Component\HttpFoundation\Request $request)
    {
$name = $request->input('nom') ;
return "Submitted Name : ". $name ;
    }
}
