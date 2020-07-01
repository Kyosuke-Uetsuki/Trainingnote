<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = ["part", "content", "weight", "reps", "sets", "training_date","mark","volume"];

}
