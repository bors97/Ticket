<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //         TicketSeeder::class,
        //         CommentSeeder::class,
        //         UserSeeder::class,
        //     ]
        //);

        User::factory()
                ->hasTickets(5)
                ->create([
                'is_admin' => true,
            ]);

        User::factory(10)->create();
    }
}
