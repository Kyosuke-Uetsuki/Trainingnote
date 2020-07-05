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
            $trainings = $user->trainings()->orderBy('training_date', 'desc')->paginate(100);
            $favorites = $trainings->where("mark",2)->unique("content");
            
            $data = [
                "user" => $user,
                "trainings" => $trainings,
                "favorites" => $favorites,
            ];
            return view("trainings.index", $data);
        }else{
            return view("welcome");
        }
        
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
        
        $request->user()->trainings()->create([
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
            
            if (\Auth::id() === $training->user_id) {
            $training->delete();
        }
    
            return back();
        }
    }
}