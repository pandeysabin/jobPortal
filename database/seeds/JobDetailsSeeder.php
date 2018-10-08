<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {
            DB::table('job_portals')->insert([
                'email' => str_random(10).'@gmail.com',
                'jTitle' => str_random(10),
                'jDetails' => str_random(10),
                'skillSet' => str_random(10),
                'uID' => str_random(10),
            ]);
        }
    }
}
