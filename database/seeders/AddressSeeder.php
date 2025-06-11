<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $address = new Address;
        $address->user_id = '3d63928e-edc6-4130-83ba-93071ce1e593';
        $address->country = 'india';
        $address->state = 'delhi';
        $address->pin = 474002;
        $address->save();
    }
}
