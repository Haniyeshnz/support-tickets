<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class LabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('labels')->insert([

            [
                'id' => 1,
                'name' => 'bug',
                'slug' => 'bug',

            ],
            [
                'id' => 2,
                'name' => 'question',
                'slug' => 'question',

            ],
            [
                'id' => 3,
                'name' => 'enhancement',
                'slug' => 'enhancement',

            ]
        ]);
    }
}
