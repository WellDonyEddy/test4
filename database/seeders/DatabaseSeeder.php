<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Caretaker;
use App\Models\Child;
use App\Models\Group;
use App\Models\Teacher;
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
        Group::factory(5)->create();
        $children=Child::factory(12)->create();
        $caretakers=Caretaker::factory(12)->create()->each(function($caretaker)use($children){
            $caretaker->children()->attach($children->random(2));
        });
        Teacher::factory(8)->create();
    }
}
