<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table("roles")->insert([
            ['name' => 'Admin'],
            ['name' => 'User'],
    ]);
    $this->call(RoleSeeder::class);
}
}