<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Training;

class GraphsController extends Controller
{
    public function index()
    {
        $data = [];
        if(\Auth::check()){
            
            $user = \Auth::user();
            $trainings = Training::orderBy('training_date', 'desc')->paginate(100);
            
            $data = [
                "user" => $user,
                "trainings" => $trainings,
            ];
        
        return view("graphs.index",$data);
        }
    }
}
