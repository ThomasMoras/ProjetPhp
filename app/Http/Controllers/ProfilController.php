<?php

namespace projetPhp\Http\Controllers;

use projetPhp\Domaine;
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
        $user = auth()->user();
        $domaines = Domaine::all();
        return view('profil',['utilisateur' => $user, 'domaines' => $domaines]);
    }

    public function create(Request $request)
    {
        $user = auth()->user();
        $domaine = new Domaine(['nom' => $request->input('domaine')]);
        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->description = $request->input('description');
        $user->departement = $request->input('departement');

        $domaine->user_id = $user->id;
        $user->domaine()->save($domaine);
//        $user->load('domaine');
        $user->save();
        return $user;
    }

}
