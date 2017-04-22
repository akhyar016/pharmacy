<?php

use Illuminate\Database\Seeder;
use App\Model\Suppliers;

class suppliersTableSeeder extends Seeder
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
                'first_name' => "Akhyar", 
                'last_name' => "Ahmed", 
                'email' => "nuhas90@gmail.com", 
                'mobile' => "01700119011", 
                'company_id' => '1'
            ],

            [
                'first_name' => "Rafsan", 
                'last_name' => "Jani", 
                'email' => "hashemirafsan@gmail.com", 
                'mobile' => "01324324324", 
                'company_id' => '2'
            ],

            [
                'first_name' => "Saimon", 
                'last_name' => "Islam", 
                'email' => "paglaSaimon@gmail.com", 
                'mobile' => "089973722891", 
                'company_id' => '3'
            ],

            [
                'first_name' => "Ruhel", 
                'last_name' => "Khan", 
                'email' => "dev-ruhel@gmail.com", 
                'mobile' => "+880172420420", 
                'company_id' => '4'
            ]

        ];

        foreach ($data as $data) {
            Suppliers::forceCreate($data);
        }
    }
}
