<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mitras')->insert([
            'namamitra' => Str::random(10),
            'kodemitra' => Str::random(10),
            'catatan' => Str::random(10),
        ]);
    }
}
