<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<10;$i++){
      $param = [
        'room_type_id' =>fake()->numberBetween(1,1),
        'room_number' =>fake()->numberBetween(1, 30),
        'created_at' => now(),
            'updated_at' => now(),
      ];
      DB::table('rooms')->insert($param);}
    }
    }

