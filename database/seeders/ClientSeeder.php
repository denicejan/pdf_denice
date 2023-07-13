<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Aparicio',
                'first_name' => 'Denice Jane',
                'middle_name' => 'Bautista',
                'address' => 'Centro2, Baogo, Inabanga, Bohol',
                'birth_date' => '2002-10-14',
                'phone_number' => '09203522715',
                'email' => 'denicejaneaparicio1402@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Caminus',
                'first_name' => 'Apple',
                'middle_name' => 'Jane',
                'address' => ' Korea',
                'birth_date' => '2001-6-03',
                'phone_number' => '090238423784',
                'email' => 'denicejaneaparicio1402@gmail.com',
                'initial_deposit' => 10000
            ]

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
