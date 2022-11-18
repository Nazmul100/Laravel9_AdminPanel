<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email'=>'admin@example.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt('password'),
            'is_admin' => 1
        ]);
    }
}
