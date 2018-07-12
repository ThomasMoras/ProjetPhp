<?php

namespace projetPhp\Http\Controllers;

use Carbon\Carbon;
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
        $domaines = Domaine::where([['id', '<>',  $user->domaine_id],['id', '<>',  1]])
            ->get();
        $contrats = Contrat::where([['id', '<>',  $user->contrat_id],['id', '<>',  1]])
            ->get();
        return view('profil',['utilisateur' => $user, 'domaines' => $domaines, 'contrats' => $contrats]);
    }

    public function create(Request $request)
    {
        $user = auth()->user();

        if($request->input('image_file') != null) {
            $this->validate($request, [
                'image_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image_file->getClientOriginalExtension();
            $request->image_file->move(public_path('images'), $imageName);
            $user->image = $imageName;
        }

        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->description = $request->input('description');
        $user->departement = $request->input('departement');
        $user->email = $request->input('email');

        if($request->input('domaine') != null) {
            $domaine = Domaine::find($request->input('domaine'));
            $user->domaine_id = $domaine->id;
        }

        if($request->input('contrat') != null) {
            $contrat = Contrat::find($request->input('contrat'));
            $user->contrat_id = $contrat->id;
        }

        $user->save();
        return redirect()->route('profil');
    }

}
