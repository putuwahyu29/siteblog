<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::create([
            'name' => 'Agus',
            'username' => 'aguswahyu',
            'email' => 'iputuagus.wahyu@gmail.com',
            'password' => bcrypt('290802'),
            'role' => 'admin',
        ]);
        User::factory(3)->create();
        Post::factory(20)->create();
        Category::create(['name' => 'Web Programming', 'slug' => 'web-programming']);
        Category::create(['name' => 'Web Design', 'slug' => 'web-design']);
    }
}
