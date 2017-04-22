<?php

use Illuminate\Database\Seeder;
use App\Model\Companies;

class companiesTableSeeder extends Seeder
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
                'name' => 'Square'
            ],

            [
                'name' => 'Beximco'
            ],

            [
                'name' => 'Orion'
            ],

            [
                'name' => 'Opsonin'
            ]
       ];

       foreach ($data as $data) {
           
           Companies::forceCreate($data);
       }
    }
}
