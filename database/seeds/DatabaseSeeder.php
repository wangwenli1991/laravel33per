<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(PostsTagsTableSeeder::class);
        $this->call(CategorysTableSeeder::class);
        $this->call(NavicationsTableSeeder::class);
    }
}
