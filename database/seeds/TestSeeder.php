<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=100;$i++){
            DB::table('posts')->insert([
                'title' => Str::random(10),
                'body' => Str::random(100),
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s'),
            ]);   
        }
    }
}
