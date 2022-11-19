<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $users = [
            [
                'name' => 'Administrator',
                'email' => 'mackaonadmin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('macadmin123'),
                'role_as' => '1',
            ],
            [
                'name' => 'Staff',
                'email' => 'mackaonstaff@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('macstaff123'),
                'role_as' => '2',
            ],
            [
                'name' => 'Test User',
                'email' => 'user@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('user123'),
                'role_as' => '0',
            ]
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
