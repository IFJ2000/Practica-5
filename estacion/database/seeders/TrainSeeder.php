<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([

            [
                'name' => 'El trenecito jugueton',
                'passengers' => 200,
                'year' => 1999,
                'train_type_id' => 1

            ],
            [
                'name' => 'El tren lento',
                'passengers' => 100,
                'year' => 2009,
                'train_type_id' => 2

            ],
            [
                'name' => 'El super tren',
                'passengers' => 260,
                'year' => 2017,
                'train_type_id' => 3

            ],


        ]);
    }
}
