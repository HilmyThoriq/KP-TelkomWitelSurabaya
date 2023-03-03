<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mitras')->insert([
            'namamitra' => Str::random(1),
            'kodemitra' => Str::random(1),
            // 'catatan' => Str::random(),
        ]);
    }
}
