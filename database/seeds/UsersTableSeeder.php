<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'percyhu@posteo.net')->first();

        if (!$user) {
            User::create([
                'name' => 'Percy Hu',
                'email' => 'percyhu@posteo.net',
                'role' => 'admin',
                'password' => Hash::make('password')
            ]);
        }
    }
}
