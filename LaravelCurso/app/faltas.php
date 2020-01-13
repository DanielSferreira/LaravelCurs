<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class faltas extends Model {
    
    public function pegaFaltas($codigo){ 
        return $pegaFaltas = DB::select('select * from faltosos');//$dbh->prepare($sql);
    }
}
