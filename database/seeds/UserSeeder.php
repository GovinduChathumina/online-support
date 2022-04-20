<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Govindu',
            'email' => 'sethma96@gmail.com',
            'password' => Hash::make('govi9667'),
            'is_admin' => '1',
        ]);
    }
}
