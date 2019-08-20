<?php

use App\Okay;
use Illuminate\Database\Seeder;

class OkaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Okay::class, 10)->create();
    }
}