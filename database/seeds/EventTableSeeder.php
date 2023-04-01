<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Illuminate\Support\Facades\DB::table('events')->insert([

            [
                'title' => 'Reunião',
                'start' => '2023-03-18 21:30:00',
                'end' => '2023-03-19 21:30:00',
                'color' => '#1C415B',
                'description' => 'Reunião com o Cliente'
            ],
            [
                'title' => 'Atormentar a Carol',
                'start' => '2023-03-19',
                'end' => '2023-03-20',
                'color' => '#FF9B09',
                'description' => 'Perguntar se ela ta brava'
            ],
        ]);
    }
}
