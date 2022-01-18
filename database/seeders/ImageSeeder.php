<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'name' => 'Foto Keluarga 1',
            'description' => 'Foto Keluarga 1',
            'image' => 'storage/image_1.jpg',
        ]);
        DB::table('images')->insert([
            'name' => 'Foto Keluarga 2',
            'description' => 'Foto Keluarga 2',
            'image' => 'storage/image_2.png',
        ]);
        DB::table('images')->insert([
            'name' => 'Foto Keluarga 3',
            'description' => 'Foto Keluarga 3',
            'image' => 'storage/image_3.jpg',
        ]);
        DB::table('images')->insert([
            'name' => 'Foto Keluarga 4',
            'description' => 'Foto Keluarga 4',
            'image' => 'storage/image_4.jpg',
        ]);
        DB::table('images')->insert([
            'name' => 'Foto Keluarga 5',
            'description' => 'Foto Keluarga 5',
            'image' => 'storage/image_5.jpg',
        ]);
        DB::table('images')->insert([
            'name' => 'Foto Keluarga 6',
            'description' => 'Foto Keluarga 6',
            'image' => 'storage/image_6.jpg',
        ]);
        DB::table('images')->insert([
            'name' => 'Foto Keluarga 7',
            'description' => 'Foto Keluarga 7',
            'image' => 'storage/image_7.jpg',
        ]);
        DB::table('images')->insert([
            'name' => 'Foto Keluarga 8',
            'description' => 'Foto Keluarga 8',
            'image' => 'storage/image_8.jpg',
        ]);
        DB::table('images')->insert([
            'name' => 'Foto Keluarga 9',
            'description' => 'Foto Keluarga 9',
            'image' => 'storage/image_9.jpg',
        ]);
    }
}
