<?php

namespace Database\Seeders;

use App\Models\settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        settings::create([

        'name'=>'Etrain_academy',
        'email'=>'Etrain_academy',
        'logo'=>'WRUqaMRGbNutnEhGNgsLyCOEkxOxRRngE9STr1RF.png',
        'favicon'=>'hljblc81DPCOzcMFk9h9TdYb3kosHhOB7yHcRFbj.png',
        'city'=>'cairo egypy',
        'address'=>'abas elakad',
        'phone'=>'0114524867 ',
        'work_hours'=>'9am to 5pm',
        'map'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27625.20802889157!2d31.3407025!3d30.0612058!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e65c130f951%3A0xd2b9714b75fc3cb5!2z2LnYqNin2LMg2KfZhNi52YLYp9iv2Iwg2KfZhNmF2YbYt9mC2Kkg2KfZhNij2YjZhNmJ2',
        'face'=>'https://www.facebook.com',
        'twitter'=>'https://www.twitter.com',
        'insta'=>'https://www.insta.com',


        ]);
    }
}
