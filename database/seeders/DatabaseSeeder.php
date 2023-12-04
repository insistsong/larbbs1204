<?php

namespace Database\Seeders;

<<<<<<< HEAD
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
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
=======
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
		$this->call(RepliesTableSeeder::class);
        $this->call(LinksTableSeeder::class);
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
    }
}
