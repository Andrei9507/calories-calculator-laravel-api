<?php

use Illuminate\Database\Seeder;
use App\Quantity;

class QuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            Quantity::create([
                'value' => $i,
            ]);
        }
    }
}
