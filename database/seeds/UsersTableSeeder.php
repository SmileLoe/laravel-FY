<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * 运行数据库种子。
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>str_random(10),
            'email'=>str_random(10).'@vip.com',
            'password'=>bcrypt('secret'),
        ]);
        //
    }
}
