<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname' => 'HanksScorpio',
            'email' => 'hank@scorpio.net',
            'phone' => 3193697968,
            'birthdate' => '1988-09-28',
            'gender' => 'Male',
            'address' => 'Springfield',
            'password' => bcrypt('admin'),
            'role' => 'Admin',
            'created_at' => now(),
        ]);
        //Factory
        factory(User::class, 100)->create();
    }
}


