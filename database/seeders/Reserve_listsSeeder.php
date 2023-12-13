<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Reserve_listsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=\Faker\Factory::create('ja_JP');
        for($i=0; $i<10; $i++){
            $param =['reservation_id'=>$i+1,
            'room_id'=>$i+1,
            'stay_day'=>$faker->numberBetween(1,10),
            'price'=>$faker->randomNumber()

        ];
        DB::table('reserve_lists')->insert($param);
        }
    }
}
