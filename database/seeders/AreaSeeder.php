<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
                'name' => 'Uttara',
                'code' => '1230'
            ],
            [
                'name' => 'Mohammadpur',
                'code' => '1231'
            ],
            [
                'name' => 'Dhanmondi',
                'code' => '1232'
            ],
            [
                'name' => 'Basundhara',
                'code' => '1233'
            ],
            [
                'name' => 'Rampura',
                'code' => '1234'
            ],
            [
                'name' => 'Banasree',
                'code' => '1235'
            ],
            [
                'name' => 'Baridhara',
                'code' => '1236'
            ],
            [
                'name' => 'Mohakhali',
                'code' => '1237'
            ],
            [
                'name' => 'Jigatola',
                'code' => '1238'
            ],
            [
                'name' => 'Kuril',
                'code' => '1239'
            ],
        ]);
    }
}
