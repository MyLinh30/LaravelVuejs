<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
//use Faker\Generator as Faker;
// use App\Models\Exam;
// use App\Models\Question;
// use App\Models\Answer;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        factory(User::class,500)->create();
       //dd($faker);
       //echo $faker->email ."\n";
       //echo $faker->name ."\n";
       //echo $faker->phoneNumber ."\n";
       //echo $faker->url ."\n";

    //     Exam::insert([['name'=>'Test one'],['name'=>'Test two'],['name'=>'Test three']]);
    //     Question::insert([
    //         ['content'=>'Question 2'],
    //         ['content'=>'Question 3'],
    //         ['content'=>'Question 4'],
    //         ['content'=>'Question 5']]);
    //     // $question =Question::all();
    //     // dd($question);
    //     Answer :: insert([
    //                         ['question_id'=>1,'content'=>'Answer 1','correct'=>false],
    //                         ['question_id'=>1,'content'=>'Answer 2','correct'=>false],
    //                         ['question_id'=>1,'content'=>'Answer 3','correct'=>true],
    //                         ['question_id'=>1,'content'=>'Answer 4','correct'=>false],

    //                         ['question_id'=>2,'content'=>'Answer 2.1','correct'=>false],
    //                         ['question_id'=>2,'content'=>'Answer 2.2','correct'=>false],
    //                         ['question_id'=>2,'content'=>'Answer 2.3','correct'=>true],
    //                         ['question_id'=>2,'content'=>'Answer 2.4','correct'=>false],

    //                         ['question_id'=>3,'content'=>'Answer 3.1','correct'=>false],
    //                         ['question_id'=>3,'content'=>'Answer 3.2','correct'=>false],
    //                         ['question_id'=>3,'content'=>'Answer 3.3','correct'=>true],
    //                         ['question_id'=>3,'content'=>'Answer 3.4','correct'=>false]]);


    //     //$users= DB::table('users')->get();
    //     //$uer =User::first();
    //     //$users =User ::get();
    //    // $users= DB::table('users')->first();
    //     //dd($users);
    }
}
