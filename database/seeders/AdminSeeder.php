<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Test Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('password'),
                'user_type'=> 'admin',
                'status'=> 'active'
            ],
            [
                'name' => 'Test Staff',
                'email' => 'staff@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('password'),
                'user_type'=> 'staff',
                'status'=> 'active'
            ],
            [
                'name' => 'Test User',
                'email' => 'user@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('password'),
                'user_type'=> 'user',
                'status'=> 'active'
            ],
        
        ];
        foreach($users as $user){
            User::create($user);
        }

    }
}
