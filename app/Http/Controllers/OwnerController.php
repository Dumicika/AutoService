<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{

    public function index()
    {
        // Afișarea tuturor proprietarilor
    }

    public function create()
    {
        // Afișarea formularului pentru crearea unui nou proprietar
    }

    public function store(Request $request)
    {
        // Salvarea unui nou proprietar în baza de date
    }

    public function show(Owner $owner)
    {
        // Afișarea detaliilor despre un proprietar specific
    }

    public function edit(Owner $owner)
    {
        // Afișarea formularului pentru editarea unui proprietar
    }

    public function update(Request $request, Owner $owner)
    {
        // Actualizarea detaliilor unui proprietar
    }

    public function destroy(Owner $owner)
    {
        // Ștergerea unui proprietar din baza de date
    }

    // public function index(){
    //     $owners = Owner::all();
    //     return view('owners.index', ['owners' => $owners]);
    // }
    // public function create(){
    //     return view('owners.create');
    // }
}
