<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    //php artisan make:model Semester -m -c -r -s -f
    //php artisan migrate:refresh
    //php artisan db:seed --class=SemesterSeeder
    //php artisan db:seed --class=DatabaseSeeder
    public function run()
    {
        $this->call([
            ClassRoomeSeeder::class,
            SemesterSeeder::class,
            SubjectsSeeder::class,
            ResourceSeeder::class,
            TypeInfoSeeder::class,

            

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
