<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('users')->insert([
            'name' => 'Albi',
            'role' => 'admin',
            'email' => 'albi@coach.com',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Andre',
            'role' => 'webmaster',
            'email' => 'andre@exo.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
