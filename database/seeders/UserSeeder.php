<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            //1
            'name' => 'admin1',
            'email' => 'admin1@gettour.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Admin@123'),
            'level' => 'admin',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('Users')->insert([
            //2
            'name' => 'admin2',
            'email' => 'admin2@gettour.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Admin@123'),
            'level' => 'admin',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
