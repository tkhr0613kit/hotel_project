<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void

{

    {   


        $this->call(ReservationsTableSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RoomsTableSeeder::class);

        $this->call(RoomtypesTableSeeder::class);
        $this->call(Reserve_listsSeeder::class);

        

      

        \App\Models\Guest::factory(10)->create();

    }
}
}