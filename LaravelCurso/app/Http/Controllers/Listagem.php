<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Listagem extends Controller {
    private function dbcontext($sql) {
        return DB::select($sql);
    }
    public function faltas() {
        $sql = ('select * from faltosos');
        return response()->json($this->dbcontext($sql));
    }
    public function apostilas() {
        $sql = ("select * from modulos where Curso = 'Operador'");
        return response()->json($this->dbcontext($sql));
    }
    public function apostailas() {
        $sql = ('select * from modulos');
        return response()->json($this->dbcontext($sql));
    }
    
    public function getSobre($mensagem) {
        $Mensagem = $mensagem;
        return View('Home.sobre',compact('Mensagem'));

    }
}
