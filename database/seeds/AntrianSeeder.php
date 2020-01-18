<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AntrianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('antrians')->truncate();
        DB::table('antrians')->insert([
            "antrian" => 1
        ]);
    }
}
