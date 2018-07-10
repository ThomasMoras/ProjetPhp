<?php

namespace projetPhp\Http\Controllers;

use Illuminate\Http\Request;

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

    protected function create(array $data)
    {
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'departement' => $data['departement'],
            'email' => $data['email'],
        ]);
    }
}
