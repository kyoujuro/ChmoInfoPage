<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class StartController extends Controller
{
    //
    public function index(){
    $encrypted = Crypt::encryptString('Hello world.');
    session(['encrypted' =>$encrypted]);
   
    $decrypted = Crypt::decryptString($encrypted);
    
        return view('start')->with('decrypted', $decrypted);
    }
    
}
