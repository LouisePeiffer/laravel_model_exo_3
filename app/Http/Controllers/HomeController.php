<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $dataMembres = Membre::all();
        $membresHommes = Membre::where('genre','Homme')->get();
        $membresFemmes = Membre::where('genre','Femme')->get();
        $hommesAge = Membre::whereBetween('age', [18,24])->where('genre','homme')->get();
        $femmesAge = Membre::whereBetween('age', [18,24])->where('genre','femme')->get();
        $horsConditions = Membre::whereNotBetween('age', [18,24])->get();
        return view('home', compact('dataMembres', 'membresHommes','membresFemmes','hommesAge','horsConditions','femmesAge'));
    }
}
