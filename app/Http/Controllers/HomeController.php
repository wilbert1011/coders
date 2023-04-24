<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //el metodo __invoke se utiliza cuando queremos que el controlador administre una sola ruta
    public function __invoke(){
        return view('home');
    }
}
