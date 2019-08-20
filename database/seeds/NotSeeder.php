<?php

use App\Not;
use Illuminate\Database\Seeder;

class NotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Not::class, 10)->create();
    }
}