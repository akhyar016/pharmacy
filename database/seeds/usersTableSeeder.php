<?php

use Illuminate\Database\Seeder;
use App\User;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Jaidul Islam',
                'email' => 'islamjaidul@gmail.com',
                'password' => bcrypt('secret')
            ],

            [
                'name' => 'Jahangir Alam',
                'email' => 'jahangiralam90@gmail.com',
                'password' => bcrypt('secret')
            ],

            [
                'name' => 'Kilimanzaro 22 Litres',
                'email' => 'liters22@gmail.com',
                'password' => bcrypt('secret')
            ],

            [
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret')
            ]
            
        ];

        foreach($data as $data)
        {
            User::forceCreate($data);
        }
    }
}
