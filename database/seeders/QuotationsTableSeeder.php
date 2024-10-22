<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quotations')->insert([
            ['quotations_name' => 'Al Ain Plastic Industry', 'currency' => 'Dirham', 'payment_term' => 'Against job completion','delivery_period' => '6 months', 'unit_cost' => 60000.00,'total_cost'=> 60000.00],
            ['quotations_name' => 'Abulurahman Salem Al Salem Est', 'currency' => 'Dirham', 'payment_term' => 'Advance','delivery_period' => '6 months', 'unit_cost' => 68000.00,'total_cost'=> 68000.00],
            ['quotations_name' => 'Accurate Meezan Trading LLC', 'currency' => 'Dirham', 'payment_term' => 'CDC','delivery_period' => '5-7 months', 'unit_cost' => 120000.00,'total_cost'=> 120000.00],
        ]);
    }
}