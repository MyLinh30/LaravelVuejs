<?php

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;
class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Question ::class,1)->create()->each(function($question){
            $question->answers()->save(factory(Answer::class)->make());
        });
    }
}
