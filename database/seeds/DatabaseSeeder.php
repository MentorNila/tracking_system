<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => Hash::make('secret')
        ]);
    }
}