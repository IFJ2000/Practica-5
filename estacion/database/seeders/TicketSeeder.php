<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([

            [
                'date' => '2024-01-16',
                'price' => 20,
                'train_id' => 1,
                'ticket_type_id' => 1

            ],
            [
                'date' => '2023-11-06',
                'price' => 50,
                'train_id' => 2,
                'ticket_type_id' => 2

            ],
            [
                'date' => '2022-02-11',
                'price' => 100,
                'train_id' => 3,
                'ticket_type_id' => 3

            ],

        ]);
    }
}
