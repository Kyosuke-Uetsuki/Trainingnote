<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    
    public function show($id)
    {
        
        $user = User::findOrFail($id);
        $trainings = $user->trainings()->orderBy('training_date', 'desc')->paginate(100);
        $favorites = $trainings->where("mark",2)->unique("content");
        
        $data = [
                "user" => $user,
                "trainings" => $trainings,
                "favorites" => $favorites,
            ];
            
        return view('users.show', $data);
    }
    
    public function edit($id)
    {
        if(\Auth::check()){
            
            $user = User::findOrFail($id);
            
            return view('users.edit', [
                'user' => $user,
            ]);
        }
    }
    
    public function update(Request $request, $id)
    {
        if(\Auth::check()){
            
            $this->validate($request, [
                "name" => "required|max:255",
                "height" => "integer",
                "body_weight" => "integer",
                "fat_percentage" => "integer"
                ]);
            
                
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->height = $request->height;
            $user->body_weight= $request->body_weight;
            $user->fat_percentage = $request->fat_percentage;
            $user->save();
    
            return redirect('/');
        }
    }
    
    public function destroy($id)
    {
        if(\Auth::check()){
            
            $user = User::findOrFail($id);
            
            $user->delete();
    
            return redirect('/');
        }
    }
}
