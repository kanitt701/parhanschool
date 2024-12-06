<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menghapus semua data di tabel users
        DB::table('users')->truncate();
    
        // Menambahkan data baru
        DB::table('users')->insert([
            [
                'name' => 'Sri Karnita Adriyana',
                'email' => 'itsmekanitt@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'user1',
                'email' => 'user1@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'user2',
                'email' => 'user2@example.com',
                'password' => bcrypt('password'),
            ],
        ]);
    }    
}