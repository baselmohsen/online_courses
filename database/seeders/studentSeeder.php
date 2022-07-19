<?php

namespace Database\Seeders;
use App\Models\student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    student::create([
            "name" => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
    
        ]); 
    }
}
