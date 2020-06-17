<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['created_at' => date("Y-m-d H:i:s"),'email'=>'admin@admin.com','name'=> "ADMINMASTER" , 'password'=>'123456']
            
        ];
        
        DB::table('admins')->insert($data);
    }
}
/*[22:19, 6/16/2020] Arhur: created_at
[22:19, 6/16/2020] Arhur: email
[22:19, 6/16/2020] Arhur: name
[22:19, 6/16/2020] Arhur: password*/