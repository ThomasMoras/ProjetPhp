<?php

namespace projetPhp\Http\Controllers;

use projetPhp\Contrat;
use projetPhp\Domaine;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $domaines = Domaine::all();
        $contrats = Contrat::all();
        return view('search',['domaines' => $domaines, 'contrats' => $contrats]);
    }

}
