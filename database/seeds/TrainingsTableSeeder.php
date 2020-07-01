<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Faker\Provider\DateTime; // 追加

class TrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parts = [
            '胸',
            '背中',
            '肩',
            '腕',
            '脚',
        ];
    
        $contents = [
            'あ',
            'い',
            'う',
            'え',
            'お',
        ];
        for($i = 0 ; $i < 1000 ; $i++) {
    
            $training = new \App\Training();
            $training->training_date = 	DateTime::dateTimeThisYear();
            $training->part = Arr::random($parts);
            $training->content = Arr::random($contents);
            $training->weight = rand(1, 10)*10;
            $training->reps = rand(1, 10);
            $training->sets = rand(1, 5);
            $training->mark = rand(1, 2);
            $training->volume = $training->weight * $training->reps *$training->sets;
            $training->save();
    
        }
    }
}
