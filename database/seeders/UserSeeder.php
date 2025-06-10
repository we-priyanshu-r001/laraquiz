<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i <= 50; $i++){
            $user = new User();
            $user->name = fake()->name;
            $user->email = fake()->safeEmail;
            $user->password = fake()->password;
            $user->role = fake()->randomElement(['student', 'employer', 'employee', 'teacher']);
            $user->created_at = fake()->date;
            $user->updated_at = fake()->date;
            $user->save();
        }
    }
}
