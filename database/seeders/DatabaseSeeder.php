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
    }
}
