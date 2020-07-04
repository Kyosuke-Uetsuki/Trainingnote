<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Training;

class TrainingGraphController extends Controller
{
    public function index() {
        
        $user = \Auth::user();
        return $user->trainings;
        
    }
}
