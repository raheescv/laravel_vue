<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(TestSeeder::class);
        $this->call(ProjectsTableSeeder::class);
    }
}
