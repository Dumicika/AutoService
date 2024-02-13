<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        // Afișarea tuturor mașinilor
    }

    public function create()
    {
        // Afișarea formularului pentru crearea unei noi mașini
    }

    public function store(Request $request)
    {
        // Salvarea unei noi mașini în baza de date
    }

    public function show(Car $car)
    {
        // Afișarea detaliilor despre o mașină specifică
    }

    public function edit(Car $car)
    {
        // Afișarea formularului pentru editarea unei mașini
    }

    public function update(Request $request, Car $car)
    {
        // Actualizarea detaliilor unei mașini
    }

    public function destroy(Car $car)
    {
        // Ștergerea unei mașini din baza de date
    }
}
