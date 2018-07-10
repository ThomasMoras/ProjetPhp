<?php

namespace projetPhp\Http\Controllers;

use Illuminate\Http\Request;
use projetPhp\Profil;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profil');
    }

    public function create(Request $request)
    {
        return Profil::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'departement' => $request->input('departement'),
            'email' => $request->input('email'),
        ]);
    }

}
