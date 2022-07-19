<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class coursestudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=1;$i<=20;$i++){
            DB::table('course_student')->insert([
                'course_id' => rand(1,18),
                'student_id' => rand(1,17),
                'created_at'=> now(),
                'updated_at'=> now(),
            ]);


        }
       
    }
}
