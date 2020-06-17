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
<<<<<<< HEAD
        //
=======
>>>>>>> 11d9518d8a9151caf979c37ef78248344c059407
        $data = [
            ['name'=> "Pending"],
            ['name'=> "Completed"],
            ['name'=> "Ignored"],
        ];
<<<<<<< HEAD

=======
        
>>>>>>> 11d9518d8a9151caf979c37ef78248344c059407
        DB::table('payment_statuses')->insert($data);
    }
}
}