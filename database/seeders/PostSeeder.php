<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // Check if the user already exists first
        $user = DB::table('users')->where('email', 'scheng@paragoniu.edu.kh')->first();

        if ($user) {
            $userId = $user->id;
        } else {
            // Create the user if they don't exist yet
            $userId = DB::table('users')->insertGetId([
                'name' => 'Senghab',
                'email' => 'scheng@paragoniu.edu.kh',
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 2. Insert the post data
        DB::table('posts')->insert([
            'title' => 'Hello it is me Xiang Yu',
            'body' => 'This is the body of the post.',
            'user_id' => $userId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}