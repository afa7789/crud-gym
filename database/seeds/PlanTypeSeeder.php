<?php

use Illuminate\Database\Seeder;

class PlanTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=> "daily" , 'created_at' => date("Y-m-d H:i:s") ],
            ['name'=> "monthly" ,'created_at' => date("Y-m-d H:i:s") ],
            ['name'=> "trimester" , 'created_at' => date("Y-m-d H:i:s") ],
            ['name'=> "semester" , 'created_at' => date("Y-m-d H:i:s") ],
            ['name'=> "weekly" ,'created_at' => date("Y-m-d H:i:s") ],
            ['name'=> "yearly" , 'created_at' => date("Y-m-d H:i:s") ],
            ['name'=> "helper" , 'created_at' => date("Y-m-d H:i:s") ],
            ['name'=> "free" ,'created_at' => date("Y-m-d H:i:s") ],
            ['name'=> "noplan" , 'created_at' => date("Y-m-d H:i:s") ]

        ];
        
        DB::table('plan_types')->insert($data);
    }
}
