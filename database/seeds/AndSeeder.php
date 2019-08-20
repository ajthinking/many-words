<?php

use App\And;
use Illuminate\Database\Seeder;

class AndSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(And::class, 10)->create();
    }
}