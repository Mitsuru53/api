<?php

use Illuminate\Database\Seeder;
use App\Model\Review;
use App\Model\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 5)->create();
        factory(App\Model\Product::class, 50)->create();
        factory(App\Model\Review::class, 300)->create();
    }
}
