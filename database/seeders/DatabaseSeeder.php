<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $titlesForRole = ['admin', 'teacher', 'client'];
        foreach($titlesForRole as $title){
            \App\Models\Role::factory()->create([
                'title' => $title
            ]);
        }
        \App\Models\Customer::factory()->create([
            'login' => 'admin',
            'password' => 'admin',
            'role_id' => 1
        ]);
        \App\Models\Customer::factory()->create([
            'login' => 'asd',
            'password' => 'asd',
            'role_id' => 2
        ]);
        \App\Models\Customer::factory()->create([
            'login' => 'zxc',
            'password' => 'zxc',
            'role_id' => 2
        ]);
        \App\Models\Teacher::factory()->create([
            'name' => 'petya',
            'surname' => 'pupkin',
            'birthday' => '2000-06-06',
            'telephone' => '1234567890',
            'image' => 'petya.png',
            'customer_id' => 2,
        ]);
        \App\Models\Teacher::factory()->create([
            'name' => 'vasya',
            'surname' => 'pupkin',
            'birthday' => '2000-06-06',
            'telephone' => '1234567890',
            'image' => 'petya.png',
            'customer_id' => 3,
        ]);
    }
}
