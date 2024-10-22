<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            ['item' => 'Net Total Value', 'total_cost' => 12000.00,'quotation_id' => 1],
            ['item' => 'Net Total Value', 'total_cost' => 136000.00,'quotation_id' => 2],
            ['item' => 'Net Total Value', 'total_cost' => 24000.00,'quotation_id' => 3],
            ['item' => 'Net Value of the Awardded Item', 'total_cost' => 12000.00,'quotation_id' => 1],
            ['item' => 'Net Value of the Awardded Item', 'total_cost' => 0.00,'quotation_id' => 2],
            ['item' => 'Net Value of the Awardded Item', 'total_cost' => 0.00,'quotation_id' => 3],
            ['item' => 'Vat of the Awardded Item', 'total_cost' => 6000.00,'quotation_id' => 1],
            ['item' => 'Vat of the Awardded Item', 'total_cost' => 0.00,'quotation_id' => 2],
            ['item' => 'Vat of the Awardded Item', 'total_cost' => 0.00,'quotation_id' => 3],
            ['item' => 'Net total values of the Awardded Item', 'total_cost' => 12000.00,'quotation_id' => 1],
            ['item' => 'Net total values of the Awardded Item', 'total_cost' => 0.00,'quotation_id' => 2],
            ['item' => 'VNet total values of the Awardded Item', 'total_cost' => 0.00,'quotation_id' => 3],
        ]);
    }
}
