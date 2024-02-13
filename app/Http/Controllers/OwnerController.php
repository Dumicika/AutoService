<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function index(){
        $owners = Owner::all();
        return view('owners.index', ['owners' => $owners]);
    }
    public function create(){
        return view('owners.create');
    }
}
