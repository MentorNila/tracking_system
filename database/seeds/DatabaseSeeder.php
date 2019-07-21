<?php
use App\TrackingCode;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => Hash::make('secret')
        ]);

        TrackingCode::create([
            'tracking_code' => '123123',
            'user_id' => $user->id,
            'estimated_delivery_date_time' => '2019-07-31 00:00:00'
        ]);
    }
}