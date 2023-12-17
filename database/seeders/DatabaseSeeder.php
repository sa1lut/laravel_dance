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
        $titlesForRole = ['admin', 'client'];
        foreach($titlesForRole as $title){
            \App\Models\Role::factory()->create([
                'title' => $title
            ]);
        }
        \App\Models\User::factory()->create([
            'login' => 'admin',
            'password' => bcrypt('admin'),
            'role_id' => 1
        ]);
        // \App\Models\User::factory()->create([
        //     'login' => 'asd',
        //     'password' => bcrypt('admin'),
        //     'role_id' => 2
        // ]);
        // \App\Models\User::factory()->create([
        //     'login' => 'zxc',
        //     'password' => bcrypt('admin'),
        //     'role_id' => 2
        // ]);
        \App\Models\Teacher::factory()->create([
            'name' => 'Андрей',
            'surname' => 'Мазалов',
            'birthday' => '2000-06-06',
            'telephone' => '81234567890',
        ]);
        \App\Models\Teacher::factory()->create([
            'name' => 'Анастасия',
            'surname' => 'Машкова',
            'birthday' => '2000-06-06',
            'telephone' => '81234567890',
        ]);
        \App\Models\Teacher::factory()->create([
            'name' => 'Любовь',
            'surname' => 'Нибулина',
            'birthday' => '2000-06-06',
            'telephone' => '81234567890',
        ]);
        \App\Models\Lesson::factory()->create([
            'title' => 'Танцы разных народов',
            'image' => '',
        ]);
        \App\Models\Lesson::factory()->create([
            'title' => 'Классический танец',
            'image' => '',
        ]);
        \App\Models\Lesson::factory()->create([
            'title' => 'Русский народный танец',
            'image' => '',
        ]);
        \App\Models\Lesson::factory()->create([
            'title' => 'Танец Сальса',
            'image' => '',
        ]);
        \App\Models\Lesson::factory()->create([
            'title' => 'Балет',
            'image' => '',
        ]);
        \App\Models\Lesson::factory()->create([
            'title' => 'Растяжка',
            'image' => '',
        ]);
        \App\Models\Subscription::factory()->create([
            'title' => 'Для начинающих',
            'price' => 2500,
            'period' => 6,
            'description' => 'Будете изучать базовые упражнения, но благодаря этому вы познаете танец',
            'lesson_id' => 1,
        ]);
        \App\Models\Subscription::factory()->create([
            'title' => 'Занятия в группе',
            'price' => 2000,
            'period' => 6,
            'description' => 'Подходят для людей, которые хотят выйти из зоны комфорта. Будете работать в парах.',
            'lesson_id' => 1,
        ]);
        \App\Models\Subscription::factory()->create([
            'title' => 'Индивидуальные',
            'price' => 5000,
            'period' => 6,
            'description' => 'Подходит для людей без опыта или которые хотят стать танцорами',
            'lesson_id' => 1,
        ]);
        // \App\Models\Teacher::factory()->create([
        //     'name' => 'vasya',
        //     'surname' => 'pupkin',
        //     'birthday' => '2000-06-06',
        //     'telephone' => '1234567890',
        //     'image' => 'petya.png',
        //     'user_id' => 3,
        // ]);

        \App\Models\User::factory()->create([
            'login' => 'zxcc',
            'password' => bcrypt('admin'),
            'role_id' => 2
        ]);

        \App\Models\Client::factory()->create([
            'name' => 'Александр',
            'surname' => 'Тестовый',
            'birthday' => '2000-06-06',
            'telephone' => '81234567890',
            'user_id' => 2,
        ]);
    }
}
