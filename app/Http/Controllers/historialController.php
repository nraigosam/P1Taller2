<?php

namespace App\Http\Controllers;


use App\Models\Historial;
use Illuminate\Http\Request;


class historialController extends Controller
{
    public function index()
    {
        $historial = Historial::get();
        return view('historial', compact('historial'));
    }

    public function show(Historial $hist)
    {
        return view('historial', compact('hist'));
    }
}
