<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'guest_id' => 1,
            'number_of_guests' => 1,
            'check_in_date' => '2023-11-30',
            'check_out_date' => '2023-12-01',
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'guest_id' => 2,
            'number_of_guests' => 2,
            'check_in_date' => '2023-12-02',
            'check_out_date' => '2023-12-03',
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'guest_id' => 3,
            'number_of_guests' => 2,
            'check_in_date' => '2023-11-04',
            'check_out_date' => '2023-12-06',
        ];
        DB::table('reservations')->insert($param);
    }
}
