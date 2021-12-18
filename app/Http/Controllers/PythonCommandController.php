<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonCommandController extends Controller
{
    //
    public function index(){
        $pythonPath =  "../app/PythonCommands";
        
        exec('python ' . $pythonPath . '/iris.py' , $out, $rtn);
        logger($out);
        return $out;
    }
}
