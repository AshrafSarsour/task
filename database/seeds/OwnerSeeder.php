<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            'id' => 1,
            'name' => "Test Owner 1",
        ]);
        DB::table('owners')->insert([
            'id' => 2,
            'name' => "Test Owner 2",
        ]);
    }
}
