<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
     //
    public function sobreNos()
    {
        return view('sobre-nos');
    }

    public function contato()
    {
        return view('contato');
    }

    public function enviarContato(Request $request)
    {
        $dados = $request->all();
        return view('contato', ['dados' => $dados]);
    }
}
