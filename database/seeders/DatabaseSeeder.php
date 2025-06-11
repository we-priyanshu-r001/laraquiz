<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Assessment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->unverified()->create(); 

        // User::factory(10)->create()->each(function ($user){
        //     $user->address()->save(Address::factory()->make());
        // });

        User::factory(10)->has(Address::factory())->has(Assessment::factory(5))->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'Test@123'
        ]);

        $this->call([
           AdminSeeder::class,
           CategorySeeder::class,
        ]);
    }
}
