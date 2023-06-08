<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([

            [
                'id' => 1,
                'name' => 'Uncategorized',
                'slug' => 'Uncategorized',

            ],
            [
                'id' => 2,
                'name' => 'Billing/payments',
                'slug' => 'Billing/payments',

            ],
            [
                'id' => 3,
                'name' => 'Technical question',
                'slug' => 'Technical question',

            ]
        ]);
    }
}
