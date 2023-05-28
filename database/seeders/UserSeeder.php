<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin1',
                'email' => 'admin1@gmail.com',
                'role' => '1',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Admin2',
                'email' => 'admin2@gmail.com',
                'role' => '0',
                'password' => Hash::make('87654321'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
