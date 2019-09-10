<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $statuses = ['Waiting for approval', 'Approved', 'In progress'];
        $data=[];
        foreach (range(1, 40000) as $index) {
            $single=[
            'status' => $statuses[shuffle($statuses)],
            'deadline' => $faker->dateTimeBetween('+1 month', '+2 month'),
            'budget' => rand(10000, 500000),
            ];
            $data[]=$single;
            if(count($data)==100){
                DB::table('projects')->insert($data);   
                $data=[];
            }
        }
        DB::table('projects')->insert($data);
    }
}
