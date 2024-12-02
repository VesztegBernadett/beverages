<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beverages')->insert([
            'name'=>"Coca-Cola",
            'size'=>0.5,
            'type'=>"szénsavas",
            "packaging"=>"dobozos"
        ]);
    }
}
