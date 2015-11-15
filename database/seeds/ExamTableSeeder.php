<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
 
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Model\Exam;

class ExamTableSeeder extends Seeder
{
    public function run()
    {
         DB::table('exams')->delete();
         $faker = Faker::create('ja_JP');
         for($i = 0; $i < 50; $i++) {
             Exam::create([
                 'title' => $faker->sentence()
                 ,'body' => $faker->paragraph()
                 ,'kai1' => $faker->sentence()
                 ,'kai2' => $faker->sentence()
                 ,'kai3' => $faker->sentence()
                 ,'kai4' => $faker->sentence()
                 ,'kai5' => $faker->sentence()
                 ,'answer' => $faker->numberBetween($min = 1, $max = 5)
                 ,'comment' => $faker->paragraph()
                 ,'category' => 1
                 ,'updated_at' => Carbon::today()
                 ,'created_at' => Carbon::today()
             ]);
         }
    }
}
