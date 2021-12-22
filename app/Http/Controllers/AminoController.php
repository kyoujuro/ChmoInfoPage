<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AminoController extends Controller
{
    //
    public function index(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required| string',
            'age' => 'requires | integer | between:0,150',
        ]);
        if(session('mode') =='amino'){
        return view('amino');
        }
        else {
            redirect(500);
        }
    }
}
