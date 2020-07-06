<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Training;

class MarkController extends Controller
{
    public function update(Request $request, $id)
    {
        if(\Auth::check()){
            
            $training = Training::findOrFail($id);
            $training->mark = 2;
            
        }
        return back();
    }
}
