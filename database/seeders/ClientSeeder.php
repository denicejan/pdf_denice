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
        
        $cl = [
           
            [
                'last_name' => 'Caminus',
                'first_name' => 'Apple',
                'middle_name' => 'Jane',
                'address' => ' Korea',
                'birth_date' => '2001-6-03',
                'phone_number' => '090238423784',
                'email' => 'acejoygwapo123@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Mejias',
                'first_name' => 'Francis Michael',
                'middle_name' => 'Cabrera',
                'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
                'birth_date' => '2002-7-8',
                'phone_number' => '09606765143',
                'email' => 'mejiasfranzsaijem@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Mejias',
                'first_name' => 'Francis Michael',
                'middle_name' => 'Cabrera',
                'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
                'birth_date' => '2002-7-8',
                'phone_number' => '09606765143',
                'email' => 'mikoremixes@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Aparicio',
                'first_name' => 'Denice Jane',
                'middle_name' => 'Bautista',
                'address' => 'Centro 2. Baogo, Inabanga, Bohol',
                'birth_date' => '2002-7-8',
                'phone_number' => '09606765143',
                'email' => 'denicejaneaparicio1402@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Mejias II',
                'first_name' => 'Francis Michael II',
                'middle_name' => 'Cabrera II',
                'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
                'birth_date' => '2002-7-8',
                'phone_number' => '09606765143',
                'email' => 'mejiasforfacebook@gmail.com',
                'initial_deposit' => 10000
            ],

            [
                'last_name' => 'Dupa',
                'first_name' => 'Kristin Mae',
                'middle_name' => 'Joy',
                'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
                'birth_date' => '2002-7-8',
                'phone_number' => '09606765143',
                'email' => 'dupakristine96@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Mueblas',
                'first_name' => 'Mark Lster',
                'middle_name' => 'Elle',
                'address' => 'Purok 4. Cagayan, Inabanga, Bohol',
                'birth_date' => '2002-7-8',
                'phone_number' => '09606765143',
                'email' => 'marklistermueblas3@gmail.com',
                'initial_deposit' => 10000
            ],


            [
                'last_name' => 'Aparicio',
                'first_name' => 'Zandre',
                'middle_name' => 'Duallo',
                'address' => 'Nabuad, Inabanga, Bohol',
                'birth_date' => '1998-12-30',
                'phone_number' => '0945768910',
                'email' => 'apariciozandre22@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Lauros',
                'first_name' => 'Mary Joy Marie',
                'middle_name' => 'Manoban',
                'address' => 'Pondol, Loon, Bohol',
                'birth_date' => '2001-9-12',
                'phone_number' => '0912345678',
                'email' => 'maryjoylauros68@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Bautista',
                'first_name' => 'Noel',
                'middle_name' => 'Cortes',
                'address' => 'Cagayan, Bohol',
                'birth_date' => '2003-10-12',
                'phone_number' => '09564848746',
                'email' => 'aparicio.enice1402@gmail.com',
                'initial_deposit' => 10000
            ],

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
