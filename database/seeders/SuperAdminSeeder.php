<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperAdminSeeder extends Seeder
{
    public function run()
    {
         DB::table('super_admins')->delete();
         DB::table('super_admins')->insert(
            [
                'name' => 'superAdmin',
                'email' => 'sadmin@yahoo.com',
                'email_verified_at' => now(),
                'password' => '123456',
                'remember_token' => null,
            ]
            );
    }
}
