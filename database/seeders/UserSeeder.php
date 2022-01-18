<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Valerius Robert',
            'email' => 'Syn@gmail.com',
            'password' => Hash::make('Synch02'),
            'like_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Nathaniel Davin',
            'email' => 'date@gmail.com',
            'password' => Hash::make('12345678'),
            'like_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Antonius Cipta',
            'email' => 'anton@gmail.com',
            'password' => Hash::make('12345678'),
            'like_id' => 1,
        ]);
    }
}
