<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'room_name' => 'シングル',
            'room_capacity' => '1'
        ];

        $param = [
            'room_name' => 'ツイン',
            'room_capacity' => '2'
        ];

        DB::table('room_types')->insert($param);
    }
}
