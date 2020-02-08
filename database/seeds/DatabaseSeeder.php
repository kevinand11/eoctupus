<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Report;
use App\Centre;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,20)->create();
        factory(Report::class,50)->create();
        factory(Article::class,20)->create();
        factory(Centre::class,10)->create();
    }
}
