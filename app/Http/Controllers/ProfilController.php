<?php

namespace projetPhp\Http\Controllers;

use projetPhp\Contrat;
use projetPhp\Domaine;
use Illuminate\Http\Request;

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
        $contrats = Contrat::all();
        return view('profil',['utilisateur' => $user, 'domaines' => $domaines, 'contrats' => $contrats]);
    }

    public function create(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->description = $request->input('description');
        $user->departement = $request->input('departement');

        $domaine = Domaine::find($request->input('domaine'));
        $user->domaine_id = $domaine->id;

        $contrat = Contrat::find($request->input('contrat'));
        $user->contrat_id = $contrat->id;

        $user->save();
        return redirect()->route('profil');
    }

}
