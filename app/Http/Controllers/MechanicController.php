<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;

class MechanicController extends Controller
{
    public function index()
    {
        // Afișarea tuturor mecanicilor
    }

    public function create()
    {
        // Afișarea formularului pentru crearea unui nou mecanic
    }

    public function store(Request $request)
    {
        // Salvarea unui nou mecanic în baza de date
    }

    public function show(Mechanic $mechanic)
    {
        // Afișarea detaliilor despre un mecanic specific
    }

    public function edit(Mechanic $mechanic)
    {
        // Afișarea formularului pentru editarea unui mecanic
    }

    public function update(Request $request, Mechanic $mechanic)
    {
        // Actualizarea detaliilor unui mecanic
    }

    public function destroy(Mechanic $mechanic)
    {
        // Ștergerea unui mecanic din baza de date
    }
}
