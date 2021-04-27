<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Shafayet',
            'last_name' => 'Al-Anik',
            'role_id' => '1',
            'username' => 'admin',
            'phone' => '01771000161',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Shabib',
            'last_name' => 'Araf Ananta',
            'role_id' => '2',
            'username' => 'employer',
            'phone' => '01728283635',
            'email' => 'employer@gmail.com',
            'password' => bcrypt('123'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Rony',
            'last_name' => 'Hasan',
            'role_id' => '3',
            'username' => 'candidate',
            'phone' => '01812703132',
            'email' => 'candidate@gmail.com',
            'password' => bcrypt('123'),
        ]);
    }
}
