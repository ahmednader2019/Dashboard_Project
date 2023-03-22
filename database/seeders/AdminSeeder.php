<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{

    public function run()
    {
        DB::table('admins')->delete();
        DB::table('admins')->insert(
            [
                'name' => 'admin',
                'email' => 'admin@yahoo.com',
                'email_verified_at' => now(),
                'password' => '123456',
                'remember_token' => null,
            ]
            );
    }
}
