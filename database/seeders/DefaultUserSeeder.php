<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Febrianto M Ipu', 
            'email' => 'febri@febriantomipu.com',
            'password' => Hash::make('febri1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Fetrus Jari', 
            'email' => 'fetrus@febriantomipu.com',
            'password' => Hash::make('fetrus1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Febrianto PM user', 
            'email' => 'pmuser@febriantomipu.com',
            'password' => Hash::make('pmuser1234')
        ]);
        $productManager->assignRole('Product Manager');

        // Creating Application User
        $user = User::create([
            'name' => 'Febrianto Apps user', 
            'email' => 'user@febriantomipu.com',
            'password' => Hash::make('appsuser1234')
        ]);
        $user->assignRole('User');
    }
}
