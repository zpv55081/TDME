<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Запуск сидера.
     */
    public function run(): void
    {
        // Создаем роли
        $roles = [
            'Администратор',
            'Редактор',
            'Пользователь',
        ];

        foreach ($roles as $roleName) {
            Role::create(['name' => $roleName]);
        }

        // Создаем 15 пользователей
        User::factory(15)->create()->each(function ($user) {
            // Назначаем случайные роли пользователям
            $roles = Role::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $user->roles()->attach($roles);
        });
    }
}
