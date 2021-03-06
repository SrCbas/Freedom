<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RepostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i <= 5; $i++):
            DB::table("reposts")->insert([
                "fk_user" => 1,
                "fk_post" => $i
            ]);
        endfor;
    }
}
