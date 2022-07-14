<?php

namespace App\Http\Controllers;
use App\Models\Sector;

use Illuminate\Http\Request;

class SectorController extends Controller
{
    public function index()
    {
       
         $sectors = sector::get();
         return view('newsector',[ 
        'sectors' => $sectors ]);
    }


    public function create()
    {
        return view('newsector');
    }

    public function store(Request $request)
    {
       $dados = $request->except('_token');

       Sector::create($dados);
       
       return redirect('/newsector');
    }




}


