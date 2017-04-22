<?php

use Illuminate\Database\Seeder;
use App\Model\Categories;

class categoriesTableSeeder extends Seeder
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
                'name' => 'Tablet',
                'company_id' => '1'
                
            ],

            [
                'name' => 'Syrup',
                'company_id' => '2'
                
            ],

            [
                'name' => 'Cream',
                'company_id' => '3'
            ],

            [
                'name' => 'Spray',
                'company_id' => '4'
            ]
            
        ];

        foreach($data as $data)
        {
            Categories::forceCreate($data);
        }
    }
}
