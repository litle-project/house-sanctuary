<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();

        User::insert([
            [
                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('123456'),
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
