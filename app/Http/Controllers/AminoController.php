<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AminoController extends Controller
{
    //
    public function index(){
        if(session('mode') =='amino'){
        return view('amino');
        }
        else {
            redirect(500);
        }
    }
}
