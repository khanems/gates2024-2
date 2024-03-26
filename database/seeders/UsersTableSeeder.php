<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
Use DB;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin user
          DB::table('users')->insert([
            'name' => 'Admin User',
            'image' =>'user-5.jpg',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('ahmed3311'),
            'role' => 'Admin',
        ]);

        // Vendor user
        $vendor = user::create([
            'name' => 'Vendor User',
            'image' =>'user-4.jpg',
            'email' => 'vendor@gmail.com',
            'password' => Hash::make('ahmed3311'),
            'role' => 'Vendor',
        ]);

        // Regular user
        DB::table('users')->insert([
            'name' => 'Regular User',
            'image' =>'user-6.jpg',
            'email' => 'user@gmail.com',
            'password' => Hash::make('ahmed3311'),
            'role' => 'User',
            'vendor_id' => $vendor->id,
        ]);
    }
}
