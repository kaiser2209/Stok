<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function listar()
    {
        return view('admin.categorias.listar');
    }
}
