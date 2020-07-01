<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    
    public function show($id)
    {
        
        $user = User::findOrFail($id);

        return view('users.show', [
            'user' => $user,
        ]);
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
    
            return back();
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
