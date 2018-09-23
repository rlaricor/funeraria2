<?php

namespace App\Http\Controllers;
use App\Contratista;
use App\Servicio;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
        public function index()
    {
        $items = Servicio::with('contratista')->paginate(15);
        return view('admin.servicios.index', compact('items'));
    }
}
