<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'PHP'],
            ['title' => 'MySQL'],
            ['title' => 'Linux'],
            ['title' => 'Web'],
            ['title' => 'Algorithm'],
            ['title' => 'Review'],
            ['title' => 'Other']
        ];

        DB::table('categories')->insert($data);
    }
}
