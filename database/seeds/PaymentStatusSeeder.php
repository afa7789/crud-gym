<?php

use Illuminate\Database\Seeder;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=> "Pending"],
            ['name'=> "Completed"],
            ['name'=> "Ignored"],
        ];
        
        DB::table('payment_statuses')->insert($data);
    }
}
