<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pigly_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $param = [
            'name' => 'user1',
            'email' => 'abc@email.com',
            'password' => 'abcdef'
        ];
        DB::table('pigly_users')->insert($param);
    }
}
