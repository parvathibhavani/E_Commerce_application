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
        \App\Models\User::create([
            'name'=>'happy',
            'email'=>'happy@laravel.com',
            'password'=>'happy'
        ]);



        \App\Models\User::create([
            'name'=>'book',
            'email'=>'book@laravel.com',
            'password'=>'book'
        ]);

        $this->call([
            ProductSeeder::class,
        ]);


         


    }
}
