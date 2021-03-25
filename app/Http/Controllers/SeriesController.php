<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {
        $series = [
            'Serie 1',
            'Serie 2',
            'Serie 3'
        ];

        
        return view( 'series.index', compact('series'));
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {
        $nome =  $request->nome;
        $serie = new Serie();
        $serie->nome = $nome;
        var_dump($serie->Save());
    }
}
