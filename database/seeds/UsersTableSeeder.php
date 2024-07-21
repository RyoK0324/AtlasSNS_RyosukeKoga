<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['id' => '1',
            'username' => 'ユーザー',
            'mail' => 'user@test.mail',
            'password' => bcrypt('1111aaaa'),]
        ]);
    }
}
