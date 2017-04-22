<?php

use Illuminate\Database\Seeder;
use App\Model\Medicines;

class medicineTableSeeder extends Seeder
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
                'category_id' => '1',
                'supplier_id' => '1',
                'name' => "Napa Extra",
                'base_price' => '1.0',
                'total_quantity' => '20',
                'sold' => '0'
            ],

            [
                'category_id' => '1',
                'supplier_id' => '1',
                'name' => "Ace 2.0",
                'base_price' => '1.5',
                'total_quantity' => '20',
                'sold' => '0'
            ],

            [
                'category_id' => '2',
                'supplier_id' => '2',
                'name' => "Dexprotin",
                'base_price' => '70.0',
                'total_quantity' => '20',
                'sold' => '0'
            ],

            [
                'category_id' => '3',
                'supplier_id' => '3',
                'name' => "Pevison",
                'base_price' => '30',
                'total_quantity' => '10',
                'sold' => '0'
            ]
        ];

        foreach ($data as $data) {
            Medicines::forceCreate($data);
        }
    }
}
