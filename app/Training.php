<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = ["part", "content", "weight", "reps", "sets", "training_date","mark","volume"];
    
    
    public function user()
    {
        return $this->belongTto(User::class);
    }
}
