<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Training;

class TrainingsController extends Controller
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
        }
        
        return view("welcome", $data);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            "training_date" => "required|date",
            "part" => "required",
            "content" => "required|max:50",
            "weight" => "required|integer",
            "reps" => "required|integer",
            "sets" => "required|integer",
            "mark" => "required|integer",
        ]); 
        
        Training::create([
            "training_date" => $request->training_date,
            "part" => $request->part,
            "content" => $request->content,
            "weight" => $request->weight,
            "reps" => $request->reps,
            "sets" => $request->sets,
            "mark" => $request->mark,
            "volume" => $request->weight * $request->reps * $request->sets,
        ]);
        
        return back();
    }
    
    public function destroy($id)
    {
        if(\Auth::check()){
            
            $training = Training::findOrFail($id);
            
            $training->delete();
    
            return back();
        }
    }
}