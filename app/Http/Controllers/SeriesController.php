<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function listarSeries(Request $req){
        $series = [
            'Grey\'s Anatomy',
            'Chicago Fire',
            'Lost',
            'Spartacus',
            'Bridgerton',
            'Agents of SHIELD'
        ];

        return view('series.index',
            ['series'=>$series]
        );      
    }

    


    public function create(Request $req){
        
        return view('series.create');           
    }

    public function store(Request $request)
    {
        $nome = $request->nome;        
        $serie = new Serie();
        $serie->nome = $nome;
        var_dump($serie->save());
        die();
    }
}