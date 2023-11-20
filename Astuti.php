<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
         // $data = [
        //     ['id'=>1, 'name' => 'Astuti', 'score'=> 80],
        //     ['id'=>2, 'name' => 'Solihatun', 'score'=> 85],
        //     ['id'=>3, 'name' => 'Nisa', 'score'=> 90],
        // ];
        
        $data = [];
        $faker = Faker::create();

        for ($i = 3; $i < 57; $i++) {
            $data[] = [
                'id' => $i + 1,
                'name'  => $faker->name,
                'score' => rand(50, 100),
            ];
        }

        DB::table('student')->insert($data);
    }
}
