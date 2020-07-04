<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Training;

class GraphsController extends Controller
{
    public function chest()
    {
        $data = [];
        if(\Auth::check()){
            
            $user = \Auth::user();
            $trainings = $user->trainings()->orderBy('training_date', 'desc')->paginate(100);
            
            $data = [
                "user" => $user,
                "trainings" => $trainings,
            ];
        
        return view("graphs.chest",$data);
        }
    }
    
    public function back()
    {
        $data = [];
        if(\Auth::check()){
            
            $user = \Auth::user();
            $trainings = $user->trainings()->orderBy('training_date', 'desc')->paginate(100);
            
            $data = [
                "user" => $user,
                "trainings" => $trainings,
            ];
        
        return view("graphs.back",$data);
        }
    }
    
    public function shoulder()
    {
        $data = [];
        if(\Auth::check()){
            
            $user = \Auth::user();
            $trainings = $user->trainings()->orderBy('training_date', 'desc')->paginate(100);
            
            $data = [
                "user" => $user,
                "trainings" => $trainings,
            ];
        
        return view("graphs.shoulder",$data);
        }
    }
    
    public function arm()
    {
        $data = [];
        if(\Auth::check()){
            
            $user = \Auth::user();
            $trainings = $user->trainings()->orderBy('training_date', 'desc')->paginate(100);
            
            $data = [
                "user" => $user,
                "trainings" => $trainings,
            ];
        
        return view("graphs.arm",$data);
        }
    }
    
    public function leg()
    {
        $data = [];
        if(\Auth::check()){
            
            $user = \Auth::user();
            $trainings = $user->trainings()->orderBy('training_date', 'desc')->paginate(100);
            
            $data = [
                "user" => $user,
                "trainings" => $trainings,
            ];
        
        return view("graphs.leg",$data);
        }
    }
    
    
}
