<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonCommandController extends Controller
{
    //
    public function index(){
        $pythonPath =  "../app/PythonCommands";
        
        exec('python ' . $pythonPath . '/graph1.py' , $out, $rtn);
        return $out;
    }
}
