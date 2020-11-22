<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
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
        $this->call(UserTableSeeder::class);

        PostFactory::new()->times(5)->create([
            'user_id' => 1,
        ]);

        PostFactory::new()->times(15)->create([
            'user_id' => 2,
        ]);

        PostFactory::new()->times(4)->create([
            'user_id' => 3,
        ]);
    }
}
