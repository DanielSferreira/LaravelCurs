<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlternativoController extends Controller
{
    /**
    * @return \Illuminate\Http\Response
    */
    public function index() {
        return "View('Home/index.php');";
    }
}
