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
    public function run()
    {
        // \App\Models\Category::factory(6)->create();
        // \App\Models\Product::factory(16)->create();

        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(1)->create([
            'name'=>'Anthony Wahome',
            'email'=>'artisticexcursions@gmail.com',
            'password'=>bcrypt('PLMzaq&4321x'),
            'utype'=>'ADM',
        ]);

        \App\Models\User::factory(1)->create([
            'name'=>'lewis Miugo',
            'email'=>'lewiswambugu01@gmail.com',
            'password'=>bcrypt('PLMzaq&4321x'),
            'utype'=>'ADM',
        ]);
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
