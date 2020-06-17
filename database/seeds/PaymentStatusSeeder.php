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
            ['name'=> "Pending" , 'created_at' => date("Y-m-d H:i:s") ],
            ['name'=> "Completed" ,'created_at' => date("Y-m-d H:i:s") ],
            ['name'=> "Ignored" , 'created_at' => date("Y-m-d H:i:s") ],
        ];
        
        DB::table('payment_statuses')->insert($data);
    }
}
