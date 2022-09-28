<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('posts')->insert([
            'title' => Str::random(10),
            'content' => Str::random(250),
        ]);
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'content' => Str::random(250),
        ]);
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'content' => Str::random(250),
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
