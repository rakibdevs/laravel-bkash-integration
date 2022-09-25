<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::insert([
            [
                'invoice_id' => 'INV-1001',
                'amount' => 150,
            ],
            [
                'invoice_id' => 'INV-1002',
                'amount' => 200,
            ]

        ]);
    }
}
