<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Listagem extends Controller
{
    //
    public function index() {
        return View('Home.index');
        
    }
    /**
     * @
     * 
     */
    public function getSobre($mensagem) {
        $Mensagem = $mensagem;
        return View('Home.sobre',compact('Mensagem'));

    }
}
