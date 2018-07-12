<?php

namespace projetPhp\Http\Controllers;

use Illuminate\Http\Request;
use projetPhp\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        $user = auth()->user();
        return view('home',['utilisateurs' => $users, 'current_user' => $user]);
    }
}
